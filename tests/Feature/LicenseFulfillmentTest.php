<?php

namespace Tests\Feature;

use App\Models\EmailVerification;
use App\Models\LicensePurchase;
use App\Services\LicenseGenerator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class LicenseFulfillmentTest extends TestCase
{
    use RefreshDatabase;

    public function test_adr001_license_generator_creates_valid_offline_key(): void
    {
        $key = LicenseGenerator::generate('pro');

        $this->assertStringContainsString('.', $key);
        $this->assertTrue(LicenseGenerator::verify($key));

        [$payloadB64, $sigB64] = explode('.', $key, 2);
        $payloadJson = LicenseGenerator::base64UrlDecode($payloadB64);
        $payload = json_decode($payloadJson, true);

        $this->assertSame('ocr-receipt-v1', $payload['product_id']);
        $this->assertSame('pro', $payload['edition']);
        $this->assertSame(2, $payload['max_devices']);
        $this->assertNotEmpty($payload['license_key_id']);
        $this->assertNotEmpty($payload['issued_at']);
    }

    public function test_edition_device_limits_match_commercial_tiers(): void
    {
        $this->assertSame(1, LicenseGenerator::maxDevicesForEdition('solo'));
        $this->assertSame(2, LicenseGenerator::maxDevicesForEdition('pro'));
        $this->assertSame(5, LicenseGenerator::maxDevicesForEdition('comptable'));
    }

    public function test_send_verification_generates_six_digit_code_and_dispatches_email(): void
    {
        Mail::fake();

        $response = $this->postJson('/api/verify/send', [
            'email' => 'client@cabinet-cpa.ca',
            'tier' => 'pro',
        ]);

        $response->assertStatus(200)
            ->assertJson(['sent' => true, 'email' => 'client@cabinet-cpa.ca']);

        $record = EmailVerification::where('email', 'client@cabinet-cpa.ca')->first();
        $this->assertNotNull($record);
        $this->assertMatchesRegularExpression('/^\d{6}$/', $record->token);
        $this->assertFalse($record->isExpired());
    }

    public function test_send_verification_enforces_hourly_rate_limit(): void
    {
        Mail::fake();

        for ($i = 0; $i < 3; $i++) {
            $this->postJson('/api/verify/send', ['email' => 'spam@test.ca'])->assertStatus(200);
        }

        $fourth = $this->postJson('/api/verify/send', ['email' => 'spam@test.ca']);
        $fourth->assertStatus(429)
            ->assertJson(['sent' => false]);
    }

    public function test_confirm_verification_succeeds_and_generates_adr001_license_key(): void
    {
        Mail::fake();

        $this->postJson('/api/verify/send', [
            'email' => 'acheteur@quebec.ca',
            'tier' => 'comptable',
        ])->assertStatus(200);

        $record = EmailVerification::where('email', 'acheteur@quebec.ca')->firstOrFail();

        $confirm = $this->postJson('/api/verify/confirm', [
            'email' => 'acheteur@quebec.ca',
            'token' => $record->token,
            'tier' => 'comptable',
        ]);

        $confirm->assertStatus(200)
            ->assertJson(['verified' => true, 'edition' => 'comptable']);

        $licenseKey = $confirm->json('license_key');
        $this->assertNotEmpty($licenseKey);
        $this->assertTrue(LicenseGenerator::verify($licenseKey));

        // Verify download page loads with the generated ADR-001 key
        $downloadResponse = $this->get("/download/acheteur@quebec.ca/{$licenseKey}");
        $downloadResponse->assertStatus(200);
        $downloadResponse->assertSee($licenseKey);
    }

    public function test_confirm_verification_rejects_invalid_or_expired_code(): void
    {
        $record = EmailVerification::create([
            'email' => 'expired@quebec.ca',
            'token' => '123456',
            'tier' => 'solo',
            'expires_at' => now()->subMinutes(1),
        ]);

        $wrongToken = $this->postJson('/api/verify/confirm', [
            'email' => 'expired@quebec.ca',
            'token' => '999999',
        ]);
        $wrongToken->assertStatus(422)->assertJson(['verified' => false]);

        $expiredToken = $this->postJson('/api/verify/confirm', [
            'email' => 'expired@quebec.ca',
            'token' => $record->token,
        ]);
        $expiredToken->assertStatus(422)->assertJson(['verified' => false]);
    }

    public function test_stripe_webhook_handles_completed_and_refunded_events(): void
    {
        Mail::fake();

        $webhookCompleted = $this->postJson('/api/stripe/webhook', [
            'type' => 'checkout.session.completed',
            'data' => [
                'object' => [
                    'id' => 'cs_test_12345',
                    'customer_email' => 'stripebuyer@cpa.ca',
                    'payment_intent' => 'pi_test_98765',
                    'amount_total' => 19900,
                    'metadata' => [
                        'email' => 'stripebuyer@cpa.ca',
                        'tier' => 'pro',
                    ],
                ],
            ],
        ]);

        $webhookCompleted->assertStatus(200)->assertJson(['received' => true]);

        $purchase = LicensePurchase::where('email', 'stripebuyer@cpa.ca')->first();
        $this->assertNotNull($purchase);
        $this->assertSame('completed', $purchase->status);
        $this->assertTrue(LicenseGenerator::verify($purchase->license_key));

        $webhookRefunded = $this->postJson('/api/stripe/webhook', [
            'type' => 'charge.refunded',
            'data' => [
                'object' => [
                    'payment_intent' => 'pi_test_98765',
                ],
            ],
        ]);
        $webhookRefunded->assertStatus(200);
        $this->assertSame('refunded', $purchase->fresh()->status);
    }
}

