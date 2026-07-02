<template>
    <div id="app" class="min-h-screen bg-surface text-text">
        <nav class="fixed top-0 w-full z-50 bg-surface/85 backdrop-blur-md border-b border-border">
            <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
                <div class="flex items-center gap-2 cursor-pointer select-none" @click="scrollToTop">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-brand fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <polyline points="9 15 11 17 15 13"></polyline>
                    </svg>
                    <span class="font-serif font-bold text-base text-text tracking-tight">OCR Receipt</span>
                </div>
                <div class="flex items-center gap-6">
                    <a href="#problem" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors">{{ $t('nav.problem') }}</a>
                    <a href="#how-it-works" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors">{{ $t('nav.workflow') }}</a>
                    <a href="#features" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors">{{ $t('nav.features') }}</a>
                    <a href="#pricing" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors">{{ $t('nav.pricing') }}</a>
                    <a href="#beta" class="text-[10px] font-mono uppercase tracking-wider text-text-muted hover:text-text transition-colors">{{ $t('nav.contact') }}</a>
                    
                    <!-- Language Switcher -->
                    <div class="flex items-center gap-1.5 px-2.5 py-1 rounded border border-border bg-surface-light text-[10px] font-mono select-none">
                        <button 
                            @click="$setLang('fr')" 
                            :class="[$lang.lang === 'fr' ? 'text-brand-dark font-semibold' : 'text-text-muted hover:text-text']"
                            class="transition-colors cursor-pointer"
                        >FR</button>
                        <span class="text-border">|</span>
                        <button 
                            @click="$setLang('en')" 
                            :class="[$lang.lang === 'en' ? 'text-brand-dark font-semibold' : 'text-text-muted hover:text-text']"
                            class="transition-colors cursor-pointer"
                        >EN</button>
                    </div>

                    <!-- Theme Switcher -->
                    <button 
                        @click="toggleTheme" 
                        class="w-7 h-7 rounded border border-border bg-surface-light hover:bg-surface flex items-center justify-center text-text-muted hover:text-text cursor-pointer transition-colors"
                        :aria-label="theme === 'dark' ? 'Switch to Light Theme' : 'Switch to Dark Theme'"
                    >
                        <svg v-if="theme === 'dark'" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        <svg v-else xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>

                    <a href="#download" class="btn-brand text-[10px] font-mono uppercase tracking-wider px-4 py-2 shadow-sm transition-all cursor-pointer">
                        {{ $t('nav.cta') }}
                    </a>
                </div>
            </div>
        </nav>

        <main class="pt-16">
            <HeroSection :active-tab="activeTab" @tab-changed="activeTab = $event" />
            <ProblemSection />
            <HowItWorksSection />
            <FeaturesSection @select-feature-tab="handleSelectFeatureTab" />
            <PricingSection />
            <BetaSection />
            <DownloadsSection />
            <FaqSection />
            <FooterSection />
        </main>

        <!-- Floating Scroll to Top Button -->
        <button 
            @click="scrollToTop" 
            :class="[showScrollTop ? 'opacity-100 translate-y-0 pointer-events-auto' : 'opacity-0 translate-y-4 pointer-events-none']"
            class="fixed bottom-6 right-6 z-50 w-10 h-10 rounded-full border border-border bg-surface-light/80 text-text-muted hover:text-brand hover:border-brand/40 backdrop-blur-md flex items-center justify-center transition-all duration-300 shadow-lg cursor-pointer"
            aria-label="Back to top">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
        </button>
    </div>
</template>

<script>
import HeroSection from './HeroSection.vue';
import ProblemSection from './ProblemSection.vue';
import HowItWorksSection from './HowItWorksSection.vue';
import FeaturesSection from './FeaturesSection.vue';
import PricingSection from './PricingSection.vue';
import DownloadsSection from './DownloadsSection.vue';
import BetaSection from './BetaSection.vue';
import FaqSection from './FaqSection.vue';
import FooterSection from './FooterSection.vue';

export default {
    name: 'App',
    components: {
        HeroSection,
        ProblemSection,
        HowItWorksSection,
        FeaturesSection,
        PricingSection,
        DownloadsSection,
        BetaSection,
        FaqSection,
        FooterSection,
    },
    data() {
        return {
            showScrollTop: false,
            activeTab: 0,
            theme: 'light'
        };
    },
    mounted() {
        window.addEventListener('scroll', this.handleScroll);
        const savedTheme = localStorage.getItem('theme') || 'light';
        this.theme = savedTheme;
        this.applyTheme();
    },
    beforeUnmount() {
        window.removeEventListener('scroll', this.handleScroll);
    },
    methods: {
        scrollToPricing() {
            document.getElementById('pricing')?.scrollIntoView({ behavior: 'smooth' });
        },
        scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
        handleScroll() {
            this.showScrollTop = window.scrollY > 400;
        },
        handleSelectFeatureTab(index) {
            this.activeTab = index;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
        toggleTheme() {
            this.theme = this.theme === 'light' ? 'dark' : 'light';
            localStorage.setItem('theme', this.theme);
            this.applyTheme();
        },
        applyTheme() {
            if (this.theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }
};
</script>
