<template>
    <div id="app" class="min-h-screen bg-surface text-[#e5e5e5]">
        <nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-border">
            <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="text-lg font-serif font-semibold">OCR Receipt</span>
                </div>
                <div class="flex items-center gap-4">
                    <a href="#features" class="text-sm text-text-muted hover:text-amber transition-colors">Features</a>
                    <a href="#pricing" class="text-sm text-text-muted hover:text-amber transition-colors">Pricing</a>
                    <a href="#faq" class="text-sm text-text-muted hover:text-amber transition-colors">FAQ</a>
                    <button @click="scrollToPricing" class="btn-amber text-xs px-4 py-2">
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
    methods: {
        scrollToPricing() {
            document.getElementById('pricing')?.scrollIntoView({ behavior: 'smooth' });
        }
    }
};
</script>
