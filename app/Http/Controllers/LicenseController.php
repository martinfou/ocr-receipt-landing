<?php

namespace App\Http\Controllers;

use App\Models\EmailVerification;
use App\Models\LicensePurchase;
use App\Services\LicenseGenerator;
use App\Services\VerificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\Webhook;

class LicenseController extends Controller
{
    private VerificationService $verificationService;

    public function __construct(VerificationService $verificationService)
    {
        $this->verificationService = $verificationService;
        $secretKey = config('services.stripe.secret_key');
        if (!empty($secretKey)) {
            Stripe::setApiKey($secretKey);
        }
    }

    /**
     * Create a Stripe Checkout Session or initiate OTP-verified early access.
     */
    public function checkout(Request $request)
    {
        $email = strtolower(trim((string) $request->input('email', '')));
        $tier = strtolower(trim((string) $request->input('tier', 'pro'))) ?: 'pro';
        $isJson = $request->expectsJson() || $request->isJson();

        if (empty($email) && $isJson) {
            return response()->json([
                'needs_email' => true,
                'stripe_configured' => $this->isStripeConfigured(),
            ]);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg = 'Veuillez fournir une adresse email valide.';
            return $isJson ? response()->json(['error' => $msg], 422) : back()->with('error', $msg);
        }

        try {
            // If Stripe is configured, create a real Stripe Checkout session (S1.2)
            if ($this->isStripeConfigured()) {
                $amountCents = LicenseGenerator::priceCentsForEdition($tier);
                $tierTitle = ucfirst($tier);

                $session = Session::create([
                    'payment_method_types' => ['card'],
                    'customer_email' => $email,
                    'line_items' => [[
                        'price_data' => [
                            'currency' => 'cad',
                            'product_data' => [
                                'name' => "OCR Receipt — Licence {$tierTitle} Perpétuelle",
                                'description' => 'Licence hors-ligne à vie pour Windows, macOS et Linux.',
                            ],
                            'unit_amount' => $amountCents,
                        ],
                        'quantity' => 1,
                    ]],
                    'mode' => 'payment',
                    'metadata' => [
                        'email' => $email,
                        'tier' => $tier,
                    ],
                    'success_url' => route('license.success', [], true) . '?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => route('license.cancel', [], true),
                ]);

                if ($isJson) {
                    return response()->json(['url' => $session->url]);
                }
                return redirect($session->url);
            }

            // Graceful fallback / Early Access with Email OTP Verification (S1.5 + S1.8)
            $sessionId = 'early-access-' . uniqid();
            $this->verificationService->sendVerificationCode($email, $tier, $sessionId);

            $verifyUrl = route('license.verify', [
                'email' => $email,
                'tier' => $tier,
                'session_id' => $sessionId,
            ]);

            if ($isJson) {
                return response()->json([
                    'url' => $verifyUrl,
                    'requires_verification' => true,
                ]);
            }
            return redirect($verifyUrl);
        } catch (\RuntimeException $e) {
            return $isJson ? response()->json(['error' => $e->getMessage()], 429) : back()->with('error', $e->getMessage());
        } catch (\Exception $e) {
            Log::error('Checkout initialization failed: ' . $e->getMessage());
            $msg = 'Erreur lors de la création de la licence. Veuillez contacter support@ocrreceipt.com.';
            return $isJson ? response()->json(['error' => $msg], 500) : back()->with('error', $msg);
        }
    }

    /**
     * Render the 6-digit OTP email verification view (Story S1.8).
     */
    public function showVerify(Request $request)
    {
        $email = strtolower(trim((string) $request->query('email', '')));
        $tier = strtolower(trim((string) $request->query('tier', 'pro'))) ?: 'pro';
        $sessionId = (string) $request->query('session_id', '');

        if (empty($email)) {
            return redirect('/');
        }

        return view('license.verify', [
            'email' => $email,
            'tier' => $tier,
            'session_id' => $sessionId,
        ]);
    }

    /**
     * API Endpoint: POST /api/verify/send (Story S1.8).
     */
    public function sendVerification(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'tier' => 'nullable|string|max:32',
            'session_id' => 'nullable|string|max:255',
        ]);

        try {
            $verification = $this->verificationService->sendVerificationCode(
                $validated['email'],
                $validated['tier'] ?? 'pro',
                $validated['session_id'] ?? null
            );

            return response()->json([
                'sent' => true,
                'email' => $verification->email,
                'expires_at' => $verification->expires_at->toIso8601String(),
            ]);
        } catch (\RuntimeException $e) {
            return response()->json([
                'sent' => false,
                'error' => $e->getMessage(),
            ], 429);
        }
    }

    /**
     * API Endpoint: POST /api/verify/confirm (Story S1.8).
     * Validates the 6-digit OTP, generates the ADR-001 HMAC license key, emails backup, and redirects to download.
     */
    public function confirmVerification(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'token' => 'required|string|size:6',
            'tier' => 'nullable|string|max:32',
            'session_id' => 'nullable|string|max:255',
        ]);

        $email = strtolower(trim($validated['email']));
        $result = $this->verificationService->verifyCode($email, $validated['token']);

        if (!$result['valid']) {
            return response()->json([
                'verified' => false,
                'error' => $result['error'],
            ], 422);
        }

        /** @var EmailVerification $verification */
        $verification = $result['verification'];
        $tier = strtolower($validated['tier'] ?? $verification->tier ?? 'pro');
        $sessionId = !empty($validated['session_id'])
            ? $validated['session_id']
            : ($verification->stripe_session_id ?: 'verified-' . uniqid());

        $purchase = $this->issueOrRetrievePurchase(
            email: $email,
            edition: $tier,
            sessionId: $sessionId,
            paymentIntent: 'otp-verified',
            amountCents: str_starts_with($sessionId, 'early-access-') ? 0 : LicenseGenerator::priceCentsForEdition($tier)
        );

        $downloadUrl = route('license.download', [
            'email' => $purchase->email,
            'licenseKey' => $purchase->license_key,
        ]);

        return response()->json([
            'verified' => true,
            'email' => $purchase->email,
            'license_key' => $purchase->license_key,
            'edition' => $purchase->edition,
            'redirect_url' => $downloadUrl,
        ]);
    }

    /**
     * Quick check endpoint — tells the UI whether Stripe is configured.
     */
    public function status()
    {
        return response()->json([
            'stripe_configured' => $this->isStripeConfigured(),
            'app' => 'OCR Receipt',
            'version' => '1.0.0',
        ]);
    }

    /**
     * Success page — shown after Stripe redirect.
     * Enforces Story S1.8 email OTP verification before disclosing the HMAC license key.
     */
    public function success(Request $request)
    {
        $sessionId = $request->input('session_id');

        if (!$sessionId) {
            return redirect('/')->with('error', 'Session de paiement introuvable.');
        }

        try {
            // Check if already verified & recorded
            $existing = LicensePurchase::where('stripe_session_id', $sessionId)->first();
            if ($existing) {
                return view('license.success', [
                    'email' => $existing->email,
                    'license_key' => $existing->license_key,
                    'purchase' => $existing,
                ]);
            }

            $session = Session::retrieve($sessionId);

            if ($session->payment_status !== 'paid') {
                return redirect('/')->with('error', 'Paiement non complété. Veuillez réessayer.');
            }

            $email = strtolower(trim($session->metadata->email ?? $session->customer_email));
            $tier = strtolower(trim($session->metadata->tier ?? 'pro')) ?: 'pro';
            $paymentIntent = $session->payment_intent;

            // Check if email was already OTP-verified for this session
            $verifiedOtp = EmailVerification::where('email', $email)
                ->whereNotNull('verified_at')
                ->where('verified_at', '>=', now()->subDay())
                ->first();

            if (!$verifiedOtp) {
                $this->verificationService->sendVerificationCode($email, $tier, $sessionId);
                return view('license.verify', [
                    'email' => $email,
                    'tier' => $tier,
                    'session_id' => $sessionId,
                ]);
            }

            $purchase = $this->issueOrRetrievePurchase(
                email: $email,
                edition: $tier,
                sessionId: $sessionId,
                paymentIntent: $paymentIntent,
                amountCents: $session->amount_total ?? LicenseGenerator::priceCentsForEdition($tier)
            );

            return view('license.success', [
                'email' => $email,
                'license_key' => $purchase->license_key,
                'purchase' => $purchase,
            ]);
        } catch (\Exception $e) {
            Log::error('Stripe success verification failed: ' . $e->getMessage());
            return redirect('/')->with('error', 'Erreur de vérification du paiement. Contactez support@ocrreceipt.com.');
        }
    }

    /**
     * Stripe Webhook handler for async events (Story S1.6):
     * - checkout.session.completed
     * - charge.refunded
     * - payment_intent.payment_failed
     */
    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature', '');
        $webhookSecret = config('services.stripe.webhook_secret');

        try {
            if (!empty($webhookSecret) && !empty($sigHeader)) {
                $event = Webhook::constructEvent($payload, $sigHeader, $webhookSecret);
                $eventType = $event->type;
                $object = $event->data->object;
            } else {
                $decoded = json_decode($payload, false);
                if (!$decoded || !isset($decoded->type)) {
                    return response()->json(['error' => 'Invalid webhook payload'], 400);
                }
                $eventType = $decoded->type;
                $object = $decoded->data->object ?? null;
            }
        } catch (\Exception $e) {
            Log::warning('Stripe webhook signature verification failed: ' . $e->getMessage());
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        if ($eventType === 'checkout.session.completed' && $object) {
            $sessionId = $object->id ?? ('webhook-' . uniqid());
            $email = strtolower(trim($object->metadata->email ?? $object->customer_email ?? ''));
            $tier = strtolower(trim($object->metadata->tier ?? 'pro')) ?: 'pro';
            $paymentIntent = $object->payment_intent ?? null;
            $amountCents = $object->amount_total ?? LicenseGenerator::priceCentsForEdition($tier);

            if (!empty($email)) {
                $this->issueOrRetrievePurchase($email, $tier, $sessionId, $paymentIntent, (int) $amountCents);
            }
        } elseif ($eventType === 'charge.refunded' && $object) {
            $paymentIntent = $object->payment_intent ?? null;
            if ($paymentIntent) {
                LicensePurchase::where('stripe_payment_intent', $paymentIntent)
                    ->update(['status' => 'refunded']);
            }
        } elseif ($eventType === 'payment_intent.payment_failed' && $object) {
            $paymentIntent = $object->id ?? null;
            if ($paymentIntent) {
                LicensePurchase::where('stripe_payment_intent', $paymentIntent)
                    ->update(['status' => 'failed']);
            }
        }

        return response()->json(['received' => true]);
    }

    /**
     * Cancel page — user cancelled the Stripe checkout.
     */
    public function cancel()
    {
        return view('license.cancel');
    }

    /**
     * Download page — verify license key and serve download.
     */
    public function download(Request $request, string $email, string $licenseKey)
    {
        $normalizedEmail = strtolower(trim($email));
        $purchase = LicensePurchase::where('email', $normalizedEmail)
            ->where('license_key', $licenseKey)
            ->where('status', 'completed')
            ->first();

        if (!$purchase) {
            return view('license.invalid');
        }

        if (!LicenseGenerator::verify($licenseKey, $normalizedEmail)) {
            return view('license.invalid');
        }

        $downloadDir = storage_path('app/downloads');
        $files = [];
        if (is_dir($downloadDir)) {
            $items = scandir($downloadDir);
            foreach ($items as $item) {
                if ($item !== '.' && $item !== '..') {
                    $files[] = $item;
                }
            }
        }

        return view('license.download', [
            'email' => $normalizedEmail,
            'license_key' => $licenseKey,
            'files' => $files,
            'purchase' => $purchase,
        ]);
    }

    /**
     * Serve a download file.
     *
     * The artifact must already exist on disk. Missing artifacts return 404 + license.unavailable view.
     */
    public function serveFile(Request $request, string $filename)
    {
        $safeName = basename($filename);
        $filePath = storage_path('app/downloads/' . $safeName);

        if (!is_file($filePath)) {
            Log::warning('Download requested for a missing artifact', [
                'filename' => $safeName,
                'ip' => $request->ip(),
            ]);

            return response()->view('license.unavailable', [
                'filename' => $safeName,
            ], 404);
        }

        return response()->download($filePath);
    }

    /**
     * Serve the Sparkle-compatible appcast.xml for the auto-updater.
     */
    public function appcast()
    {
        $downloadUrl = route('license.serve', [
            'filename' => 'OCR-Receipt-1.0.0-linux.tar.gz',
        ], true) . '?email={email}&license_key={licenseKey}';

        $appUrl = config('app.url', 'https://ocrreceipt.com');

        $xml = '<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0"
     xmlns:sparkle="http://www.andymatuschak.org/xml-namespaces/sparkle"
     xmlns:dc="http://purl.org/dc/elements/1.1/">
  <channel>
    <title>OCR Receipt Appcast</title>
    <link>' . $appUrl . '/appcast.xml</link>
    <language>fr</language>
    <item>
      <title>Version 1.0.0</title>
      <description>Version commerciale 1.0 — Extraction IA locale &amp; Vision, gabarits de nommage et exports comptables.</description>
      <pubDate>' . now()->format('D, d M Y H:i:s O') . '</pubDate>
      <sparkle:version>1.0.0</sparkle:version>
      <sparkle:releaseNotesLink>' . $appUrl . '/#features</sparkle:releaseNotesLink>
      <enclosure
        url="' . e($downloadUrl) . '"
        sparkle:edSignature=""
        length="243864053"
        type="application/octet-stream"/>
    </item>
  </channel>
</rss>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
        ]);
    }

    private function isStripeConfigured(): bool
    {
        return !empty(config('services.stripe.secret_key'))
            && !empty(config('services.stripe.publishable_key'));
    }

    private function issueOrRetrievePurchase(
        string $email,
        string $edition,
        string $sessionId,
        ?string $paymentIntent,
        int $amountCents
    ): LicensePurchase {
        $existingBySession = LicensePurchase::where('stripe_session_id', $sessionId)->first();
        if ($existingBySession) {
            return $existingBySession;
        }

        $licenseKey = LicenseGenerator::generate($edition);

        $purchase = LicensePurchase::updateOrCreate(
            ['email' => $email],
            [
                'license_key' => $licenseKey,
                'edition' => $edition,
                'stripe_session_id' => $sessionId,
                'stripe_payment_intent' => $paymentIntent,
                'status' => 'completed',
                'amount_cents' => $amountCents,
                'version' => '1.0',
            ]
        );

        // Send backup email with license key + download link (Story S1.7)
        $this->verificationService->sendLicenseKeyEmail($email, $purchase->license_key, $edition);

        return $purchase;
    }
}
