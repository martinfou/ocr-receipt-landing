<template>
    <section class="relative overflow-hidden py-32 lg:py-48 min-h-screen flex items-center justify-center">
        <!-- Background Video -->
        <video 
            class="absolute inset-0 w-full h-full object-cover z-0 opacity-40" 
            autoplay 
            loop 
            muted 
            playsinline 
            src="/bg-video.mp4">
        </video>
        
        <!-- Overlays -->
        <div class="absolute inset-0 bg-surface/80 z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(96,165,250,0.15),transparent_50%)] z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(96,165,250,0.1),transparent_50%)] z-0"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-border text-xs text-text-muted mb-8 bg-surface-light/50 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-green-500 inline-block shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                Offline-First · Local AI
            </div>

            <h1 class="text-5xl lg:text-7xl font-serif font-semibold leading-tight mb-6">
                Extract receipt data<br/>
                <span class="text-brand">without the cloud</span>
            </h1>

            <p class="text-lg lg:text-xl text-text-muted max-w-2xl mx-auto mb-10 leading-relaxed">
                OCR Receipt uses local AI to extract vendor, amount, date, and category from your PDF receipts — 
                <strong class="text-[#e5e5e5]">completely offline, no subscription, your data stays on your machine.</strong>
            </p>

            <div class="flex items-center justify-center gap-4">
                <button @click="$root.scrollToPricing" class="btn-brand text-base px-8 py-3 glow">
                    Get OCR Receipt
                </button>
                <a href="#features" class="btn-outline bg-surface/50 backdrop-blur-sm text-base px-8 py-3">
                    See Features
                </a>
            </div>

            <div class="mt-16 grid grid-cols-3 gap-8 max-w-lg mx-auto">
                <div class="text-center">
                    <div class="text-2xl font-bold text-brand">100%</div>
                    <div class="text-xs text-text-muted mt-1">Offline</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-brand">$0</div>
                    <div class="text-xs text-text-muted mt-1">Free to try</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-brand">3</div>
                    <div class="text-xs text-text-muted mt-1">Platforms</div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'HeroSection'
};
</script>
