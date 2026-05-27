<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OCR Receipt — L'OCR qui comprend ce qu'il lit. Importez vos factures PDF. L'IA extrait, corrige et classe. Zéro configuration. Zéro nuage.">
    <title>OCR Receipt — L'OCR qui comprend ce qu'il lit</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4 */
            *,::after,::before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}
            html{line-height:1.5;-webkit-text-size-adjust:100%;tab-size:4;font-family:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"}
            body{font-family:Inter,ui-sans-serif,system-ui,sans-serif}
            a{color:inherit;text-decoration:inherit}
            @media (min-width:640px){.sm\:text-5xl{font-size:3rem;line-height:1}.sm\:text-lg{font-size:1.125rem}.sm\:px-8{padding-left:2rem;padding-right:2rem}.sm\:py-4{padding-top:1rem;padding-bottom:1rem}.sm\:flex-row{flex-direction:row}.sm\:flex{display:flex}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.sm\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}}
            @media (min-width:768px){.md\:text-6xl{font-size:3.75rem;line-height:1}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}}
        </style>
    @endif

    <style>
        html { scroll-behavior: smooth; }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.3s ease, padding 0.3s ease; }
        .faq-open .faq-answer { max-height: 300px; }
        .segment-content { transition: opacity 0.3s ease; }
        .segment-content.hidden { display: none; }
        .modal-hidden { display: none; }
        .modal-overlay { position: fixed; inset: 0; background: rgba(0,0,0,.5); z-index: 100; }
        .modal-content { position: fixed; top: 50%; left: 50%; transform: translate(-50%,-50%); background: #fff; border-radius: 1.5rem; padding: 2.5rem; z-index: 101; max-width: 440px; width: 90%; text-align: center; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

@php
$content = [
    'all' => [
        'icon' => '🧾',
        'badge' => 'Tous',
        'title' => "L'OCR qui comprend<br class=\"hidden sm:block\"> ce qu'il lit.",
        'subtitle' => 'Importez vos factures PDF.<br>L\'IA extrait, corrige et classe.<br>Zéro configuration. Zéro nuage.',
        'social_proof' => "En développement — accès anticipé ouvert.\n            <span class=\"block sm:inline\">· Inscrivez-vous pour être parmi les premiers utilisateurs</span>",
        'pain_title' => 'Vous aussi vous faites ça ?',
        'pain_points' => [
            'Ouvrir un PDF → Lire le montant → Copier dans Excel → Ranger le fichier',
            'Recommencer 30, 50, 100 fois par mois',
            'Corriger les erreurs de copie à la main',
            'Perdre 10-15 minutes par semaine à catégoriser des fournisseurs',
        ],
        'pain_stats' => 'Une facture = <strong>5 minutes</strong> de travail manuel.',
        'pain_stats2' => '50 factures = <strong>4 heures</strong> par mois. <strong>48 heures</strong> par an.',
        'how_title' => 'OCR Receipt le fait en 5 secondes.',
        'how_subtitle' => 'Trois étapes simples pour transformer vos factures en données structurées.',
        'steps' => [
            ['icon' => '1️⃣', 'title' => 'Glissez votre PDF', 'desc' => 'Drag & drop. Un par un ou 50 d\'un coup.'],
            ['icon' => '2️⃣', 'title' => 'L\'IA fait le travail', 'desc' => 'L\'OCR extrait le texte. L\'IA corrige les erreurs et comprend le contexte. <span class="block mt-1 text-gray-400 italic">"Walm@rt" → "Walmart". "25,99$" → 25.99. Automatique.</span>'],
            ['icon' => '3️⃣', 'title' => 'Résultat prêt', 'desc' => 'Date, fournisseur, montant, catégorie. Tout est rempli, vérifié, exportable en CSV.'],
        ],
        'features_intro' => 'Tout ce dont vous avez besoin pour gérer vos factures, en un seul outil.',
        'features' => [
            ['icon' => '🧠', 'title' => 'IA Intelligente', 'desc' => 'Correction automatique des erreurs OCR. Catégorisation intelligente des fournisseurs. Pas de règles à configurer, pas de machine learning à entraîner.'],
            ['icon' => '📁', 'title' => 'Batch Processing', 'desc' => 'Glissez 50 factures. L\'app les traite en arrière-plan. Pendant ce temps, vous faites ce que vous voulez. Progression en temps réel, zéro freeze.'],
            ['icon' => '🔒', 'title' => 'Confidentialité Totale', 'desc' => '100% local. Vos données sensibles restent sur votre disque dur. Pas de cloud, pas de serveur, pas de fuite. Idéal pour les professionnels avec des données clients confidentielles.'],
            ['icon' => '🏷️', 'title' => 'Matching Fournisseur', 'desc' => 'L\'IA reconnaît vos fournisseurs habituels. "Bell Canada Inc." → "Bell". Chaque fois. Plus besoin de mapper manuellement les variations de nom.'],
            ['icon' => '📊', 'title' => 'Export CSV', 'desc' => 'Un clic pour exporter toutes vos factures en CSV structuré. Compatible Excel, Google Sheets, QuickBooks, Xero.'],
            ['icon' => '🎯', 'title' => 'Interface Desktop', 'desc' => 'Une vraie app Windows/Mac/Linux, pas un site web. Pas de latence réseau, pas d\'abonnement mensuel qui s\'accumule. Vous possédez le logiciel, point.'],
        ],
    ],
    'comptables' => [
        'icon' => '🏢',
        'badge' => 'Comptables',
        'title' => 'Conçu pour les cabinets comptables.<br class="hidden sm:block"> Pas de nuage. Pas de fuite.',
        'subtitle' => 'L\'IA reconnaît vos fournisseurs automatiquement.<br>Fini le mapping manuel des noms de fournisseurs.<br>100% local — les données de vos clients restent chez vous.',
        'social_proof' => "En développement — version Comptables en préparation.\n            <span class=\"block sm:inline\">· Inscrivez-vous pour la beta fermée</span>",
        'pain_title' => 'Vous perdez combien d\'heures par mois ?',
        'pain_points' => [
            'Des clients qui envoient des PDF non-standardisés dans 15 formats différents',
            'Passer 30 minutes à catégoriser les fournisseurs d\'un dossier',
            'Corriger des erreurs de transcription qui vous font perdre crédibilité auprès du client',
            'Multiplier les allers-retours avec le client pour une facture mal classée',
        ],
        'pain_stats' => 'Par dossier client = <strong>2 heures</strong> de saisie manuelle.',
        'pain_stats2' => '15 dossiers = <strong>30 heures</strong> par mois. <strong>360 heures</strong> par an.',
        'how_title' => 'OCR Receipt traite un dossier en 30 secondes.',
        'how_subtitle' => 'Vos clients envoient leurs PDF. L\'IA fait le reste.',
        'steps' => [
            ['icon' => '📥', 'title' => 'Import client', 'desc' => 'Recevez les PDF par courriel ou dossier partagé. Import en un clic.'],
            ['icon' => '🤖', 'title' => 'IA analyse', 'desc' => 'L\'IA reconnaît les fournisseurs, les montants, les dates. Même les variations de nom.'],
            ['icon' => '📋', 'title' => 'Rapport prêt', 'desc' => 'Export structuré pour vos écritures comptables. QuickBooks, Xero, CSV.'],
        ],
        'features_intro' => 'Des fonctionnalités pensées pour les professionnels de la comptabilité.',
        'features' => [
            ['icon' => '🧠', 'title' => 'IA Intelligente', 'desc' => 'Correction automatique des erreurs OCR. Catégorisation intelligente des fournisseurs par dossier client. Apprentissage continu.'],
            ['icon' => '📁', 'title' => 'Traitement par lot', 'desc' => 'Importez les PDF de 10 clients d\'un coup. L\'app traite tout en arrière-plan.'],
            ['icon' => '🔒', 'title' => 'Confidentialité Client', 'desc' => '100% local. Aucune donnée client ne quitte votre poste de travail. CNESST-compatible.'],
            ['icon' => '🏷️', 'title' => 'Matching Fournisseur Pro', 'desc' => 'L\'IA mémorise les fournisseurs par dossier client. "Bell Canada Inc." → "Bell". "SMT Solutions" → "SMT".'],
            ['icon' => '📊', 'title' => 'Export Comptable', 'desc' => 'CSV structuré prêt pour Acomba, QuickBooks, Xero, Sage. Mapping des comptes personnalisable.'],
            ['icon' => '🎯', 'title' => 'Interface Desktop', 'desc' => 'App Windows/Mac/Linux native. Pas de cloud. Pas d\'abonnement. Licence perpétuelle.'],
        ],
    ],
    'freelances' => [
        'icon' => '💻',
        'badge' => 'Freelances',
        'title' => '5 secondes par facture.<br class="hidden sm:block"> Zéro configuration.',
        'subtitle' => 'Tu glisses ton PDF. L\'IA le lit.<br>Date, montant, fournisseur, catégorie. Tout est rempli.<br>Tu passes à ta vraie job.',
        'social_proof' => "En développement — version Freelance bientôt disponible.\n            <span class=\"block sm:inline\">· Inscrivez-vous pour l'accès anticipé</span>",
        'pain_title' => 'Tu fais ta compta à l\'arrache ?',
        'pain_points' => [
            'Un dossier « Factures » qui grossit de mois en mois, sans que tu aies le temps de le classer',
            '15-30 minutes arrachées à ton travail créatif chaque semaine pour copier des chiffres',
            'La panique aux impôts quand tu dois retrouver UNE facture dans 200 PDFs non-classés',
            'Payer ton comptable pour qu\'il fasse le classement à ta place',
        ],
        'pain_stats' => 'Une facture = <strong>5 minutes</strong> de temps perdu.',
        'pain_stats2' => '20 factures = <strong>1h40</strong> par mois. <strong>20 heures</strong> par an à ne pas facturer.',
        'how_title' => '3 clics. C\'est tout.',
        'how_subtitle' => 'Pas de tuto, pas de config. Tu ouvres, tu glisses, t\'oublies.',
        'steps' => [
            ['icon' => '📄', 'title' => 'Ouvre l\'app', 'desc' => 'Pas de login, pas d\'abonnement. L\'app s\'ouvre, prête à l\'emploi.'],
            ['icon' => '🎯', 'title' => 'Glisse ton PDF', 'desc' => 'Un seul ou 30 d\'un coup. L\'IA les traite en quelques secondes.'],
            ['icon' => '✅', 'title' => 'C\'est fait', 'desc' => 'Date, montant, fournisseur, catégorie. Tout est là. Export en CSV pour ton comptable.'],
        ],
        'features_intro' => 'Simple, rapide, efficace. Pas de bloatware.',
        'features' => [
            ['icon' => '🧠', 'title' => 'IA Intelligente', 'desc' => 'L\'IA corrige les erreurs de scan. "Walm@rt" → "Walmart". "25,99$" → 25.99. Tu relis rien.'],
            ['icon' => '📁', 'title' => 'Batch Processing', 'desc' => 'Glisse tout ton mois d\'un coup. L\'app traite tout en arrière-plan.'],
            ['icon' => '🔒', 'title' => '100% Local', 'desc' => 'Tes fichiers restent sur ton Mac/PC. Pas de cloud, pas d\'abonnement, pas de fuite.'],
            ['icon' => '🏷️', 'title' => 'Matching Fournisseur', 'desc' => 'L\'IA reconnaît tes fournisseurs habituels. Shopify, Stripe, AWS, Twilio — tout est classé automatiquement.'],
            ['icon' => '📊', 'title' => 'Export CSV', 'desc' => 'Un clic. Envoie à ton comptable. Excel, Sheets, tout ce que tu veux.'],
            ['icon' => '🎯', 'title' => 'Interface Desktop', 'desc' => 'Une vraie app. Pas un site web. Pas de navigateur. Pas de latence.'],
        ],
    ],
    'pme' => [
        'icon' => '🏭',
        'badge' => 'PME',
        'title' => '48 heures par an gaspillées<br class="hidden sm:block"> à classer des PDF.',
        'subtitle' => 'OCR Receipt traite vos factures en batch.<br>L\'IA extrait, corrige et classe.<br>Votre comptable reçoit des données propres.',
        'social_proof' => "En développement — version PME en préparation.\n            <span class=\"block sm:inline\">· Contactez-nous pour une démo privée</span>",
        'pain_title' => 'Vous gérez combien de factures par mois ?',
        'pain_points' => [
            '50 à 200 factures qui arrivent par courriel chaque mois, sans format standard',
            'Un employé qui passe 2-3 jours par mois à tout classer manuellement',
            'Des erreurs de copie qui coûtent cher en fin d\'année',
            'Des fournisseurs qui changent de nom et vous devez tout remapper',
        ],
        'pain_stats' => '200 factures = <strong>2 jours</strong> de travail par mois.',
        'pain_stats2' => '= <strong>24 jours</strong> par an. Un mois complet de salaire.',
        'how_title' => 'OCR Receipt traite 200 factures en 15 minutes.',
        'how_subtitle' => 'Lancez le batch. Pendant ce temps, vous gérez votre entreprise.',
        'steps' => [
            ['icon' => '📤', 'title' => 'Déposez les PDF', 'desc' => 'Par courriel, dossier réseau ou glisser-déposer. 200 fichiers, pas de limite.'],
            ['icon' => '⚡', 'title' => 'Traitement batch', 'desc' => 'L\'IA travaille en arrière-plan. l\'IA extrait date, montant, fournisseur, catégorie.'],
            ['icon' => '📊', 'title' => 'Exportez pour le CPA', 'desc' => 'CSV prêt pour votre comptable. QuickBooks, Xero, Sage, Acomba.'],
        ],
        'features_intro' => 'Automatisez votre cycle factures complet.',
        'features' => [
            ['icon' => '🧠', 'title' => 'IA Intelligente', 'desc' => 'Correction automatique des erreurs OCR. Catégorisation par département, projet ou centre de coût.'],
            ['icon' => '📁', 'title' => 'Batch Processing', 'desc' => 'Importez 200 factures d\'un coup. Traitement en arrière-plan. Progression en temps réel.'],
            ['icon' => '🔒', 'title' => 'Confidentialité Totale', 'desc' => '100% local. Vos données sensibles (clients, fournisseurs, prix) restent sur votre serveur. Zéro cloud.'],
            ['icon' => '🏷️', 'title' => 'Matching Fournisseur Pro', 'desc' => 'L\'IA apprend vos relations fournisseurs. « 9384-1234 Québec Inc. » → « Fournitures Bureau Plus ».'],
            ['icon' => '📊', 'title' => 'Export Multi-format', 'desc' => 'CSV, Excel, QuickBooks, Xero, Sage, Acomba. Votre CPA reçoit des données propres.'],
            ['icon' => '🎯', 'title' => 'Interface Desktop', 'desc' => 'App Windows/Mac/Linux. Licence perpétuelle. Pas d\'abonnement qui augmente chaque année.'],
        ],
    ],
];
@endphp

<!-- ===== HEADER ===== -->
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="#" class="flex items-center gap-2 text-lg font-bold text-gray-900">
                <span class="text-2xl">📄✓</span>
                <span>OCR Receipt</span>
            </a>
            <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-600">
                <a href="#features" class="hover:text-blue-600 transition-colors">Fonctionnalités</a>
                <a href="#pricing" class="hover:text-blue-600 transition-colors">Tarifs</a>
                <a href="#faq" class="hover:text-blue-600 transition-colors">FAQ</a>
            </nav>
            <a href="#beta" class="inline-flex items-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-lg transition-colors">
                ⬇️ Accès anticipé
            </a>
        </div>
    </div>
</header>

<!-- ===== SEGMENT TABS ===== -->
<section class="bg-white border-b border-gray-100 sticky top-16 z-40">
    <div class="max-w-4xl mx-auto px-4">
        <div class="flex overflow-x-auto gap-1 py-3 -mx-4 px-4 sm:mx-0 sm:px-0 scrollbar-hide" id="segment-tabs">
            @foreach(['all' => '👥 Tous', 'comptables' => '🏢 Comptables', 'freelances' => '💻 Freelances', 'pme' => '🏭 PME'] as $key => $label)
            <button data-segment="{{ $key }}"
                    class="segment-tab whitespace-nowrap px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                    @if($key === 'all') bg-blue-600 text-white shadow-sm @else bg-white text-gray-600 border border-gray-200 hover:border-blue-300 hover:text-blue-600 @endif">
                {{ $label }}
            </button>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== HERO ===== -->
@foreach(['all', 'comptables', 'freelances', 'pme'] as $seg)
<section data-segment="{{ $seg }}" class="segment-content relative overflow-hidden @if($seg !== 'all') hidden @endif">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-gray-50 pointer-events-none"></div>
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 lg:py-36 text-center">
        <div class="text-6xl sm:text-7xl mb-6">{{ $content[$seg]['icon'] }}</div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
            {!! $content[$seg]['title'] !!}
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto mb-10 leading-relaxed">
            {!! $content[$seg]['subtitle'] !!}
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-10">
            <a href="#beta" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-xl text-base sm:text-lg shadow-lg shadow-blue-600/25 transition-all hover:shadow-blue-600/40">
                📥 {{ $seg === 'all' ? "Obtenir l'accès anticipé" : ($seg === 'freelances' ? 'Essayer gratuitement' : 'Demander une démo') }}
            </a>
        </div>
        <p class="text-sm text-gray-500">
            {{ $content[$seg]['social_proof'] }}
            <span class="block sm:inline text-gray-400">· IA intégrée · 100% local · Licence perpétuelle · Cloud IA optionnel</span>
        </p>
    </div>
</section>
@endforeach

<!-- ===== PROBLEM SECTION ===== -->
@foreach(['all', 'comptables', 'freelances', 'pme'] as $seg)
<section data-segment="{{ $seg }}" class="segment-content py-20 sm:py-28 @if($seg !== 'all') hidden @endif">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-8 text-center">{{ $content[$seg]['pain_title'] }}</h2>
        <div class="space-y-4 text-gray-700 text-base sm:text-lg">
            @foreach($content[$seg]['pain_points'] as $point)
            <div class="flex items-start gap-3 bg-red-50 border border-red-100 rounded-xl p-4">
                <span class="text-red-500 shrink-0 mt-0.5">❌</span>
                <span>{{ $point }}</span>
            </div>
            @endforeach
        </div>
        <div class="mt-10 bg-blue-50 border border-blue-100 rounded-2xl p-6 sm:p-8 text-center">
            <p class="text-gray-700 text-lg mb-2">{!! $content[$seg]['pain_stats'] !!}</p>
            <p class="text-gray-700 text-lg">{!! $content[$seg]['pain_stats2'] !!}</p>
            <p class="text-red-600 font-semibold text-lg mt-3">C'est du temps que vous ne récupérerez jamais.</p>
        </div>
        <div class="text-center mt-8">
            <a href="#how" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold transition-colors">
                {{ $content[$seg]['how_title'] }} Découvrez comment ↓
            </a>
        </div>
    </div>
</section>
@endforeach

<!-- ===== HOW IT WORKS ===== -->
@foreach(['all', 'comptables', 'freelances', 'pme'] as $seg)
<section id="how" data-segment="{{ $seg }}" class="segment-content py-20 sm:py-28 bg-white @if($seg !== 'all') hidden @endif">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 text-center">{{ $content[$seg]['how_title'] }}</h2>
        <p class="text-gray-500 text-center mb-12 max-w-lg mx-auto">{{ $content[$seg]['how_subtitle'] }}</p>
        <div class="grid sm:grid-cols-3 gap-8">
            @foreach($content[$seg]['steps'] as $step)
            <div class="text-center p-6">
                <div class="text-4xl mb-4">{{ $step['icon'] }}</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $step['title'] }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed">{!! $step['desc'] !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach

<!-- ===== FEATURES ===== -->
@foreach(['all', 'comptables', 'freelances', 'pme'] as $seg)
<section id="features" data-segment="{{ $seg }}" class="segment-content py-20 sm:py-28 @if($seg !== 'all') hidden @endif">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 text-center mb-4">Fonctionnalités</h2>
        <p class="text-gray-500 text-center mb-12 max-w-lg mx-auto">{{ $content[$seg]['features_intro'] }}</p>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($content[$seg]['features'] as $feat)
            <div class="bg-white border border-gray-100 rounded-2xl p-6 hover:shadow-lg hover:border-blue-100 transition-all">
                <div class="text-3xl mb-4">{{ $feat['icon'] }}</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $feat['title'] }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $feat['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach

<!-- ===== PRICING ===== -->
<section id="pricing" class="py-20 sm:py-28 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 text-center mb-4">Tarifs</h2>
        <p class="text-gray-500 text-center mb-12 max-w-lg mx-auto">L'application desktop est gratuite. Si l'IA locale est trop lente ou la qualité insuffisante, basculez dans le cloud.</p>
        <div class="grid sm:grid-cols-3 gap-6">
            <!-- Desktop Gratuit -->
            <div class="border border-gray-200 rounded-2xl p-8 flex flex-col">
                <div class="text-4xl mb-4">🖥️</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Desktop Gratuit</h3>
                <p class="text-4xl font-extrabold text-gray-900 mb-6">0$</p>
                <ul class="space-y-3 text-sm text-gray-700 mb-8 flex-1">
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> OCR + IA local</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> 100 pages/mois</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Champs : date, montant</li>
                    <li class="flex items-start gap-2"><span class="text-gray-300 shrink-0">❌</span> <span class="text-gray-400">Export CSV</span></li>
                    <li class="flex items-start gap-2"><span class="text-gray-300 shrink-0">❌</span> <span class="text-gray-400">Batch processing</span></li>
                    <li class="flex items-start gap-2"><span class="text-gray-300 shrink-0">❌</span> <span class="text-gray-400">Cloud fallback</span></li>
                </ul>
                <a href="#" class="block text-center bg-gray-100 hover:bg-gray-200 text-gray-900 font-semibold py-3 rounded-xl transition-colors">
                    ⬇️ Télécharger gratuit
                </a>
            </div>
            <!-- Pro Desktop -->
            <div class="border-2 border-blue-500 rounded-2xl p-8 flex flex-col relative">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-xs font-bold px-4 py-1 rounded-full">Populaire</div>
                <div class="text-4xl mb-4">⭐</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Pro Desktop</h3>
                <p class="text-4xl font-extrabold text-gray-900 mb-1">199$</p>
                <p class="text-sm text-gray-400 mb-6">licence perpétuelle</p>
                <p class="text-xs text-gray-400 mb-6 italic">+ cloud fallback optionnel</p>
                <ul class="space-y-3 text-sm text-gray-700 mb-8 flex-1">
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Pages illimitées en local</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> OCR + IA (correction intelligente)</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Line items + catégories</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Export CSV + QuickBooks</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Matching fournisseur</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Batch processing</li>
                </ul>
                <button type="button" onclick="document.getElementById('checkout-modal').classList.remove('hidden'); document.getElementById('checkout-overlay').classList.remove('hidden');"
                        class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition-colors shadow-lg shadow-blue-600/25">
                    💳 Acheter — Accès anticipé
                </button>
            </div>
            <!-- Cloud API -->
            <div class="border border-gray-200 rounded-2xl p-8 flex flex-col relative">
                <div class="text-4xl mb-4">☁️</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Cloud API</h3>
                <p class="text-4xl font-extrabold text-gray-900 mb-1">5$</p>
                <p class="text-sm text-gray-400 mb-2">à partir de</p>
                <p class="text-xs text-gray-400 mb-6 italic">forfaits prépayés · pas d'abonnement</p>
                <ul class="space-y-3 text-sm text-gray-700 mb-8 flex-1">
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Fallback auto si l'IA locale est trop lente</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> OCR + IA cloud performant</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Upload direct via API web</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> 5$ → 100 pages · 10$ → 250 pages · 20$ → 600 pages</li>
                    <li class="flex items-start gap-2"><span class="text-green-500 shrink-0">✅</span> Pages valides à vie</li>
                </ul>
                <a href="#beta" class="block text-center bg-blue-50 hover:bg-blue-100 text-blue-700 font-semibold py-3 rounded-xl transition-colors border border-blue-200">
                    ☁️ Recharger des pages
                </a>
            </div>
        </div>
        <p class="text-center text-sm text-gray-400 mt-8">
            💡 L'app desktop essaie d'abord en local. Si c'est trop lent ou la qualité insuffisante, elle envoie automatiquement dans le cloud — les pages sont déduites de votre forfait.
        </p>
    </div>
</section>

<!-- ===== BETA / EMAIL CAPTURE ===== -->
<section id="beta" class="py-20 sm:py-28 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-bold mb-2">Accès anticipé — Lancement dans 3 mois</h2>
        <p class="text-blue-200 mb-8">Inscrivez-vous pour obtenir :</p>
        <div class="grid sm:grid-cols-2 gap-4 text-left mb-10 max-w-md mx-auto">
            <div class="flex items-start gap-2">
                <span>🎯</span>
                <span class="text-sm text-blue-100">Accès à la beta fermée (places limitées)</span>
            </div>
            <div class="flex items-start gap-2">
                <span>💬</span>
                <span class="text-sm text-blue-100">Devenir bêta-testeur → licence gratuite à vie</span>
            </div>
            <div class="flex items-start gap-2">
                <span>📬</span>
                <span class="text-sm text-blue-100">Annonce du lancement officiel</span>
            </div>
            <div class="flex items-start gap-2">
                <span>🎟️</span>
                <span class="text-sm text-blue-100">Prix early adopter : 149$ au lieu de 199$</span>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500/20 border border-green-400/30 rounded-xl p-4 mb-8 text-green-100">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('subscribe') }}" class="space-y-4">
            @csrf
            <div>
                <input type="text" name="firstname" placeholder="Prénom" required
                       class="w-full px-4 py-3 rounded-xl text-gray-900 bg-white placeholder-gray-400 border-0 focus:ring-2 focus:ring-blue-300 outline-none">
                @error('firstname') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" required
                       class="w-full px-4 py-3 rounded-xl text-gray-900 bg-white placeholder-gray-400 border-0 focus:ring-2 focus:ring-blue-300 outline-none">
                @error('email') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <input type="text" name="profession" placeholder="Profession (comptable, freelance, PME…)"
                       class="w-full px-4 py-3 rounded-xl text-gray-900 bg-white placeholder-gray-400 border-0 focus:ring-2 focus:ring-blue-300 outline-none">
            </div>
            <button type="submit"
                    class="w-full bg-white hover:bg-blue-50 text-blue-700 font-bold py-3 px-6 rounded-xl transition-colors text-lg">
                📥 Je veux l'accès anticipé
            </button>
        </form>
    </div>
</section>

<!-- ===== ABOUT THE MAKER ===== -->
<section class="py-20 sm:py-28 bg-white">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">👨‍💻</div>
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Développé par Martin Fournier</h2>
        <p class="text-gray-500 text-sm mb-2">📍 Québec, Canada</p>
        <p class="text-gray-600 max-w-lg mx-auto mb-6">
            Développeur et entrepreneur. OCR Receipt est né d'une frustration personnelle — transformer des heures de saisie manuelle en 5 secondes de travail. Le produit est en développement, l'accès anticipé est ouvert.
        </p>
        <div class="flex items-center justify-center gap-4 text-sm">
            <a href="https://martinfournier.com" target="_blank" rel="noopener" class="text-blue-600 hover:text-blue-700 font-medium hover:underline">🔗 martinfournier.com</a>
            <span class="text-gray-300">·</span>
            <a href="https://github.com/martinfou" target="_blank" rel="noopener" class="text-blue-600 hover:text-blue-700 font-medium hover:underline">GitHub</a>
            <span class="text-gray-300">·</span>
            <a href="https://linkedin.com/in/martinfournier" target="_blank" rel="noopener" class="text-blue-600 hover:text-blue-700 font-medium hover:underline">LinkedIn</a>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section id="faq" class="py-20 sm:py-28 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 text-center mb-10">FAQ</h2>
        <div class="space-y-3">
            <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden cursor-pointer" onclick="this.classList.toggle('faq-open')">
                <div class="flex items-center justify-between p-4 sm:p-5">
                    <span class="font-semibold text-gray-900 text-sm sm:text-base pr-4">Mes données sont-elles envoyées sur un serveur ?</span>
                    <span class="text-blue-600 shrink-0 transition-transform duration-200">▼</span>
                </div>
                <div class="faq-answer px-4 sm:px-5">
                    <p class="text-gray-600 text-sm pb-4">Par défaut, oui — tout se fait en local. Si vous activez le cloud (quand l\'IA locale est trop lente), seules les pages que vous traitez sont envoyées de fa\u00e7on sécuritaire.</p>
                </div>
            </div>
            <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden cursor-pointer" onclick="this.classList.toggle('faq-open')">
                <div class="flex items-center justify-between p-4 sm:p-5">
                    <span class="font-semibold text-gray-900 text-sm sm:text-base pr-4">Puis-je essayer avant d'acheter ?</span>
                    <span class="text-blue-600 shrink-0 transition-transform duration-200">▼</span>
                </div>
                <div class="faq-answer px-4 sm:px-5">
                    <p class="text-gray-600 text-sm pb-4">Oui. La version gratuite vous donne 100 reçus/mois avec OCR simple. Pas de carte de crédit requise.</p>
                </div>
            </div>
            <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden cursor-pointer" onclick="this.classList.toggle('faq-open')">
                <div class="flex items-center justify-between p-4 sm:p-5">
                    <span class="font-semibold text-gray-900 text-sm sm:text-base pr-4">Quels formats de fichiers sont supportés ?</span>
                    <span class="text-blue-600 shrink-0 transition-transform duration-200">▼</span>
                </div>
                <div class="faq-answer px-4 sm:px-5">
                    <p class="text-gray-600 text-sm pb-4">PDF et images (PNG, JPG). Uniquement les factures et reçus.</p>
                </div>
            </div>
            <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden cursor-pointer" onclick="this.classList.toggle('faq-open')">
                <div class="flex items-center justify-between p-4 sm:p-5">
                    <span class="font-semibold text-gray-900 text-sm sm:text-base pr-4">Est-ce que ça marche avec mes fournisseurs ?</span>
                    <span class="text-blue-600 shrink-0 transition-transform duration-200">▼</span>
                </div>
                <div class="faq-answer px-4 sm:px-5">
                    <p class="text-gray-600 text-sm pb-4">Oui. L'IA s'adapte automatiquement. Si un fournisseur n'est pas reconnu, vous l'ajoutez une fois et il est mémorisé.</p>
                </div>
            </div>
            <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden cursor-pointer" onclick="this.classList.toggle('faq-open')">
                <div class="flex items-center justify-between p-4 sm:p-5">
                    <span class="font-semibold text-gray-900 text-sm sm:text-base pr-4">Puis-je exporter vers QuickBooks/Xero ?</span>
                    <span class="text-blue-600 shrink-0 transition-transform duration-200">▼</span>
                </div>
                <div class="faq-answer px-4 sm:px-5">
                    <p class="text-gray-600 text-sm pb-4">Export CSV pour l'instant. L'intégration directe est en développement.</p>
                </div>
            </div>
            <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden cursor-pointer" onclick="this.classList.toggle('faq-open')">
                <div class="flex items-center justify-between p-4 sm:p-5">
                    <span class="font-semibold text-gray-900 text-sm sm:text-base pr-4">Y a-t-il une version Mac/Linux ?</span>
                    <span class="text-blue-600 shrink-0 transition-transform duration-200">▼</span>
                </div>
                <div class="faq-answer px-4 sm:px-5">
                    <p class="text-gray-600 text-sm pb-4">Oui. OCR Receipt est une app PyQt6 multiplateforme. Windows, macOS et Linux sont supportés.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="bg-gray-900 text-gray-400 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-8">
            <a href="#" class="flex items-center gap-2 text-white font-bold text-lg">
                <span class="text-2xl">📄✓</span>
                <span>OCR Receipt</span>
            </a>
            <p class="text-sm text-gray-500 text-center">
                Développé par Martin Fournier — Québec, Canada
                <span class="block sm:inline">🇨🇦</span>
            </p>
        </div>
        <div class="flex items-center justify-center gap-4 text-sm mb-8">
            <a href="https://martinfournier.com" target="_blank" rel="noopener" class="hover:text-white transition-colors">Produit</a>
            <span class="text-gray-700">·</span>
            <a href="mailto:hello@martinfournier.com" class="hover:text-white transition-colors">Contact</a>
        </div>
        <p class="text-xs text-gray-600 text-center">
            © {{ date('Y') }} OCR Receipt. Tous droits réservés.
        </p>
    </div>
</footer>

<!-- ===== CHECKOUT MODAL ===== -->
<div id="checkout-overlay" class="modal-hidden modal-overlay" onclick="closeCheckout()"></div>
<div id="checkout-modal" class="modal-hidden modal-content">
    <div style="font-size:2.5rem;margin-bottom:.75rem">⭐</div>
    <h3 style="font-size:1.25rem;font-weight:700;color:#111827;margin-bottom:.25rem">Licence Pro Desktop</h3>
    <p style="color:#6b7280;font-size:.875rem;margin-bottom:1rem">199$ — licence perpétuelle · pages illimitées</p>

    @if(session('error'))
        <div style="background:#fef2f2;border:1px solid #fecaca;border-radius:.75rem;padding:.75rem;margin-bottom:1rem;font-size:.875rem;color:#b91c1c">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('license.checkout') }}" style="text-align:left">
        @csrf
        <label style="display:block;font-size:.875rem;font-weight:600;color:#374151;margin-bottom:.375rem">Votre email</label>
        <input type="email" name="email" required placeholder="vous@exemple.com"
               style="width:100%;padding:.75rem 1rem;border:1px solid #d1d5db;border-radius:.75rem;font-size:1rem;outline:none;box-sizing:border-box">
        <p style="font-size:.75rem;color:#6b7280;margin-top:.375rem;margin-bottom:1.25rem">La clé de licence sera envoyée à cette adresse et affichée après le paiement.</p>
        <button type="submit"
                style="width:100%;background:#2563eb;color:#fff;font-weight:700;padding:.875rem;border:none;border-radius:.75rem;font-size:1rem;cursor:pointer;transition:background .2s"
                onmouseover="this.style.background='#1d4ed8'" onmouseout="this.style.background='#2563eb'">
            💳 Payer 199$ par carte
        </button>
    </form>
    <p style="font-size:.75rem;color:#9ca3af;margin-top:.75rem">Paiement sécurisé via Stripe · Satisfait ou remboursé sous 30 jours</p>
    <button onclick="closeCheckout()" style="margin-top:1rem;background:none;border:none;color:#6b7280;font-size:.875rem;cursor:pointer;text-decoration:underline">Annuler</button>
</div>

<script>
    function closeCheckout() {
        document.getElementById('checkout-modal').classList.add('modal-hidden');
        document.getElementById('checkout-overlay').classList.add('modal-hidden');
    }
</script>

<script>
    // Segment tabs system
    (function() {
        const tabs = document.querySelectorAll('.segment-tab');
        const allSegments = document.querySelectorAll('.segment-content');

        function activateSegment(segmentKey) {
            // Update tabs
            tabs.forEach(t => {
                const isActive = t.dataset.segment === segmentKey;
                t.className = 'segment-tab whitespace-nowrap px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200' +
                    (isActive ? ' bg-blue-600 text-white shadow-sm' : ' bg-white text-gray-600 border border-gray-200 hover:border-blue-300 hover:text-blue-600');
            });

            // Show/hide content
            allSegments.forEach(el => {
                if (el.dataset.segment === segmentKey) {
                    el.classList.remove('hidden');
                } else {
                    el.classList.add('hidden');
                }
            });

            // Update URL hash
            if (segmentKey === 'all') {
                history.pushState(null, '', window.location.pathname);
            } else {
                history.pushState(null, '', '#' + segmentKey);
            }
        }

        // Tab click handlers
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                activateSegment(tab.dataset.segment);
                // Smooth scroll to top of hero
                document.querySelector('[data-segment="' + tab.dataset.segment + '"]').scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        // Load initial segment from URL hash
        const hash = window.location.hash.replace('#', '');
        if (hash && ['comptables', 'freelances', 'pme'].includes(hash)) {
            activateSegment(hash);
        }
    })();

    // FAQ accordion
    document.querySelectorAll('.faq-item').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelectorAll('.faq-item').forEach(other => {
                if (other !== this && other.classList.contains('faq-open')) {
                    other.classList.remove('faq-open');
                }
            });
        });
    });
</script>
</body>
</html>
