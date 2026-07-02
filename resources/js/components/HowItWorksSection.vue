<template>
    <section id="how-it-works" class="py-24 lg:py-32 border-t border-border bg-surface relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-3 flex items-center justify-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
                    {{ $t('howItWorks.subtitle') }}
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-text">
                    {{ $t('howItWorks.title') }}
                </h2>
                <div class="h-0.5 w-10 bg-brand/50 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Steps Grid with timeline connectors -->
            <div class="relative">
                <!-- Desktop timeline connector line -->
                <div class="absolute top-[88px] left-[10%] right-[10%] h-[1px] bg-border/40 hidden md:block z-0"></div>

                <div class="grid md:grid-cols-4 gap-8 md:gap-6 lg:gap-8 relative z-10">
                    <!-- Step 1 -->
                    <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border hover:border-brand/40 transition-all duration-300 group rounded-xl">
                        <div>
                            <!-- Numbered Bubble & Line connector match -->
                            <div class="flex justify-between items-center mb-5">
                                <div class="w-8 h-8 rounded-full border border-border bg-surface flex items-center justify-center text-xs font-mono font-bold text-brand shadow-[0_0_12px_rgba(96,165,250,0.1)] group-hover:border-brand transition-colors">
                                    01
                                </div>
                            </div>

                            <!-- Animated Visual for Step 1 -->
                            <div class="h-28 w-full bg-surface/50 border border-border rounded-lg flex items-center justify-center mb-5 relative overflow-hidden group-hover:border-brand/20 transition-all">
                                <div class="flex flex-col items-center gap-1.5 transition-transform duration-300 group-hover:scale-105">
                                    <!-- File Icon and Arrow -->
                                    <div class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 stroke-text-muted fill-none group-hover:stroke-brand/80 transition-colors" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                        </svg>
                                        <div class="absolute -top-3 left-3.5 transform translate-y-0 group-hover:translate-y-1.5 transition-transform duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 stroke-brand fill-none" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="12 5 12 19 19 12 12 19 5 12"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="text-[9px] font-mono text-text-muted tracking-wider group-hover:text-brand/80 transition-colors">DROP FILE</span>
                                </div>
                            </div>

                            <h3 class="font-serif font-semibold text-lg mb-3 text-text">
                                {{ $t('howItWorks.step1.title') }}
                            </h3>
                            <p class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('howItWorks.step1.desc') }}
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border hover:border-brand/40 transition-all duration-300 group rounded-xl">
                        <div>
                            <div class="flex justify-between items-center mb-5">
                                <div class="w-8 h-8 rounded-full border border-border bg-surface flex items-center justify-center text-xs font-mono font-bold text-brand shadow-[0_0_12px_rgba(96,165,250,0.1)] group-hover:border-brand transition-colors">
                                    02
                                </div>
                            </div>

                            <!-- Animated Visual for Step 2 -->
                            <div class="h-28 w-full bg-surface/50 border border-border rounded-lg flex items-center justify-center mb-5 relative overflow-hidden group-hover:border-brand/20 transition-all">
                                <div class="relative w-12 h-16 border border-border rounded flex flex-col justify-between p-2.5 bg-surface-light/40 group-hover:border-brand/30 transition-colors">
                                    <!-- Mock Receipt Lines -->
                                    <div class="h-1 bg-border/80 rounded w-2/3"></div>
                                    <div class="h-1 bg-border/80 rounded w-1/2"></div>
                                    <div class="h-1 bg-brand/40 rounded w-3/4"></div>
                                    
                                    <!-- Laser scanner line -->
                                    <div class="absolute left-0 right-0 h-[1.5px] bg-brand shadow-[0_0_8px_rgba(96,165,250,0.8)] opacity-0 group-hover:opacity-100 transition-opacity duration-300 animate-scanner"></div>
                                </div>
                            </div>

                            <h3 class="font-serif font-semibold text-lg mb-3 text-text">
                                {{ $t('howItWorks.step2.title') }}
                            </h3>
                            <p class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('howItWorks.step2.desc') }}
                            </p>
                        </div>
                    </div>

                    <!-- Step 3: Advanced Search (New) -->
                    <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border hover:border-brand/40 transition-all duration-300 group rounded-xl">
                        <div>
                            <div class="flex justify-between items-center mb-5">
                                <div class="w-8 h-8 rounded-full border border-border bg-surface flex items-center justify-center text-xs font-mono font-bold text-brand shadow-[0_0_12px_rgba(96,165,250,0.1)] group-hover:border-brand transition-colors">
                                    03
                                </div>
                            </div>

                            <!-- Animated Visual for Step 3 -->
                            <div class="h-28 w-full bg-surface/50 border border-border rounded-lg flex flex-col items-center justify-center p-3 mb-5 relative overflow-hidden group-hover:border-brand/20 transition-all">
                                <div class="w-full max-w-[130px] bg-surface-light border border-border rounded px-2 py-1 shadow-sm flex items-center gap-1.5 mb-2.5 group-hover:border-brand/30 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 stroke-brand fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                    <span class="font-mono text-[8px] text-brand-dark animate-pulse">ACME</span>
                                </div>
                                <div class="w-full max-w-[130px] bg-brand-dark/10 border border-[#27c93f]/30 rounded p-1.5 flex justify-between items-center font-mono text-[7px] text-green-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    <span>ACME Copier</span>
                                    <span>$120.00</span>
                                </div>
                            </div>

                            <h3 class="font-serif font-semibold text-lg mb-3 text-text">
                                {{ $t('howItWorks.step3.title') }}
                            </h3>
                            <p class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('howItWorks.step3.desc') }}
                            </p>
                        </div>
                    </div>

                    <!-- Step 4: Reports (Formerly Step 3) -->
                    <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border hover:border-brand/40 transition-all duration-300 group rounded-xl">
                        <div>
                            <div class="flex justify-between items-center mb-5">
                                <div class="w-8 h-8 rounded-full border border-border bg-surface flex items-center justify-center text-xs font-mono font-bold text-brand shadow-[0_0_12px_rgba(96,165,250,0.1)] group-hover:border-brand transition-colors">
                                    04
                                </div>
                            </div>

                            <!-- Animated Visual for Step 4 -->
                            <div class="h-28 w-full bg-surface/50 border border-border rounded-lg flex items-center justify-center mb-5 relative overflow-hidden group-hover:border-brand/20 transition-all">
                                <div class="flex items-center gap-2">
                                    <!-- Spreadsheet representation -->
                                    <div class="w-14 h-12 border border-border rounded p-1.5 flex flex-col justify-between bg-surface-light/40 group-hover:border-brand/30 transition-colors">
                                        <div class="grid grid-cols-3 gap-1">
                                            <div class="h-1 bg-border/80 rounded"></div>
                                            <div class="h-1 bg-border/80 rounded col-span-2"></div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-1">
                                            <div class="h-1 bg-brand/30 rounded col-span-2"></div>
                                            <div class="h-1 bg-brand/50 rounded"></div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-1">
                                            <div class="h-1 bg-border/80 rounded"></div>
                                            <div class="h-1 bg-border/80 rounded col-span-2"></div>
                                        </div>
                                    </div>
                                    <!-- Download Arrow -->
                                    <div class="transform translate-y-0 group-hover:-translate-y-1 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-brand fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <h3 class="font-serif font-semibold text-lg mb-3 text-text">
                                {{ $t('howItWorks.step4.title') }}
                            </h3>
                            <p class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('howItWorks.step4.desc') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'HowItWorksSection'
};
</script>

<style scoped>
@keyframes sweep {
    0%, 100% {
        top: 10%;
        opacity: 0.2;
    }
    50% {
        top: 85%;
        opacity: 1;
    }
}
.animate-scanner {
    animation: sweep 2.5s ease-in-out infinite;
}
</style>
