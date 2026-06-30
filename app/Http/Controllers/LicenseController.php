<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\Webhook;
use App\Models\LicensePurchase;

class LicenseController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret_key'));
    }

    /**
     * Create a Stripe Checkout Session for the Pro license ($199).
     * Accepts JSON (from Vue) or form (from Blade) requests.
     */
    public function checkout(Request $request)
    {
        $email = $request->input('email', '');
        $tier = $request->input('tier', 'pro');

        // Allow JSON requests from Vue
        $isJson = $request->expectsJson() || $request->isJson();

        // If no email provided via AJAX, return config so Vue can prompt
        if (empty($email) && $isJson) {
            $secretKey = config('services.stripe.secret_key');
            return response()->json([
                'needs_email' => true,
                'stripe_configured' => !empty($secretKey),
            ]);
        }

        // Graceful fallback when Stripe is not configured
        $secretKey = config('services.stripe.secret_key');
        if (empty($secretKey)) {
            $msg = 'Le paiement en ligne sera bientôt disponible ! OCR Receipt est en phase d\'accès anticipé. Pour obtenir votre licence Pro dès maintenant, contactez-nous à hello@martinfournier.com.';
            return $isJson ? response()->json(['error' => $msg], 503) : back()->with('error', $msg);
        }

        // Price configuration
        $prices = [
            'pro' => ['amount' => 19900, 'name' => 'OCR Receipt — Pro Desktop License', 'desc' => 'Licence perpétuelle — pages illimitées, DeepSeek IA, export CSV, batch processing.'],
            'cloud' => ['amount' => 500, 'name' => 'OCR Receipt — Cloud Credits (100 pages)', 'desc' => '100 pages de cloud AI. 5¢/page. Utilisation unique.'],
        ];

        $product = $prices[$tier] ?? $prices['pro'];

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'mode' => 'payment',
                'success_url' => route('license.success', ['session_id' => '{CHECKOUT_SESSION_ID}']),
                'cancel_url' => route('license.cancel'),
                'customer_email' => $email,
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $product['name'],
                            'description' => $product['desc'],
                        ],
                        'unit_amount' => $product['amount'],
                    ],
                    'quantity' => 1,
                ]],
                'metadata' => [
                    'email' => $email,
                    'tier' => $tier,
                    'product' => 'ocr-receipt-' . $tier,
                ],
            ]);

            if ($isJson) {
                return response()->json(['url' => $session->url]);
            }
            return redirect($session->url);
        } catch (\Exception $e) {
            Log::error('Stripe checkout failed: ' . $e->getMessage());
            $msg = 'Erreur lors de la création de la session de paiement. Veuillez réessayer ou contacter hello@martinfournier.com.';
            return $isJson ? response()->json(['error' => $msg], 500) : back()->with('error', $msg);
        }
    }

    /**
     * Quick check endpoint — tells the UI whether Stripe is configured.
     */
    public function status()
    {
        $configured = !empty(config('services.stripe.secret_key'))
            && !empty(config('services.stripe.publishable_key'));

        return response()->json([
            'stripe_configured' => $configured,
            'app' => 'OCR Receipt',
            'version' => '1.0.0',
        ]);
    }

    /**
     * Success page — shown after Stripe redirect.
     * We verify the session, generate a license key, and show it.
     */
    public function success(Request $request)
    {
        $sessionId = $request->input('session_id');

        if (!$sessionId) {
            return redirect('/')->with('error', 'Session de paiement introuvable.');
        }

        try {
            $session = Session::retrieve($sessionId);

            if ($session->payment_status !== 'paid') {
                return redirect('/')->with('error', 'Paiement non complété. Veuillez réessayer.');
            }

            $email = $session->metadata->email ?? $session->customer_email;
            $paymentIntent = $session->payment_intent;

            // Check if already recorded
            $existing = LicensePurchase::where('stripe_session_id', $sessionId)->first();
            if ($existing) {
                return view('license.success', [
                    'email' => $existing->email,
                    'license_key' => $existing->license_key,
                    'purchase' => $existing,
                ]);
            }

            // Generate license key (same algorithm as LicenseManager)
            $licenseKey = $this->generateLicenseKey($email);

            // Record purchase
            $purchase = LicensePurchase::create([
                'email' => $email,
                'license_key' => $licenseKey,
                'stripe_session_id' => $sessionId,
                'stripe_payment_intent' => $paymentIntent,
                'status' => 'completed',
                'amount_cents' => $session->amount_total ?? 19900,
                'version' => '1.0',
            ]);

            return view('license.success', [
                'email' => $email,
                'license_key' => $licenseKey,
                'purchase' => $purchase,
            ]);
        } catch (\Exception $e) {
            Log::error('Stripe success verification failed: ' . $e->getMessage());
            return redirect('/')->with('error', 'Erreur de vérification du paiement. Contactez support@ocrreceipt.com.');
        }
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
        $purchase = LicensePurchase::where('email', $email)
            ->where('license_key', $licenseKey)
            ->where('status', 'completed')
            ->first();

        if (!$purchase) {
            return view('license.invalid');
        }

        // Check if the license key is valid against the HMAC algorithm
        $expected = $this->generateLicenseKey($email);
        if ($licenseKey !== $expected) {
            return view('license.invalid');
        }

        // List available download files
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
            'email' => $email,
            'license_key' => $licenseKey,
            'files' => $files,
            'purchase' => $purchase,
        ]);
    }

    /**
     * Serve a download file (authenticated by license key in query params).
     */
    public function serveFile(Request $request, string $filename)
    {
        $email = $request->input('email');
        $licenseKey = $request->input('license_key');

        if (!$email || !$licenseKey) {
            abort(403, 'Licence requise pour télécharger.');
        }

        $purchase = LicensePurchase::where('email', $email)
            ->where('license_key', $licenseKey)
            ->where('status', 'completed')
            ->first();

        if (!$purchase) {
            abort(403, 'Licence invalide.');
        }

        $filePath = storage_path('app/downloads/' . basename($filename));
        if (!file_exists($filePath)) {
            abort(404, 'Fichier non trouvé.');
        }

        return response()->download($filePath);
    }

    /**
     * Generate a license key matching the LicenseManager algorithm.
     * HMAC-SHA256 of "email|1.0"
     */
    private function generateLicenseKey(string $email): string
    {
        $secret = config('services.license.hmac_secret', 'ocr-receipt-hmac-secret-v1-2026');
        $msg = "{$email}|1.0";
        return hash_hmac('sha256', $msg, $secret);
    }

    /**
     * Serve the Sparkle-compatible appcast.xml for the auto-updater.
     *
     * The desktop app fetches this at startup to check for new versions.
     * The current version (0.1.0) is the latest — when we release 0.2.0,
     * we add a new <item> and existing apps will show an update notification.
     */
    public function appcast()
    {
        $downloadUrl = route('license.serve', [
            'filename' => 'OCR-Receipt-0.1.0-linux-x86_64.tar.gz',
        ], true) . '?email={email}&license_key={licenseKey}';

        $appUrl = config('app.url', 'https://ocrreceipt.com');

        $xml = '<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0"
     xmlns:sparkle="http://www.andymatuschak.org/xml-namespaces/sparkle"
     xmlns:dc="http://purl.org/dc/elements/1.1/">
  <channel>
    <title>OCR Receipt Appcast</title>
    <link>' . $appUrl . '/appcast.xml</link>
    <language>en</language>
    <item>
      <title>Version 0.1.0</title>
      <description>Première version publique — accès anticipé.</description>
      <pubDate>' . now()->format('D, d M Y H:i:s O') . '</pubDate>
      <sparkle:version>0.1.0</sparkle:version>
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
}
