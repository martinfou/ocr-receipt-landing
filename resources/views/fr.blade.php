<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Logiciel OCR Reçus Québec — OCR Receipt | Extraction locale sans abonnement</title>
    <meta name="description" content="Logiciel OCR pour extraire les données de vos factures et reçus PDF. 100% hors ligne, IA locale, aucune donnée dans le cloud. Licence perpétuelle — pas d'abonnement. Windows, Mac et Linux.">
    <meta name="keywords" content="logiciel OCR reçus Québec, OCR facture, extraire données facture PDF, reconnaissance texte facture, alternative Hubdoc Québec">

    <meta property="og:title" content="Logiciel OCR Reçus Québec — OCR Receipt">
    <meta property="og:description" content="Extraction de reçus 100% hors ligne. IA locale. Pas d'abonnement. Conçu pour les CPA et PME du Québec.">
    <meta property="og:url" content="https://ocrreceipt.com/fr">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ocrreceipt.com/og-image.png">

    <link rel="canonical" href="https://ocrreceipt.com/fr">

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
        }
        h1, h2, h3 { font-family: 'Playfair Display', serif; font-weight: 600; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 1.5rem; }

        nav {
            display: flex; align-items: center; justify-content: space-between;
            padding: 1rem 1.5rem; border-bottom: 1px solid #3e3e3a;
        }
        nav .logo { font-family: 'Playfair Display', serif; font-weight: 600; font-size: 1.1rem; color: #e5e5e5; text-decoration: none; }

        .hero {
            text-align: center; padding: 5rem 1.5rem 3rem;
            background: radial-gradient(ellipse at top, rgba(59,130,246,0.08), transparent 60%);
        }
        .hero h1 { font-size: 2.5rem; line-height: 1.2; margin-bottom: 1rem; }
        .hero h1 span { background: linear-gradient(135deg, #60A5FA, #3B82F6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero p { color: #a1a09a; font-size: 1.1rem; max-width: 600px; margin: 0 auto 2rem; }
        .hero .btn {
            display: inline-block; padding: 0.85rem 2rem; border-radius: 0.5rem;
            background: #3B82F6; color: #fff; font-weight: 600;
            text-decoration: none; transition: background 0.15s;
        }
        .hero .btn:hover { background: #60A5FA; }

        section { padding: 4rem 1.5rem; }
        section h2 { font-size: 1.8rem; text-align: center; margin-bottom: 2.5rem; }

        .card { background: #161615; border: 1px solid #3e3e3a; border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 1rem; }
        .card h3 { font-size: 1.1rem; margin-bottom: 0.5rem; color: #60A5FA; }

        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; }

        footer { border-top: 1px solid #3e3e3a; padding: 2rem 1.5rem; text-align: center; color: #a1a09a; font-size: 0.8rem; }
        footer a { color: #a1a09a; text-decoration: none; }
        footer a:hover { color: #60A5FA; }

        @media (max-width: 640px) {
            .hero h1 { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

<nav>
    <a href="/" class="logo">OCR Receipt</a>
    <div>
        <a href="/" style="color:#a1a09a;text-decoration:none;font-size:0.875rem;">EN</a>
    </div>
</nav>

<div class="hero">
    <h1>Logiciel OCR pour reçus <span>conçu au Québec</span></h1>
    <p>
        Extrayez automatiquement le montant, la date et le fournisseur de vos factures PDF.
        100% hors ligne, IA locale, aucune donnée dans le cloud. Licence perpétuelle — pas d'abonnement.
    </p>
    <a href="/#pricing" class="btn">Télécharger gratuitement →</a>
</div>

<div class="container">
    <h2>Pourquoi les CPA et PME du Québec choisissent OCR Receipt</h2>

    <div class="features-grid">
        <div class="card">
            <h3>🔒 100% Confidentiel</h3>
            <p style="color:#a1a09a;font-size:0.9rem;">Aucune donnée financière ne quitte votre ordinateur. Idéal pour les cabinets CPA sous NDA.</p>
        </div>
        <div class="card">
            <h3>💸 Pas d'abonnement</h3>
            <p style="color:#a1a09a;font-size:0.9rem;">Licence perpétuelle. Vous payez une fois, vous possédez à vie. Économisez 84-100% vs Dext/Expensify.</p>
        </div>
        <div class="card">
            <h3>🖥️ Windows, Mac & Linux</h3>
            <p style="color:#a1a09a;font-size:0.9rem;">Application native pour les trois plateformes. Fonctionne hors ligne, sans connexion Internet.</p>
        </div>
        <div class="card">
            <h3>🤖 IA Locale</h3>
            <p style="color:#a1a09a;font-size:0.9rem;">DeepSeek et NuExtract tournent sur votre processeur. Extraction intelligente sans envoyer vos données à OpenAI.</p>
        </div>
        <div class="card">
            <h3>📊 Export QuickBooks / Xero</h3>
            <p style="color:#a1a09a;font-size:0.9rem;">CSV pré-configuré importable dans QuickBooks Online en 3 clics. Aussi compatible Excel et Sage.</p>
        </div>
        <div class="card">
            <h3>🇨🇦 Développé au Québec</h3>
            <p style="color:#a1a09a;font-size:0.9rem;">Support en français. Conçu pour les besoins des CPA et PME québécois.</p>
        </div>
    </div>
</div>

<div class="container">
    <h2>Comparaison : OCR Receipt vs les solutions cloud</h2>
    <table style="width:100%;border-collapse:collapse;margin:2rem 0;font-size:0.9rem;">
        <tr style="color:#a1a09a;font-size:0.8rem;text-transform:uppercase;">
            <th style="padding:0.75rem;text-align:left;border-bottom:1px solid #3e3e3a;">Critère</th>
            <th style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">Dext</th>
            <th style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">Expensify</th>
            <th style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">OCR Receipt</th>
        </tr>
        <tr><td style="padding:0.75rem;border-bottom:1px solid #3e3e3a;">Prix / an</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;color:#991b1b;">~276 $</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;color:#991b1b;">~60-216 $</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;color:#3B82F6;"><strong>149 $ unique</strong></td></tr>
        <tr><td style="padding:0.75rem;border-bottom:1px solid #3e3e3a;">Hors ligne</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">❌</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">❌</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;color:#3B82F6;">✅ 100%</td></tr>
        <tr><td style="padding:0.75rem;border-bottom:1px solid #3e3e3a;">Données confidentielles</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">❌ Cloud</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">❌ Cloud</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;color:#3B82F6;">✅ Locales</td></tr>
        <tr><td style="padding:0.75rem;border-bottom:1px solid #3e3e3a;">Linux</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">❌</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;">❌</td><td style="padding:0.75rem;text-align:center;border-bottom:1px solid #3e3e3a;color:#3B82F6;">✅</td></tr>
        <tr><td style="padding:0.75rem;">Support français</td><td style="padding:0.75rem;text-align:center;">❌</td><td style="padding:0.75rem;text-align:center;">❌</td><td style="padding:0.75rem;text-align:center;color:#3B82F6;">✅</td></tr>
    </table>
</div>

<div class="container" style="text-align:center;padding:4rem 1.5rem;">
    <h2>Prêt à essayer ?</h2>
    <p style="color:#a1a09a;margin-bottom:2rem;">Version Lite gratuite. 14 jours d'essai Pro sans carte de crédit.</p>
    <a href="/#pricing" class="btn">Télécharger gratuitement →</a>
</div>

<footer>
    <div style="margin-bottom:0.75rem;">
        <a href="/">Home</a> &middot;
        <a href="mailto:support@ocrreceipt.com">Support</a>
    </div>
    <p>OCR Receipt — Développé au Québec, Canada 🇨🇦</p>
</footer>

</body>
</html>
