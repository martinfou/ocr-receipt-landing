<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>OCR Receipt — Installateur pas encore disponible</title>
    <style>
        *,::after,::before{box-sizing:border-box;margin:0;padding:0}
        body{font-family:Inter,ui-sans-serif,system-ui,sans-serif;background:#f9fafb;color:#111827;min-height:100vh;display:flex;align-items:center;justify-content:center}
        .card{max-width:520px;width:100%;margin:2rem;background:#fff;border-radius:1.5rem;box-shadow:0 4px 24px rgba(0,0,0,.08);padding:2.5rem;text-align:center}
        .icon{font-size:3rem;margin-bottom:1rem}
        h1{font-size:1.5rem;margin-bottom:.5rem}
        p{color:#6b7280;margin-bottom:1.5rem;line-height:1.6}
        .file{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.8rem;color:#374151;background:#f3f4f6;border-radius:.5rem;padding:.5rem .75rem;display:inline-block;margin-bottom:1.5rem;word-break:break-all}
        .btn{display:inline-block;background:#16a34a;color:#fff;font-weight:700;padding:.75rem 1.5rem;border-radius:.75rem;text-decoration:none;transition:background .2s}
        .btn:hover{background:#15803d}
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">📦</div>
        <h1>Installateur pas encore disponible</h1>
        <p>
            Le paquet d'installation n'est pas encore publié.<br>
            Nous préférons te le dire franchement plutôt que de te servir un fichier vide.
        </p>
        <div class="file">{{ $filename ?? 'installateur' }}</div>
        <p>
            Écris-nous à
            <a href="mailto:support@ocrreceipt.com">support@ocrreceipt.com</a>
            et on te prévient dès que le build est prêt.
        </p>
        <a href="/" class="btn">🏠 Retour à l'accueil</a>
    </div>
</body>
</html>
