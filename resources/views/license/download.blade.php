<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>OCR Receipt — Téléchargement</title>
    <style>
        *,::after,::before{box-sizing:border-box;margin:0;padding:0}
        body{font-family:Inter,ui-sans-serif,system-ui,sans-serif;background:#f9fafb;color:#111827;min-height:100vh}
        .container{max-width:720px;margin:0 auto;padding:2rem}
        .card{background:#fff;border-radius:1.5rem;box-shadow:0 4px 24px rgba(0,0,0,.08);padding:2.5rem;margin-top:2rem}
        h1{font-size:1.75rem;margin-bottom:.5rem}
        .badge{background:#dbeafe;color:#1d4ed8;font-size:.75rem;font-weight:700;padding:.25rem .75rem;border-radius:999px;display:inline-block;margin-bottom:1rem}
        .info{color:#6b7280;margin-bottom:1.5rem;line-height:1.6}
        .files{list-style:none;padding:0}
        .files li{background:#f9fafb;border:1px solid #e5e7eb;border-radius:.75rem;padding:1rem 1.25rem;margin-bottom:.75rem;display:flex;align-items:center;justify-content:space-between;gap:1rem}
        .files .name{font-weight:600;font-size:.9375rem}
        .files .size{font-size:.75rem;color:#6b7280}
        .btn{display:inline-block;background:#2563eb;color:#fff;font-weight:700;padding:.5rem 1.25rem;border-radius:.5rem;text-decoration:none;font-size:.875rem;transition:background .2s;white-space:nowrap}
        .btn:hover{background:#1d4ed8}
        .license-key{background:#f3f4f6;border-radius:.5rem;padding:1rem;text-align:center;margin:1.5rem 0}
        .license-key label{font-size:.75rem;color:#6b7280;text-transform:uppercase;display:block;margin-bottom:.25rem}
        .license-key code{font-family:ui-monospace,monospace;font-size:.9375rem;color:#1d4ed8;word-break:break-all}
        .text-sm{font-size:.875rem;color:#6b7280;margin-top:1rem}
        .header{display:flex;align-items:center;gap:.5rem;font-size:1.25rem;font-weight:700;color:#111827;text-decoration:none;padding:.5rem 0}
    </style>
</head>
<body>
    <div class="container">
        <a href="/" class="header">📄✓ OCR Receipt</a>

        <div class="card">
            @php
                $tierName = 'Pro';
                if (isset($purchase) && $purchase->amount_cents == 14900) {
                    $tierName = 'Solo';
                } elseif (isset($purchase) && $purchase->amount_cents == 39900) {
                    $tierName = 'Comptable';
                }
            @endphp
            <div class="badge">✅ Licence {{ $tierName }} vérifiée</div>
            <h1>⬇️ Téléchargement</h1>
            <p class="info">Bienvenue <strong>{{ $email }}</strong>. Voici les fichiers disponibles pour votre licence {{ $tierName }}.</p>

            <div class="license-key">
                <label>Votre clé de licence</label>
                <code>{{ $license_key }}</code>
            </div>

            @if(count($files) > 0)
                <ul class="files">
                    @foreach($files as $file)
                        @php
                            $url = route('license.serve', ['filename' => $file]) . '?email=' . urlencode($email) . '&license_key=' . urlencode($license_key);
                            $size = '';
                            $sizeBytes = file_exists(storage_path('app/downloads/' . $file)) ? filesize(storage_path('app/downloads/' . $file)) : 0;
                            if ($sizeBytes > 1048576) {
                                $size = round($sizeBytes / 1048576, 1) . ' MB';
                            } elseif ($sizeBytes > 1024) {
                                $size = round($sizeBytes / 1024, 0) . ' KB';
                            } else {
                                $size = $sizeBytes > 0 ? $sizeBytes . ' B' : '';
                            }
                        @endphp
                        <li>
                            <div>
                                <div class="name">📦 {{ $file }}</div>
                                @if($size)<div class="size">{{ $size }}</div>@endif
                            </div>
                            <a href="{{ $url }}" class="btn">⬇️ Télécharger</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div style="background:#fffbeb;border:1px solid #fde68a;border-radius:.75rem;padding:1.5rem;text-align:center;margin:1.5rem 0">
                    <div style="font-size:2rem;margin-bottom:.5rem">🔜</div>
                    <p style="color:#92400e;font-weight:600">Aucun fichier disponible pour le moment</p>
                    <p style="color:#92400e;font-size:.875rem;margin-top:.25rem">Les téléchargements seront ajoutés sous peu. Revenez bientôt ou contactez le support.</p>
                </div>
            @endif

            <p class="text-sm">
                Une question ? Écrivez à <a href="mailto:support@ocrreceipt.com" style="color:#2563eb">support@ocrreceipt.com</a><br>
                <span style="color:#9ca3af">Licence perpétuelle · Mises à jour incluses</span>
            </p>
        </div>
    </div>
</body>
</html>
