<!DOCTYPE html>
<html lang="en" class="dark">
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

    <link rel="canonical" href="https://ocrreceipt.com/alternative-hubdoc">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0a;
            color: #e5e5e5;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }
        h1, h2, h3 { font-family: 'Playfair Display', serif; font-weight: 600; }

        .container { max-width: 800px; margin: 0 auto; padding: 0 1.5rem; }

        /* Nav */
        nav {
            display: flex; align-items: center; justify-content: space-between;
            padding: 1rem 1.5rem; border-bottom: 1px solid #3e3e3a;
        }
        nav .logo { font-family: 'Playfair Display', serif; font-weight: 600; font-size: 1.1rem; color: #e5e5e5; text-decoration: none; }
        nav a { color: #a1a09a; text-decoration: none; font-size: 0.875rem; transition: color 0.15s; }
        nav a:hover { color: #60A5FA; }

        /* Hero */
        .hero {
            text-align: center; padding: 5rem 1.5rem 3rem;
            background: radial-gradient(ellipse at top, rgba(59,130,246,0.08), transparent 60%);
        }
        .hero .badge {
            display: inline-block; padding: 0.3rem 0.8rem; border-radius: 999px;
            background: #161615; border: 1px solid #3e3e3a;
            font-size: 0.75rem; color: #60A5FA; margin-bottom: 1.5rem;
        }
        .hero h1 { font-size: 2.5rem; line-height: 1.2; margin-bottom: 1rem; }
        .hero h1 span { background: linear-gradient(135deg, #60A5FA, #3B82F6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero p { color: #a1a09a; font-size: 1.1rem; max-width: 600px; margin: 0 auto 2rem; }
        .hero .btn {
            display: inline-block; padding: 0.85rem 2rem; border-radius: 0.5rem;
            background: #3B82F6; color: #fff; font-weight: 600; font-size: 0.9rem;
            text-decoration: none; transition: background 0.15s; border: none; cursor: pointer;
        }
        .hero .btn:hover { background: #60A5FA; }
        .hero .btn-outline {
            display: inline-block; padding: 0.85rem 2rem; border-radius: 0.5rem;
            border: 1px solid #3e3e3a; color: #e5e5e5; font-weight: 500;
            text-decoration: none; font-size: 0.9rem; margin-left: 0.75rem;
            transition: border-color 0.15s;
        }
        .hero .btn-outline:hover { border-color: #60A5FA; color: #60A5FA; }
        .hero .stats { margin-top: 3rem; display: flex; justify-content: center; gap: 3rem; }
        .hero .stats div { text-align: center; }
        .hero .stats .num { font-size: 1.8rem; font-weight: 700; color: #60A5FA; }
        .hero .stats .label { font-size: 0.8rem; color: #a1a09a; margin-top: 0.25rem; }

        /* Sections */
        section { padding: 4rem 1.5rem; }
        section h2 { font-size: 1.8rem; text-align: center; margin-bottom: 2.5rem; }

        .comparison { width: 100%; border-collapse: collapse; margin: 2rem 0; }
        .comparison th, .comparison td { padding: 0.75rem 1rem; text-align: left; border-bottom: 1px solid #3e3e3a; font-size: 0.9rem; }
        .comparison th { color: #a1a09a; font-weight: 500; font-size: 0.8rem; text-transform: uppercase; font-family: 'Inter', sans-serif; }
        .comparison td:first-child { font-weight: 500; }
        .comparison .check { color: #3B82F6; }
        .comparison .cross { color: #991b1b; }

        .card { background: #161615; border: 1px solid #3e3e3a; border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 1rem; }
        .card h3 { font-size: 1.1rem; margin-bottom: 0.5rem; }

        .cta-section { text-align: center; padding: 4rem 1.5rem; }
        .cta-section h2 { margin-bottom: 1rem; }
        .cta-section p { color: #a1a09a; max-width: 500px; margin: 0 auto 2rem; }

        footer { border-top: 1px solid #3e3e3a; padding: 2rem 1.5rem; text-align: center; color: #a1a09a; font-size: 0.8rem; }
        footer a { color: #a1a09a; text-decoration: none; }
        footer a:hover { color: #60A5FA; }

        @media (max-width: 640px) {
            .hero h1 { font-size: 1.8rem; }
            .hero .stats { flex-direction: column; gap: 1.5rem; }
            .comparison { font-size: 0.8rem; }
            .comparison th, .comparison td { padding: 0.5rem 0.5rem; }
        }
    </style>
</head>
<body>

<nav>
    <a href="/" class="logo">OCR Receipt</a>
    <div>
        <a href="/">Home</a>
    </div>
</nav>

<!-- Hero -->
<div class="hero">
    <div class="badge">⚡ Hubdoc Alternative — 2026</div>
    <h1>The Offline-First <span>Hubdoc Replacement</span></h1>
    <p>
        Xero retired Hubdoc on May 8, 2026. OCR Receipt is the local, private alternative:<br>
        no subscription, no cloud dependency, your data stays on your machine.
    </p>
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

<!-- Why switch -->
<div class="container">
    <h2>Why Switch from Hubdoc?</h2>
    <div class="card">
        <h3>🔌 No Forced Cloud</h3>
        <p style="color:#a1a09a;font-size:0.9rem;">Hubdoc stored your financial data on Xero's servers. OCR Receipt runs entirely on your computer. Your receipts never leave your machine.</p>
    </div>
    <div class="card">
        <h3>💸 Save $144/year</h3>
        <p style="color:#a1a09a;font-size:0.9rem;">Hubdoc was $12/month ($144/year). OCR Receipt is a one-time purchase. After the first year, you've saved 100%.</p>
    </div>
    <div class="card">
        <h3>📂 QBO-Ready Exports</h3>
        <p style="color:#a1a09a;font-size:0.9rem;">Export receipts as pre-configured CSV files importable into QuickBooks Online in 3 clicks. Same workflow, zero subscription.</p>
    </div>
    <div class="card">
        <h3>🖥️ Windows, Mac & Linux</h3>
        <p style="color:#a1a09a;font-size:0.9rem;">Hubdoc was web-only. OCR Receipt is a native desktop app for all three platforms. Works offline, in a café, or on a construction site.</p>
    </div>
</div>

<!-- Comparison -->
<div class="container">
    <h2>Hubdoc vs OCR Receipt</h2>
    <table class="comparison">
        <thead>
            <tr>
                <th>Feature</th>
                <th>Hubdoc (Xero)</th>
                <th>OCR Receipt</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Price</td>
                <td>$12/month ($144/yr) ❌</td>
                <td><strong>$199 one-time</strong> ✅</td>
            </tr>
            <tr>
                <td>Offline mode</td>
                <td>❌ Cloud-only</td>
                <td>✅ 100% offline</td>
            </tr>
            <tr>
                <td>Data privacy</td>
                <td>❌ On Xero servers</td>
                <td>✅ On your machine</td>
            </tr>
            <tr>
                <td>Platform</td>
                <td>Web only</td>
                <td>Win + Mac + Linux</td>
            </tr>
            <tr>
                <td>OCR extraction</td>
                <td>✅ Cloud AI</td>
                <td>✅ Local AI (no data sent)</td>
            </tr>
            <tr>
                <td>Batch processing</td>
                <td>✅ Included</td>
                <td>✅ Included in Pro</td>
            </tr>
            <tr>
                <td>QBO / Xero export</td>
                <td>✅ Native</td>
                <td>✅ CSV (3-click import)</td>
            </tr>
            <tr>
                <td>Still available</td>
                <td>❌ Retired May 2026</td>
                <td>✅ Active & updated</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Migration steps -->
<div class="container">
    <h2>Migrate in 5 Minutes</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:1rem;">
        <div class="card">
            <div style="font-size:1.5rem;font-weight:700;color:#60A5FA;margin-bottom:0.5rem;">1</div>
            <h3>Download</h3>
            <p style="color:#a1a09a;font-size:0.85rem;">Get OCR Receipt free. No account needed.</p>
        </div>
        <div class="card">
            <div style="font-size:1.5rem;font-weight:700;color:#60A5FA;margin-bottom:0.5rem;">2</div>
            <h3>Export from Hubdoc</h3>
            <p style="color:#a1a09a;font-size:0.85rem;">Download your receipts from Hubdoc before access ends.</p>
        </div>
        <div class="card">
            <div style="font-size:1.5rem;font-weight:700;color:#60A5FA;margin-bottom:0.5rem;">3</div>
            <h3>Import & Extract</h3>
            <p style="color:#a1a09a;font-size:0.85rem;">Drag & drop PDFs into OCR Receipt. Data extracted in seconds.</p>
        </div>
        <div class="card">
            <div style="font-size:1.5rem;font-weight:700;color:#60A5FA;margin-bottom:0.5rem;">4</div>
            <h3>Export to QBO</h3>
            <p style="color:#a1a09a;font-size:0.85rem;">CSV ready for QuickBooks Online in 3 clicks.</p>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="cta-section">
    <h2>Ready to Replace Hubdoc?</h2>
    <p>Download the free Lite version today. Full features for 14 days — no credit card required.</p>
    <a href="/#pricing" class="btn">Get OCR Receipt Free →</a>
</div>

<footer>
    <div style="margin-bottom:0.75rem;">
        <a href="/">Home</a> &middot;
        <a href="mailto:support@ocrreceipt.com">Support</a> &middot;
        <a href="https://martinfournier.com">Martin Fournier</a>
    </div>
    <p>OCR Receipt — Developed in Québec, Canada 🇨🇦</p>
    <div style="margin-top:0.75rem;padding:0.75rem;border:1px solid #3e3e3a;border-radius:0.5rem;display:inline-block;font-size:0.75rem;">
        🛡️ <strong>Abandonment Guarantee</strong> — If we ever go silent for 6 months, this software becomes open-source (MIT).
    </div>
</footer>

</body>
</html>
