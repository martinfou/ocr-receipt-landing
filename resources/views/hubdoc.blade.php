<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hubdoc Alternative — OCR Receipt | Offline & Local</title>
    <meta name="description" content="Looking for a Hubdoc alternative after Xero retired it in May 2026? OCR Receipt is a local, offline-first receipt OCR app. No subscription. Your data stays on your machine.">
    <meta name="keywords" content="Hubdoc alternative, Hubdoc replacement, alternative to Hubdoc, receipt OCR offline, local receipt scanner">
    <meta property="og:title" content="Hubdoc Alternative — OCR Receipt">
    <meta property="og:description" content="The offline-first Hubdoc replacement. No subscription. Your data stays on your machine.">
    <meta property="og:url" content="https://ocrreceipt.com/alternative-hubdoc">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ocrreceipt.com/og-image.png">
    <link rel="canonical" href="https://ocrreceipt.com/alternative-hubdoc">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=EB+Garamond:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { background: var(--color-surface); color: var(--color-text); font-family: 'Plus Jakarta Sans', sans-serif; line-height: 1.6; }
        h1, h2, h3 { font-family: 'EB Garamond', serif; font-weight: 600; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 1.5rem; }
        .card { background: var(--color-surface-light); border: 1px solid var(--color-border); border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 1rem; }
        .card h3 { font-size: 1.1rem; margin-bottom: 0.5rem; color: var(--color-brand-dark); }
        .btn { display: inline-block; padding: 0.85rem 2rem; border-radius: 0.5rem; background: var(--color-brand-dark); color: #fff; font-weight: 600; font-size: 0.9rem; text-decoration: none; transition: background 0.15s; border: none; cursor: pointer; }
        .btn:hover { background: var(--color-brand); }
        .btn-outline { display: inline-block; padding: 0.85rem 2rem; border-radius: 0.5rem; border: 1px solid var(--color-border); color: var(--color-text); font-weight: 500; text-decoration: none; font-size: 0.9rem; margin-left: 0.75rem; transition: border-color 0.15s; }
        .btn-outline:hover { border-color: var(--color-brand); color: var(--color-brand); }
        .hero { text-align: center; padding: 5rem 1.5rem 3rem; background: linear-gradient(180deg, rgba(34,197,94,0.05), transparent 60%); }
        .hero h1 { font-size: 2.5rem; line-height: 1.2; margin-bottom: 1rem; }
        .hero h1 span { color: var(--color-brand-dark); }
        .hero p { color: var(--color-text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto 2rem; }
        .hero .stats { margin-top: 3rem; display: flex; justify-content: center; gap: 3rem; }
        .hero .stats .num { font-size: 1.8rem; font-weight: 700; color: var(--color-brand); }
        .hero .stats .label { font-size: 0.8rem; color: var(--color-text-muted); margin-top: 0.25rem; }
        section { padding: 4rem 1.5rem; }
        section h2 { font-size: 1.8rem; text-align: center; margin-bottom: 2.5rem; color: var(--color-text); }
        .comparison { width: 100%; border-collapse: collapse; margin: 2rem 0; }
        .comparison th, .comparison td { padding: 0.75rem 1rem; text-align: left; border-bottom: 1px solid var(--color-border); font-size: 0.9rem; }
        .comparison th { color: var(--color-text-muted); font-weight: 500; font-size: 0.8rem; text-transform: uppercase; }
        .comparison .check { color: var(--color-brand); }
        .comparison .cross { color: #dc2626; }
        footer { border-top: 1px solid var(--color-border); padding: 2rem 1.5rem; text-align: center; color: var(--color-text-muted); font-size: 0.8rem; }
        footer a { color: var(--color-text-muted); text-decoration: none; }
        footer a:hover { color: var(--color-brand); }
        @media (max-width: 640px) { .hero h1 { font-size: 1.8rem; } .hero .stats { flex-direction: column; gap: 1.5rem; } }
    </style>
</head>
<body>
    <div id="static-app">
        <nav style="display:flex;align-items:center;justify-content:space-between;padding:1rem 1.5rem;border-bottom:1px solid var(--color-border);">
            <a href="/" style="font-family:'EB Garamond',serif;font-weight:600;font-size:1.1rem;color:var(--color-text);text-decoration:none;">OCR Receipt</a>
            <div><a href="/" style="color:var(--color-text-muted);text-decoration:none;font-size:0.875rem;">Home</a></div>
        </nav>

        <div class="hero">
            <div style="display:inline-block;padding:0.3rem 0.8rem;border-radius:999px;background:var(--color-surface-light);border:1px solid var(--color-border);font-size:0.75rem;color:var(--color-brand-dark);margin-bottom:1.5rem;">⚡ Hubdoc Alternative — 2026</div>
            <h1>The Offline-First <span>Hubdoc Replacement</span></h1>
            <p>Xero retired Hubdoc on May 8, 2026. OCR Receipt is the local, private alternative: no subscription, no cloud dependency, your data stays on your machine.</p>
            <div>
                <a href="/#pricing" class="btn">Get OCR Receipt</a>
                <a href="/" class="btn-outline">Learn More →</a>
            </div>
            <div class="stats">
                <div><div class="num">$0</div><div class="label">Free to try</div></div>
                <div><div class="num">$199</div><div class="label">One-time, own forever</div></div>
                <div><div class="num">100%</div><div class="label">Offline & Private</div></div>
            </div>
        </div>

        <div class="container">
            <h2>Why Switch from Hubdoc?</h2>
            <div class="card"><h3>🔌 No Forced Cloud</h3><p style="color:var(--color-text-muted);font-size:0.9rem;">Hubdoc stored your financial data on Xero's servers. OCR Receipt runs entirely on your computer. Your receipts never leave your machine.</p></div>
            <div class="card"><h3>💸 Save $144/year</h3><p style="color:var(--color-text-muted);font-size:0.9rem;">Hubdoc was $12/month ($144/year). OCR Receipt is a one-time purchase. After the first year, you've saved 100%.</p></div>
            <div class="card"><h3>📂 QBO-Ready Exports</h3><p style="color:var(--color-text-muted);font-size:0.9rem;">Export receipts as pre-configured CSV files importable into QuickBooks Online in 3 clicks. Same workflow, zero subscription.</p></div>
            <div class="card"><h3>🖥️ Windows, Mac & Linux</h3><p style="color:var(--color-text-muted);font-size:0.9rem;">Hubdoc was web-only. OCR Receipt is a native desktop app for all three platforms. Works offline, anywhere.</p></div>
        </div>

        <div class="container">
            <h2>Hubdoc vs OCR Receipt</h2>
            <table class="comparison">
                <tr><th>Feature</th><th>Hubdoc (Xero)</th><th>OCR Receipt</th></tr>
                <tr><td>Price</td><td class="cross">$12/month ($144/yr)</td><td class="check"><strong>$199 one-time</strong></td></tr>
                <tr><td>Offline mode</td><td class="cross">❌ Cloud-only</td><td class="check">✅ 100% offline</td></tr>
                <tr><td>Data privacy</td><td class="cross">❌ On Xero servers</td><td class="check">✅ On your machine</td></tr>
                <tr><td>Platform</td><td>Web only</td><td class="check">Win + Mac + Linux</td></tr>
                <tr><td>Still available</td><td class="cross">❌ Retired May 2026</td><td class="check">✅ Active & updated</td></tr>
            </table>
        </div>

        <div style="text-align:center;padding:4rem 1.5rem;">
            <h2 style="font-size:1.8rem;margin-bottom:1rem;">Ready to Replace Hubdoc?</h2>
            <p style="color:var(--color-text-muted);margin-bottom:2rem;">Download the free Lite version today. Full features for 14 days — no credit card required.</p>
            <a href="/#pricing" class="btn">Get OCR Receipt Free →</a>
        </div>

        <footer>
            <p>OCR Receipt — Québec, Canada 🇨🇦</p>
            <div style="margin-top:0.5rem;"><a href="/">Home</a> · <a href="/blog">Blog</a> · <a href="/fr">Français</a></div>
        </footer>
    </div>
</body>
</html>
