<?php

namespace App\Services;

use App\Models\EmailVerification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class VerificationService
{
    public const EXPIRY_MINUTES = 15;
    public const MAX_SENDS_PER_HOUR = 3;

    /**
     * Generate a 6-digit OTP, persist it, and dispatch the verification email.
     *
     * @throws \RuntimeException If rate limit is exceeded.
     */
    public function sendVerificationCode(
        string $email,
        string $tier = 'pro',
        ?string $stripeSessionId = null
    ): EmailVerification {
        $normalizedEmail = strtolower(trim($email));

        $recentCount = EmailVerification::where('email', $normalizedEmail)
            ->where('created_at', '>=', now()->subHour())
            ->count();

        if ($recentCount >= self::MAX_SENDS_PER_HOUR) {
            throw new \RuntimeException('Trop de demandes de code. Veuillez patienter avant de réessayer.');
        }

        $token = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        $verification = EmailVerification::create([
            'email' => $normalizedEmail,
            'token' => $token,
            'tier' => strtolower(trim($tier)) ?: 'pro',
            'stripe_session_id' => $stripeSessionId,
            'expires_at' => now()->addMinutes(self::EXPIRY_MINUTES),
        ]);

        try {
            Mail::raw(
                "Bonjour,\n\nVotre code de vérification OCR Receipt est : {$token}\n\nCe code est valide pendant 15 minutes.\n\nMerci,\nL'équipe OCR Receipt",
                function ($message) use ($normalizedEmail, $token) {
                    $message->to($normalizedEmail)
                        ->subject("Votre code de vérification OCR Receipt : {$token}");
                }
            );
        } catch (\Throwable $e) {
            Log::warning('Failed to send OTP email: ' . $e->getMessage());
        }

        return $verification;
    }

    /**
     * Confirm a 6-digit OTP for the given email.
     *
     * @return array{valid: bool, error: ?string, verification: ?EmailVerification}
     */
    public function verifyCode(string $email, string $token): array
    {
        $normalizedEmail = strtolower(trim($email));
        $cleanToken = trim($token);

        $latest = EmailVerification::where('email', $normalizedEmail)
            ->orderByDesc('id')
            ->first();

        if (!$latest) {
            return [
                'valid' => false,
                'error' => 'Aucun code de vérification trouvé pour cette adresse.',
                'verification' => null,
            ];
        }

        if ($latest->isVerified() && hash_equals($latest->token, $cleanToken)) {
            return [
                'valid' => true,
                'error' => null,
                'verification' => $latest,
            ];
        }

        if (!hash_equals($latest->token, $cleanToken)) {
            return [
                'valid' => false,
                'error' => 'Code de vérification invalide.',
                'verification' => null,
            ];
        }

        if ($latest->isExpired()) {
            return [
                'valid' => false,
                'error' => 'Ce code de vérification a expiré. Veuillez en demander un nouveau.',
                'verification' => null,
            ];
        }

        $latest->update(['verified_at' => now()]);

        return [
            'valid' => true,
            'error' => null,
            'verification' => $latest->fresh(),
        ];
    }

    /**
     * Send backup email with the generated license key and download link (Story S1.7).
     */
    public function sendLicenseKeyEmail(string $email, string $licenseKey, string $edition = 'pro'): void
    {
        $normalizedEmail = strtolower(trim($email));
        $downloadUrl = route('license.download', [
            'email' => $normalizedEmail,
            'licenseKey' => $licenseKey,
        ]);

        $editionLabel = ucfirst($edition);
        $body = <<<EOT
Bonjour,

Merci pour votre achat d'OCR Receipt ({$editionLabel}) !

Voici votre clé de licence perpétuelle hors-ligne :
{$licenseKey}

Téléchargez l'application (Windows, macOS, Linux) ici :
{$downloadUrl}

Instructions d'activation :
1. Installez et lancez OCR Receipt
2. Ouvrez Paramètres -> Licence -> Activer une licence
3. Collez votre clé ci-dessus

Merci de votre confiance,
Martin Fournier — OCR Receipt
EOT;

        try {
            Mail::raw($body, function ($message) use ($normalizedEmail, $editionLabel) {
                $message->to($normalizedEmail)
                    ->subject("Votre clé de licence OCR Receipt {$editionLabel}");
            });
        } catch (\Throwable $e) {
            Log::warning('Failed to send license key backup email: ' . $e->getMessage());
        }
    }
}

