<?php

namespace App\Services;

use Illuminate\Support\Str;

class LicenseGenerator
{
    public const PRODUCT_ID = 'ocr-receipt-v1';
    public const DEFAULT_SECRET = 'ocr-receipt-license-secret-v1-2026';

    /**
     * Map edition/tier to maximum device activations.
     */
    public static function maxDevicesForEdition(string $edition): int
    {
        return match (strtolower($edition)) {
            'solo' => 1,
            'comptable', 'enterprise', 'cabinet' => 5,
            default => 2, // pro, founding
        };
    }

    /**
     * Map edition/tier to price in cents.
     */
    public static function priceCentsForEdition(string $edition): int
    {
        return match (strtolower($edition)) {
            'solo' => 14900,
            'comptable', 'enterprise', 'cabinet' => 39900,
            default => (int) config('services.license.price_cents', 19900),
        };
    }

    /**
     * Generate a cryptographically valid ADR-001 offline license key
     * matching ocr_receipt.licensing.verifier in the desktop app.
     */
    public static function generate(
        string $edition = 'pro',
        ?int $maxDevices = null,
        ?string $secret = null,
        ?string $licenseKeyId = null,
        ?string $issuedAt = null
    ): string {
        $resolvedEdition = strtolower(trim($edition)) ?: 'pro';
        $resolvedDevices = $maxDevices ?? self::maxDevicesForEdition($resolvedEdition);
        $resolvedSecret = $secret ?: config('services.license.hmac_secret', self::DEFAULT_SECRET);

        $payload = [
            'edition' => $resolvedEdition,
            'issued_at' => $issuedAt ?: now()->utc()->format('Y-m-d\TH:i:s\Z'),
            'license_key_id' => $licenseKeyId ?: Str::uuid()->toString(),
            'max_devices' => $resolvedDevices,
            'product_id' => self::PRODUCT_ID,
        ];

        // 1. Sort keys alphabetically (canonical JSON requirement)
        ksort($payload);

        // 2. Encode to JSON without extra whitespace
        $json = json_encode($payload, JSON_UNESCAPED_SLASHES);

        // 3. Compute raw HMAC-SHA256 digest
        $hmac = hash_hmac('sha256', $json, $resolvedSecret, true);

        // 4. Base64URL encode without padding
        return self::base64UrlEncode($json) . '.' . self::base64UrlEncode($hmac);
    }

    /**
     * Verify an ADR-001 license key (or legacy hex HMAC key for backward compatibility).
     */
    public static function verify(string $key, ?string $email = null, ?string $secret = null): bool
    {
        $trimmed = trim($key);
        if ($trimmed === '') {
            return false;
        }

        $resolvedSecret = $secret ?: config('services.license.hmac_secret', self::DEFAULT_SECRET);

        // ADR-001 format: {payload_b64}.{hmac_b64}
        if (str_contains($trimmed, '.')) {
            $parts = explode('.', $trimmed);
            if (count($parts) !== 2 || $parts[0] === '' || $parts[1] === '') {
                return false;
            }

            $payloadJson = self::base64UrlDecode($parts[0]);
            $providedSig = self::base64UrlDecode($parts[1]);
            if ($payloadJson === false || $providedSig === false) {
                return false;
            }

            $expectedSig = hash_hmac('sha256', $payloadJson, $resolvedSecret, true);
            if (!hash_equals($expectedSig, $providedSig)) {
                return false;
            }

            $data = json_decode($payloadJson, true);
            if (!is_array($data) || ($data['product_id'] ?? '') !== self::PRODUCT_ID) {
                return false;
            }

            return isset($data['license_key_id'], $data['edition'], $data['max_devices'], $data['issued_at'])
                && (int) $data['max_devices'] > 0;
        }

        // Legacy fallback: hex HMAC of "email|1.0"
        if ($email) {
            $legacySecret = config('services.license.legacy_hmac_secret', 'ocr-receipt-hmac-secret-v1-2026');
            $expectedLegacy = hash_hmac('sha256', "{$email}|1.0", $legacySecret);
            return hash_equals($expectedLegacy, $trimmed)
                || hash_equals(hash_hmac('sha256', "{$email}|1.0", $resolvedSecret), $trimmed);
        }

        return false;
    }

    public static function base64UrlEncode(string $data): string
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public static function base64UrlDecode(string $value): string|false
    {
        $pad = (4 - (strlen($value) % 4)) % 4;
        if ($pad > 0) {
            $value .= str_repeat('=', $pad);
        }
        return base64_decode(strtr($value, '-_', '+/'), true);
    }
}

