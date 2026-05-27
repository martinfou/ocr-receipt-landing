<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>OCR Receipt — Merci pour votre achat</title>
    <style>
        *,::after,::before{box-sizing:border-box;margin:0;padding:0}
        body{font-family:Inter,ui-sans-serif,system-ui,sans-serif;background:#f9fafb;color:#111827;min-height:100vh;display:flex;align-items:center;justify-content:center}
        .card{max-width:640px;width:100%;margin:2rem;background:#fff;border-radius:1.5rem;box-shadow:0 4px 24px rgba(0,0,0,.08);padding:2.5rem}
        h1{font-size:1.75rem;margin-bottom:.5rem}
        .badge{background:#dbeafe;color:#1d4ed8;font-size:.75rem;font-weight:700;padding:.25rem .75rem;border-radius:999px;display:inline-block;margin-bottom:1rem}
        .license-box{background:#f3f4f6;border-radius:.75rem;padding:1.25rem;margin:1.5rem 0;text-align:center}
        .license-box code{font-size:1.25rem;font-weight:700;color:#1d4ed8;word-break:break-all;display:block;margin-top:.5rem;font-family:ui-monospace,monospace}
        .steps{list-style:none;margin:1.5rem 0;padding:0}
        .steps li{padding:.75rem 0;border-bottom:1px solid #e5e7eb;display:flex;gap:.75rem;font-size:.875rem;color:#4b5563}
        .steps li:last-child{border-bottom:none}
        .steps .num{background:#dbeafe;color:#1d4ed8;width:24px;height:24px;border-radius:999px;display:flex;align-items:center;justify-content:center;font-size:.75rem;font-weight:700;flex-shrink:0}
        .btn{display:inline-block;background:#2563eb;color:#fff;font-weight:700;padding:.875rem 2rem;border-radius:.75rem;text-decoration:none;text-align:center;transition:background .2s}
        .btn:hover{background:#1d4ed8}
        .btn-secondary{background:#e5e7eb;color:#374151;margin-left:.5rem}
        .btn-secondary:hover{background:#d1d5db}
        .btn-group{margin-top:1.5rem;display:flex;gap:.5rem;flex-wrap:wrap}
        .text-sm{font-size:.875rem;color:#6b7280;margin-top:1.5rem;line-height:1.5}
    </style>
</head>
<body>
    <div class="card">
        <div class="badge">✅ Paiement confirmé</div>
        <h1>Merci {{ $email }} ! 🎉</h1>
        <p style="color:#6b7280;margin-bottom:1rem">Votre licence Pro Desktop est prête. Conservez précieusement la clé ci-dessous.</p>

        <div class="license-box">
            <div style="font-size:.75rem;color:#6b7280;text-transform:uppercase;letter-spacing:.05em">Votre clé de licence</div>
            <code>{{ $license_key }}</code>
        </div>

        <h3 style="margin-bottom:.75rem">📋 Comment installer votre licence</h3>
        <ol class="steps">
            <li><span class="num">1</span> <span><strong>Téléchargez OCR Receipt</strong> — Utilisez le bouton ci-dessous pour télécharger la dernière version.</span></li>
            <li><span class="num">2</span> <span><strong>Lancez l'application</strong> — Allez dans Paramètres → Licence.</span></li>
            <li><span class="num">3</span> <span><strong>Entrez votre email et la clé</strong> — Collez l'email et la clé ci-dessus. La licence est instantanément activée.</span></li>
            <li><span class="num">4</span> <span><strong>Profitez</strong> — Pages illimitées, DeepSeek IA, export CSV, batch processing, tout est débloqué.</span></li>
        </ol>

        <div class="btn-group">
            <a href="{{ route('license.download', ['email' => $email, 'licenseKey' => $license_key]) }}" class="btn">
                ⬇️ Télécharger OCR Receipt
            </a>
        </div>

        <p class="text-sm">
            Une question ? Écrivez à <a href="mailto:support@ocrreceipt.com" style="color:#2563eb">support@ocrreceipt.com</a><br>
            <span style="color:#9ca3af">Licence perpétuelle · Mises à jour incluses · Québec, Canada 🇨🇦</span>
        </p>
    </div>
</body>
</html>
