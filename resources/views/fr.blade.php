<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>

    <title>Logiciel OCR Reçus Québec — OCR Receipt | Extraction locale sans abonnement</title>
    <meta name="description" content="Logiciel OCR pour extraire les données de vos factures et reçus PDF. 100% hors ligne, IA locale, aucune donnée dans le cloud. Licence perpétuelle — pas d'abonnement. Windows, Mac et Linux.">
    <meta name="keywords" content="logiciel OCR reçus Québec, OCR facture, extraire données facture PDF, reconnaissance texte facture, alternative Hubdoc Québec">

    <meta property="og:title" content="Logiciel OCR Reçus Québec — OCR Receipt">
    <meta property="og:description" content="Extraction de reçus 100% hors ligne. IA locale. Pas d'abonnement. Conçu pour les CPA et PME du Québec.">
    <meta property="og:url" content="https://ocrreceipt.com/fr">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ocrreceipt.com/og-image.png">

    <link rel="canonical" href="https://ocrreceipt.com/fr">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-surface text-text font-sans antialiased overflow-x-hidden pt-16 relative">
    
    <!-- Background Image -->
    <div class="fixed inset-0 w-full h-full z-0 pointer-events-none">
        <img class="w-full h-full object-cover" src="/images/desk_bg.png" alt="Clean desk with greenery">
        <div class="absolute inset-0 bg-surface/90 backdrop-blur-sm transition-colors duration-200"></div>
    </div>

    <div id="static-app" class="relative z-10 flex flex-col min-h-screen">
        
        <!-- Navigation Header -->
        <nav class="fixed top-0 inset-x-0 z-50 bg-surface/85 backdrop-blur-md border-b border-border transition-colors duration-200">
            <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
                <a href="/fr" class="flex items-center gap-2 cursor-pointer select-none no-underline text-text">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-brand fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <polyline points="9 15 11 17 15 13"></polyline>
                    </svg>
                    <span class="font-serif font-bold text-base tracking-tight">OCR Receipt</span>
                </a>
                
                <!-- Desktop Navigation Menu -->
                <div class="hidden lg:flex items-center gap-6">
                    <div class="flex items-center gap-6">
                        <a href="#why" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Pourquoi</a>
                        <a href="/#how-it-works" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Comment ça marche</a>
                        <a href="/#features" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Fonctionnalités</a>
                        <a href="/fr/blog" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Blog</a>
                        <a href="#pricing" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Tarifs</a>
                        <a href="/#beta" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Contact</a>
                    </div>
                    
                    <!-- Language Switcher -->
                    <div class="flex items-center gap-1.5 px-2.5 py-1 rounded border border-border bg-surface-light text-[10px] font-mono select-none">
                        <a href="/" class="text-text-muted hover:text-text transition-colors no-underline">EN</a>
                        <span class="text-border">|</span>
                        <span class="text-brand-dark font-semibold">FR</span>
                    </div>

                    <!-- Theme Switcher -->
                    <button 
                        id="theme-toggle" 
                        class="w-7 h-7 rounded border border-border bg-surface-light hover:bg-surface flex items-center justify-center text-text-muted hover:text-text cursor-pointer transition-colors"
                        aria-label="Toggle Theme"
                    >
                        <svg id="theme-toggle-dark-icon" class="hidden w-4 h-4 stroke-current fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-4 h-4 stroke-current fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>

                    <a href="/#download" class="btn-brand text-[10px] font-mono uppercase tracking-wider px-4 py-2 shadow-sm transition-all no-underline">
                        Télécharger
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <button 
                    id="mobile-menu-btn" 
                    class="lg:hidden w-10 h-10 border border-border bg-surface-light rounded-lg flex items-center justify-center text-text-muted hover:text-text hover:border-brand/40 transition-all cursor-pointer"
                    aria-label="Open Menu"
                >
                    <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg id="close-icon" class="hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation Drawer -->
            <div 
                id="mobile-menu" 
                class="hidden lg:hidden absolute top-16 left-0 w-full bg-surface/98 backdrop-blur-lg border-b border-border shadow-lg z-40 overflow-hidden flex flex-col p-6 gap-6"
            >
                <div class="flex flex-col gap-4">
                    <a href="#why" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Pourquoi</a>
                    <a href="/#how-it-works" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Comment ça marche</a>
                    <a href="/#features" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Fonctionnalités</a>
                    <a href="/fr/blog" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Blog</a>
                    <a href="#pricing" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Tarifs</a>
                    <a href="/#beta" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Contact</a>
                </div>
                
                <div class="flex items-center justify-between py-2">
                    <div class="flex items-center gap-1.5 px-3 py-1.5 rounded border border-border bg-surface-light text-xs font-mono select-none">
                        <a href="/" class="text-text-muted hover:text-text transition-colors no-underline">EN</a>
                        <span class="text-border">|</span>
                        <span class="text-brand-dark font-semibold">FR</span>
                    </div>

                    <button 
                        id="theme-toggle-mobile" 
                        class="w-9 h-9 rounded border border-border bg-surface-light hover:bg-surface flex items-center justify-center text-text-muted hover:text-text cursor-pointer transition-colors"
                        aria-label="Toggle Theme"
                    >
                        <svg id="theme-toggle-dark-icon-mobile" class="hidden w-4.5 h-4.5 stroke-current fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                        <svg id="theme-toggle-light-icon-mobile" class="hidden w-4.5 h-4.5 stroke-current fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>
                </div>

                <a href="/#download" class="mobile-nav-link btn-brand text-xs font-mono uppercase tracking-wider py-3 text-center shadow-md transition-all no-underline">
                    Télécharger
                </a>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="py-20 px-6 max-w-4xl mx-auto text-center flex-1 flex flex-col justify-center">
            <div class="text-xs font-mono text-brand-dark uppercase tracking-wider mb-4 font-semibold">
                IA Locale · Zéro Cloud · Sans Abonnement
            </div>
            <h1 class="font-serif font-extrabold text-4xl md:text-5xl lg:text-6xl text-text leading-tight mb-6 text-wrap-balance">
                Logiciel OCR pour reçus <span class="text-brand">conçu au Québec</span>
            </h1>
            <p class="text-text-muted text-base md:text-lg max-w-2xl mx-auto leading-relaxed mb-8">
                Extrayez automatiquement le montant, la date et le fournisseur de vos factures et reçus PDF. 100% hors ligne, IA locale, aucune donnée dans le cloud. Licence perpétuelle — pas d'abonnement.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/#download" class="btn-brand px-8 py-3.5 shadow-md no-underline">
                    Télécharger gratuitement →
                </a>
            </div>
        </header>

        <!-- Why Section -->
        <section id="why" class="py-16 px-6 max-w-5xl mx-auto w-full">
            <h2 class="font-serif font-bold text-3xl md:text-4xl text-text text-center mb-12">
                Pourquoi les CPA et PME du Québec choisissent OCR Receipt
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="card shadow-sm hover:shadow-md transition-all duration-200">
                    <h3 class="font-serif font-bold text-lg text-brand mb-2">🔒 100% Confidentiel</h3>
                    <p class="text-text-muted text-sm leading-relaxed">Aucune donnée financière ne quitte votre ordinateur. Idéal pour les cabinets CPA sous ententes de confidentialité strictes.</p>
                </div>
                <!-- Card 2 -->
                <div class="card shadow-sm hover:shadow-md transition-all duration-200">
                    <h3 class="font-serif font-bold text-lg text-brand mb-2">💸 Pas d'abonnement</h3>
                    <p class="text-text-muted text-sm leading-relaxed">Licence perpétuelle. Vous payez une fois, vous l'utilisez à vie. Économisez de 84% à 100% comparé à Dext ou Expensify.</p>
                </div>
                <!-- Card 3 -->
                <div class="card shadow-sm hover:shadow-md transition-all duration-200">
                    <h3 class="font-serif font-bold text-lg text-brand mb-2">🖥️ Multiplateforme</h3>
                    <p class="text-text-muted text-sm leading-relaxed">Application native pour Windows, Mac et Linux. Fonctionne parfaitement hors ligne, sans connexion Internet requise.</p>
                </div>
                <!-- Card 4 -->
                <div class="card shadow-sm hover:shadow-md transition-all duration-200">
                    <h3 class="font-serif font-bold text-lg text-brand mb-2">🤖 IA Locale</h3>
                    <p class="text-text-muted text-sm leading-relaxed">DeepSeek et NuExtract tournent localement sur votre processeur. Extraction intelligente sans envoyer vos données à des tiers.</p>
                </div>
                <!-- Card 5 -->
                <div class="card shadow-sm hover:shadow-md transition-all duration-200">
                    <h3 class="font-serif font-bold text-lg text-brand mb-2">📊 Export QuickBooks / Xero</h3>
                    <p class="text-text-muted text-sm leading-relaxed">Format CSV pré-configuré importable dans QuickBooks Online en 3 clics. Également compatible avec Microsoft Excel et Sage.</p>
                </div>
                <!-- Card 6 -->
                <div class="card shadow-sm hover:shadow-md transition-all duration-200">
                    <h3 class="font-serif font-bold text-lg text-brand mb-2">🇨🇦 Développé au Québec</h3>
                    <p class="text-text-muted text-sm leading-relaxed">Support direct en français. Conçu spécifiquement pour répondre aux besoins des CPA et PME du Québec.</p>
                </div>
            </div>
        </section>

        <!-- Comparison Table Section -->
        <section class="py-16 px-6 max-w-4xl mx-auto w-full">
            <h2 class="font-serif font-bold text-3xl text-text text-center mb-8">
                OCR Receipt vs les solutions cloud
            </h2>
            
            <div class="overflow-x-auto border border-border rounded-lg bg-surface-light shadow-sm">
                <table class="w-full border-collapse font-sans text-sm">
                    <thead>
                        <tr class="bg-surface border-b border-border">
                            <th class="p-4 text-left font-mono text-xs font-semibold text-text-muted uppercase tracking-wider">Critère</th>
                            <th class="p-4 text-center font-mono text-xs font-semibold text-text-muted uppercase tracking-wider">Dext</th>
                            <th class="p-4 text-center font-mono text-xs font-semibold text-text-muted uppercase tracking-wider">Expensify</th>
                            <th class="p-4 text-center font-mono text-xs font-semibold text-brand uppercase tracking-wider">OCR Receipt</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border">
                        <tr>
                            <td class="p-4 font-medium text-text">Prix / an</td>
                            <td class="p-4 text-center text-[#c2410c] font-medium">~276 $</td>
                            <td class="p-4 text-center text-[#c2410c] font-medium">~60-216 $</td>
                            <td class="p-4 text-center text-brand-dark font-bold font-mono">149 $ unique</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-text">Hors ligne</td>
                            <td class="p-4 text-center text-text-muted">❌ Non</td>
                            <td class="p-4 text-center text-text-muted">❌ Non</td>
                            <td class="p-4 text-center text-brand-dark font-semibold">✅ 100% local</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-text">Souveraineté des données</td>
                            <td class="p-4 text-center text-text-muted">❌ Serveurs US</td>
                            <td class="p-4 text-center text-text-muted">❌ Serveurs US</td>
                            <td class="p-4 text-center text-brand-dark font-semibold">✅ Sur votre disque</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-text">Système Linux</td>
                            <td class="p-4 text-center text-text-muted">❌ Non</td>
                            <td class="p-4 text-center text-text-muted">❌ Non</td>
                            <td class="p-4 text-center text-brand-dark font-semibold">✅ Supporté</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-text">Support en français</td>
                            <td class="p-4 text-center text-text-muted">❌ Limité</td>
                            <td class="p-4 text-center text-text-muted">❌ Non</td>
                            <td class="p-4 text-center text-brand-dark font-semibold">✅ Localisé</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section id="pricing" class="py-16 px-6 text-center max-w-2xl mx-auto w-full">
            <h2 class="font-serif font-bold text-3xl text-text mb-3">Prêt à essayer ?</h2>
            <p class="text-text-muted text-base mb-8">
                Version Lite gratuite. Essai gratuit de 14 jours de la version Pro avec clé d'accès anticipé, sans carte de crédit.
            </p>
            <a href="/#pricing" class="btn-brand px-8 py-3.5 shadow-md no-underline">
                Obtenir ma licence d'essai →
            </a>
        </section>

        <!-- Footer Section -->
        <footer class="border-t border-border py-12 bg-surface transition-colors duration-200 mt-auto">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="text-sm text-text-muted">
                        © 2026 OCR Receipt. Tous droits réservés.
                    </div>
                    <div class="flex items-center gap-6 text-sm text-text-muted">
                        <span class="text-xs">Développé au Québec 🇨🇦</span>
                        <span class="text-border">|</span>
                        <a href="/#features" class="hover:text-brand transition-colors no-underline text-text-muted">Fonctionnalités</a>
                        <a href="https://github.com/martinfou" target="_blank" rel="noopener" class="hover:text-brand transition-colors no-underline text-text-muted">GitHub</a>
                        <a href="mailto:support@ocrreceipt.com" class="hover:text-brand transition-colors no-underline text-text-muted">Support</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Toggles and theme scripts -->
    <script>
        (function() {
            // Theme toggles
            const themeToggleBtn = document.getElementById('theme-toggle');
            const themeToggleBtnMobile = document.getElementById('theme-toggle-mobile');
            const darkIcon = document.getElementById('theme-toggle-dark-icon');
            const lightIcon = document.getElementById('theme-toggle-light-icon');
            const darkIconMobile = document.getElementById('theme-toggle-dark-icon-mobile');
            const lightIconMobile = document.getElementById('theme-toggle-light-icon-mobile');

            function updateIcons(isDark) {
                if (isDark) {
                    darkIcon?.classList.remove('hidden');
                    lightIcon?.classList.add('hidden');
                    darkIconMobile?.classList.remove('hidden');
                    lightIconMobile?.classList.add('hidden');
                } else {
                    darkIcon?.classList.add('hidden');
                    lightIcon?.classList.remove('hidden');
                    darkIconMobile?.classList.add('hidden');
                    lightIconMobile?.classList.remove('hidden');
                }
            }

            const initialIsDark = document.documentElement.classList.contains('dark');
            updateIcons(initialIsDark);

            function toggleTheme() {
                const currentTheme = localStorage.getItem('theme') || 'light';
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                localStorage.setItem('theme', newTheme);
                if (newTheme === 'dark') {
                    document.documentElement.classList.add('dark');
                    updateIcons(true);
                } else {
                    document.documentElement.classList.remove('dark');
                    updateIcons(false);
                }
            }

            themeToggleBtn?.addEventListener('click', toggleTheme);
            themeToggleBtnMobile?.addEventListener('click', toggleTheme);

            // Mobile menu
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            menuBtn?.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    hamburgerIcon?.classList.add('hidden');
                    closeIcon?.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon?.classList.remove('hidden');
                    closeIcon?.classList.add('hidden');
                }
            });

            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon?.classList.remove('hidden');
                    closeIcon?.classList.add('hidden');
                });
            });
        })();
    </script>
</body>
</html>
