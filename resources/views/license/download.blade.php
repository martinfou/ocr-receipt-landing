<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>OCR Receipt — Téléchargement</title>
    <style>
        *,::after,::before{box-sizing:border-box;margin:0;padding:0}
        body{
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
            background: #0a0a0a;
            color: #e5e5e5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container{
            max-width: 600px;
            width: 100%;
            padding: 2rem 1.5rem;
        }
        .card{
            background: #161615;
            border: 1px solid #3e3e3a;
            border-radius: 1rem;
            padding: 2.5rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            position: relative;
        }
        h1{
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #e5e5e5;
        }
        .badge{
            background: rgba(96, 165, 250, 0.1);
            color: #60a5fa;
            border: 1px solid rgba(96, 165, 250, 0.2);
            font-size: 10px;
            font-family: ui-monospace, monospace;
            font-weight: 600;
            padding: 0.35rem 0.75rem;
            border-radius: 999px;
            display: inline-block;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .info{
            color: #a1a09a;
            margin-bottom: 2rem;
            line-height: 1.6;
            font-size: 0.875rem;
        }
        .files{
            list-style: none;
            padding: 0;
            margin-bottom: 2rem;
        }
        .files li{
            background: #0a0a0a;
            border: 1px solid #3e3e3a;
            border-radius: 0.75rem;
            padding: 1.25rem;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            transition: border-color 0.2s;
        }
        .files li:hover{
            border-color: #60a5fa;
        }
        .files .name{
            font-weight: 500;
            font-size: 0.875rem;
            color: #e5e5e5;
        }
        .files .platform-tag {
            display: inline-block;
            font-size: 9px;
            font-family: ui-monospace, monospace;
            color: #60a5fa;
            background: rgba(96, 165, 250, 0.05);
            border: 1px solid rgba(96, 165, 250, 0.15);
            padding: 0.15rem 0.4rem;
            border-radius: 4px;
            margin-top: 0.25rem;
            text-transform: uppercase;
        }
        .btn{
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #3B82F6;
            color: #fff;
            font-family: ui-monospace, monospace;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-size: 11px;
            transition: all 0.2s;
            white-space: nowrap;
            cursor: pointer;
            border: none;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .btn:hover{
            background: #60a5fa;
            box-shadow: 0 4px 12px rgba(96, 165, 250, 0.25);
        }
        .license-key{
            background: #0a0a0a;
            border: 1px solid #3e3e3a;
            border-radius: 0.75rem;
            padding: 1.25rem;
            margin: 2rem 0;
            position: relative;
        }
        .license-key-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        .license-key code{
            font-family: ui-monospace, monospace;
            font-size: 0.875rem;
            color: #60a5fa;
            word-break: break-all;
            user-select: all;
        }
        .copy-btn {
            background: transparent;
            border: 1px solid #3e3e3a;
            color: #a1a09a;
            font-family: ui-monospace, monospace;
            font-size: 9px;
            padding: 0.35rem 0.6rem;
            border-radius: 4px;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.2s;
        }
        .copy-btn:hover {
            color: #e5e5e5;
            border-color: #60a5fa;
        }
        .text-sm{
            font-size: 0.75rem;
            color: #a1a09a;
            margin-top: 2rem;
            line-height: 1.6;
            text-align: center;
            border-top: 1px solid rgba(62, 62, 58, 0.4);
            padding-top: 1.5rem;
        }
        .header{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: #e5e5e5;
            text-decoration: none;
            margin-bottom: 1.5rem;
            letter-spacing: -0.01em;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/" class="header">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-[#60a5fa] fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block; vertical-align:-2px; margin-right:4px;">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <polyline points="9 15 11 17 15 13"></polyline>
            </svg>
            OCR Receipt
        </a>

        <div class="card">
            @php
                $tierName = 'Pro';
                if (isset($purchase) && $purchase->amount_cents == 14900) {
                    $tierName = 'Solo';
                } elseif (isset($purchase) && $purchase->amount_cents == 39900) {
                    $tierName = 'Comptable';
                }
            @endphp
            <div class="badge">✓ Licence {{ $tierName }} activée</div>
            <h1>Téléchargement</h1>
            <p class="info">
                Compte : <strong>{{ $email }}</strong>.<br>
                Votre licence perpétuelle a été configurée avec succès. Téléchargez l'application pour votre plateforme ci-dessous.
            </p>

            <div class="license-key">
                <label>Clé de licence pour l'activation</label>
                <div class="license-key-wrapper">
                    <code>{{ $license_key }}</code>
                    <button class="copy-btn" onclick="copyLicenseKey()">Copier</button>
                </div>
            </div>

            <ul class="files">
                <!-- macOS -->
                <li>
                    <div>
                        <div class="name">OCR-Receipt-1.0.0.dmg</div>
                        <span class="platform-tag">macOS (Intel & Apple Silicon)</span>
                    </div>
                    <a href="{{ route('license.serve', ['filename' => 'OCR-Receipt-1.0.0.dmg']) }}?email={{ urlencode($email) }}&license_key={{ urlencode($license_key) }}" class="btn">
                        Télécharger
                    </a>
                </li>
                <!-- Windows -->
                <li>
                    <div>
                        <div class="name">OCR-Receipt-1.0.0-Setup.exe</div>
                        <span class="platform-tag">Windows (10 / 11)</span>
                    </div>
                    <a href="{{ route('license.serve', ['filename' => 'OCR-Receipt-1.0.0-Setup.exe']) }}?email={{ urlencode($email) }}&license_key={{ urlencode($license_key) }}" class="btn">
                        Télécharger
                    </a>
                </li>
                <!-- Linux -->
                <li>
                    <div>
                        <div class="name">OCR-Receipt-1.0.0-linux.tar.gz</div>
                        <span class="platform-tag">Linux (tar.gz release)</span>
                    </div>
                    <a href="{{ route('license.serve', ['filename' => 'OCR-Receipt-1.0.0-linux.tar.gz']) }}?email={{ urlencode($email) }}&license_key={{ urlencode($license_key) }}" class="btn">
                        Télécharger
                    </a>
                </li>
            </ul>

            <p class="text-sm">
                Des questions ? Contactez-nous à <a href="mailto:support@ocrreceipt.com" style="color:#60a5fa; text-decoration:none;">support@ocrreceipt.com</a><br>
                <span style="color:#a1a09a; font-family:ui-monospace, monospace; font-size:10px; display:inline-block; margin-top:4px;">100% Hors-ligne · Licence perpétuelle</span>
            </p>
        </div>
    </div>

    <script>
        function copyLicenseKey() {
            const keyText = "{{ $license_key }}";
            navigator.clipboard.writeText(keyText).then(() => {
                const btn = document.querySelector('.copy-btn');
                btn.textContent = 'Copié !';
                btn.style.color = '#60a5fa';
                btn.style.borderColor = '#60a5fa';
                setTimeout(() => {
                    btn.textContent = 'Copier';
                    btn.style.color = '#a1a09a';
                    btn.style.borderColor = '#3e3e3a';
                }, 2000);
            });
        }
    </script>
</body>
</html>
