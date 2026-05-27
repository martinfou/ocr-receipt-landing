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
     */
    public function checkout(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

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
                            'name' => 'OCR Receipt — Pro Desktop License',
                            'description' => 'Licence perpétuelle — pages illimitées, DeepSeek IA, export CSV, batch processing, matching fournisseur.',
                        ],
                        'unit_amount' => 19900, // $199.00 in cents
                    ],
                    'quantity' => 1,
                ]],
                'metadata' => [
                    'email' => $email,
                    'product' => 'ocr-receipt-pro-license',
                ],
            ]);

            return redirect($session->url);
        } catch (\Exception $e) {
            Log::error('Stripe checkout failed: ' . $e->getMessage());
            return back()->with('error', 'Erreur lors de la création de la session de paiement. Veuillez réessayer.');
        }
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
}
