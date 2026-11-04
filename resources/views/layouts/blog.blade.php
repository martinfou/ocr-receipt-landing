<!DOCTYPE html>
<html lang="en">
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

    <title>@yield('title', 'OCR Receipt Blog — Receipt OCR, Privacy, and Productivity')</title>
    <meta name="description" content="@yield('meta_description', 'Articles about receipt OCR, data privacy, local AI, and accounting productivity.')">
    
    @yield('og_meta')

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

    <div id="static-app" class="relative z-10">
        <!-- Navigation Header -->
        <nav class="fixed top-0 inset-x-0 z-50 bg-surface/85 backdrop-blur-md border-b border-border transition-colors duration-200">
            <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
                <a href="/" class="flex items-center gap-2 cursor-pointer select-none no-underline text-text">
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
                        @if(($locale ?? 'en') === 'fr')
                            <a href="/fr#why" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Pourquoi</a>
                            <a href="/#how-it-works" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Comment ça marche</a>
                            <a href="/#features" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Fonctionnalités</a>
                            <a href="/fr/blog" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Blog</a>
                            <a href="/fr#pricing" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Tarifs</a>
                            <a href="/#beta" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Contact</a>
                        @else
                            <a href="/#problem" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Why</a>
                            <a href="/#how-it-works" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">How It Works</a>
                            <a href="/#features" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Features</a>
                            <a href="/blog" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Blog</a>
                            <a href="/#pricing" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Pricing</a>
                            <a href="/#beta" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors no-underline">Contact</a>
                        @endif
                    </div>
                    
                    <!-- Language Switcher -->
                    <div class="flex items-center gap-1.5 px-2.5 py-1 rounded border border-border bg-surface-light text-[10px] font-mono select-none">
                        <a href="{{ $translation_url_fr ?? '/fr/blog' }}" class="{{ ($locale ?? 'en') === 'fr' ? 'text-brand-dark font-semibold' : 'text-text-muted hover:text-text' }} transition-colors no-underline">FR</a>
                        <span class="text-border">|</span>
                        <a href="{{ $translation_url_en ?? '/blog' }}" class="{{ ($locale ?? 'en') === 'en' ? 'text-brand-dark font-semibold' : 'text-text-muted hover:text-text' }} transition-colors no-underline">EN</a>
                    </div>

                    <!-- Theme Switcher -->
                    <button 
                        id="theme-toggle" 
                        class="w-7 h-7 rounded border border-border bg-surface-light hover:bg-surface flex items-center justify-center text-text-muted hover:text-text cursor-pointer transition-colors"
                        aria-label="Toggle Theme"
                    >
                        <!-- Sun Icon (visible in dark theme) -->
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
                        <!-- Moon Icon (visible in light theme) -->
                        <svg id="theme-toggle-light-icon" class="hidden w-4 h-4 stroke-current fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>

                    <a href="/#download" class="btn-brand text-[10px] font-mono uppercase tracking-wider px-4 py-2 shadow-sm transition-all no-underline">
                        {{ ($locale ?? 'en') === 'fr' ? 'Télécharger' : 'Download' }}
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
                    @if(($locale ?? 'en') === 'fr')
                        <a href="/fr#why" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Pourquoi</a>
                        <a href="/#how-it-works" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Comment ça marche</a>
                        <a href="/#features" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Fonctionnalités</a>
                        <a href="/fr/blog" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Blog</a>
                        <a href="/fr#pricing" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Tarifs</a>
                        <a href="/#beta" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Contact</a>
                    @else
                        <a href="/#problem" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Why</a>
                        <a href="/#how-it-works" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">How It Works</a>
                        <a href="/#features" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Features</a>
                        <a href="/blog" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Blog</a>
                        <a href="/#pricing" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Pricing</a>
                        <a href="/#beta" class="mobile-nav-link text-sm font-serif font-medium text-text hover:text-brand transition-colors py-2 border-b border-border/40 no-underline">Contact</a>
                    @endif
                </div>
                
                <div class="flex items-center justify-between py-2">
                    <!-- Language Selector inside Drawer -->
                    <div class="flex items-center gap-1.5 px-3 py-1.5 rounded border border-border bg-surface-light text-xs font-mono select-none">
                        <a href="{{ $translation_url_fr ?? '/fr/blog' }}" class="{{ ($locale ?? 'en') === 'fr' ? 'text-brand-dark font-semibold' : 'text-text-muted hover:text-text' }} transition-colors no-underline">FR</a>
                        <span class="text-border">|</span>
                        <a href="{{ $translation_url_en ?? '/blog' }}" class="{{ ($locale ?? 'en') === 'en' ? 'text-brand-dark font-semibold' : 'text-text-muted hover:text-text' }} transition-colors no-underline">EN</a>
                    </div>

                    <!-- Theme Toggle inside Drawer -->
                    <button 
                        id="theme-toggle-mobile" 
                        class="w-9 h-9 rounded border border-border bg-surface-light hover:bg-surface flex items-center justify-center text-text-muted hover:text-text cursor-pointer transition-colors"
                        aria-label="Toggle Theme"
                    >
                        <!-- Sun Icon -->
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
                        <!-- Moon Icon -->
                        <svg id="theme-toggle-light-icon-mobile" class="hidden w-4.5 h-4.5 stroke-current fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>
                </div>

                <a href="/#download" class="mobile-nav-link btn-brand text-xs font-mono uppercase tracking-wider py-3 text-center shadow-md transition-all no-underline">
                    {{ ($locale ?? 'en') === 'fr' ? 'Télécharger' : 'Download' }}
                </a>
            </div>
        </nav>

        <!-- Main Content Area -->
        <main class="py-12">
            @yield('content')
        </main>

        <!-- Footer Section -->
        <footer class="border-t border-border py-12 bg-surface transition-colors duration-200">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="text-sm text-text-muted">
                        {{ ($locale ?? 'en') === 'fr' ? '© 2026 OCR Receipt. Tous droits réservés.' : '© 2026 OCR Receipt. All rights reserved.' }}
                    </div>
                    <div class="flex items-center gap-6 text-sm text-text-muted">
                        <span class="text-xs">{{ ($locale ?? 'en') === 'fr' ? 'Développé localement 💻' : 'Developed locally 💻' }}</span>
                        <span class="text-border">|</span>
                        @if(($locale ?? 'en') === 'fr')
                            <a href="/fr#why" class="hover:text-brand transition-colors no-underline text-text-muted">Fonctionnalités</a>
                            <a href="https://github.com/martinfou" target="_blank" rel="noopener" class="hover:text-brand transition-colors no-underline text-text-muted">GitHub</a>
                            <a href="mailto:support@ocrreceipt.com" class="hover:text-brand transition-colors no-underline text-text-muted">Support</a>
                        @else
                            <a href="/#features" class="hover:text-brand transition-colors no-underline text-text-muted">Features</a>
                            <a href="https://github.com/martinfou" target="_blank" rel="noopener" class="hover:text-brand transition-colors no-underline text-text-muted">GitHub</a>
                            <a href="/#beta" class="hover:text-brand transition-colors no-underline text-text-muted">Contact</a>
                        @endif
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Core Layout Scripts -->
    <script>
        (function() {
            // Theme toggling elements
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

            // Sync initial state on icons
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

            // Mobile menu toggling
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

            // Close mobile menu on clicking links
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
