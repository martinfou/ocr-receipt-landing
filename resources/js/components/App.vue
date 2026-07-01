<template>
    <div id="app" class="min-h-screen bg-surface text-[#e5e5e5]">
        <nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-border">
            <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
                <div class="flex items-center gap-2 cursor-pointer select-none" @click="scrollToTop">
                    <span class="text-lg font-serif font-semibold">OCR Receipt</span>
                </div>
                <div class="flex items-center gap-4">
                    <a href="#features" class="text-sm text-text-muted hover:text-brand transition-colors">Features</a>
                    <a href="#pricing" class="text-sm text-text-muted hover:text-brand transition-colors">Pricing</a>
                    <a href="#faq" class="text-sm text-text-muted hover:text-brand transition-colors">FAQ</a>
                    <button @click="scrollToPricing" class="btn-brand text-xs px-4 py-2">
                        Buy Now
                    </button>
                </div>
            </div>
        </nav>

        <main class="pt-16">
            <HeroSection />
            <FeaturesSection />
            <PricingSection />
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
import FeaturesSection from './FeaturesSection.vue';
import PricingSection from './PricingSection.vue';
import FaqSection from './FaqSection.vue';
import FooterSection from './FooterSection.vue';

export default {
    name: 'App',
    components: {
        HeroSection,
        FeaturesSection,
        PricingSection,
        FaqSection,
        FooterSection,
    },
    data() {
        return {
            showScrollTop: false
        };
    },
    mounted() {
        window.addEventListener('scroll', this.handleScroll);
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
        }
    }
};
</script>

