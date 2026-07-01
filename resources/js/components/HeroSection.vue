<template>
    <section class="relative overflow-hidden py-24 lg:py-32 min-h-screen flex items-center justify-center">
        <!-- Background Video -->
        <video 
            class="absolute inset-0 w-full h-full object-cover z-0 opacity-40" 
            autoplay 
            muted 
            playsinline 
            :src="'/bg-video.mp4'">
        </video>
        
        <!-- Overlays -->
        <div class="absolute inset-0 bg-surface/75 z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(96,165,250,0.1),transparent_50%)] z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(96,165,250,0.05),transparent_50%)] z-0"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 w-full">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: Copy & CTAs -->
                <div class="lg:col-span-6 text-left flex flex-col items-start bg-[#161615]/80 border border-border/60 p-8 lg:p-10 rounded-2xl backdrop-blur-md shadow-2xl relative z-10 transition-all duration-300 hover:border-border/80">
                    <div class="w-12 h-12 rounded-xl bg-brand/10 border border-brand/20 flex items-center justify-center mb-6 select-none shadow-[0_0_15px_rgba(96,165,250,0.1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-brand fill-none" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1-2-1z"></path>
                            <path d="M16 8H8"></path>
                            <path d="M16 12H8"></path>
                            <path d="M16 16H8"></path>
                        </svg>
                    </div>
                    
                    <div class="text-[11px] font-mono text-brand mb-4 tracking-wider uppercase" v-html="$t('hero.subtitle')">
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-semibold leading-[1.15] mb-6 tracking-[-0.02em] text-wrap-balance text-[#e5e5e5]" v-html="$t('hero.title')">
                    </h1>

                    <div class="flex flex-wrap items-center gap-4 w-full sm:w-auto mb-10">
                        <a href="#pricing" class="btn-brand text-sm px-7 py-3.5 w-full sm:w-auto shadow-lg shadow-brand-dark/20 hover:shadow-brand/35 transition-all duration-300 text-center cursor-pointer">
                            {{ $t('hero.cta1') }}
                        </a>
                    </div>

                    <div class="border-t border-border/30 pt-6 w-full max-w-lg">
                        <p class="text-xs text-text-muted leading-relaxed mb-4">
                            {{ $t('hero.designedFor') }}
                        </p>
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-border/80 text-[10px] text-text-muted bg-surface-light/50 font-mono select-none">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500 inline-block shadow-[0_0_8px_rgba(59,130,246,0.6)] animate-pulse"></span>
                            {{ $t('hero.badges') }}
                        </div>
                    </div>
                </div>

                <!-- Right Column: Recapture OCR App Simulator -->
                <div class="lg:col-span-6 w-full max-w-2xl mx-auto lg:mx-0 relative z-10">
                    <div class="border border-border bg-[#161615]/95 backdrop-blur-md rounded-xl overflow-hidden shadow-2xl relative font-sans text-xs">
                        
                        <!-- Top Header bar (OS Window style) -->
                        <div class="flex items-center justify-between bg-surface/60 px-4 py-3 border-b border-border/60">
                            <div class="flex items-center gap-2">
                                <div class="flex items-center gap-1.5 mr-2">
                                    <span class="w-3 h-3 rounded-full bg-[#ff5f56]"></span>
                                    <span class="w-3 h-3 rounded-full bg-[#ffbd2e]"></span>
                                    <span class="w-3 h-3 rounded-full bg-[#27c93f]"></span>
                                </div>
                                <span class="font-mono text-[10px] text-text-muted uppercase tracking-wider">{{ $t('hero.simulator.title') }}</span>
                            </div>
                            <div class="text-[10px] text-text-muted font-mono">
                                {{ $t('hero.simulator.subtitle') }}
                            </div>
                        </div>

                        <!-- Progress Tracker -->
                        <div class="px-6 py-4 bg-surface/20 border-b border-border/40">
                            <div class="relative flex items-center justify-between">
                                <div class="absolute left-0 right-0 h-0.5 bg-border z-0"></div>
                                <div class="absolute left-0 h-0.5 bg-brand transition-all duration-500 z-0" :style="{ width: stepProgress + '%' }"></div>
                                
                                <div v-for="(step, idx) in steps" :key="step.key" class="relative z-10 flex flex-col items-center">
                                    <div class="w-5 h-5 rounded-full flex items-center justify-center text-[9px] font-mono transition-all duration-300"
                                         :class="[
                                             idx <= currentStep ? 'bg-brand text-surface font-semibold shadow-[0_0_8px_rgba(96,165,250,0.6)]' : 'bg-surface border border-border text-text-muted'
                                         ]">
                                        {{ idx + 1 }}
                                    </div>
                                    <span class="text-[8px] font-mono uppercase mt-1 tracking-wider" 
                                          :class="idx <= currentStep ? 'text-brand font-medium' : 'text-text-muted'">
                                        {{ $t('hero.simulator.steps.' + step.key) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Main Interface Body -->
                        <div class="grid sm:grid-cols-12 gap-5 p-5">
                            
                            <!-- Left 5 Cols: Mock PDF Document Viewer -->
                            <div class="sm:col-span-5 relative bg-[#0a0a0a] border border-border/80 rounded-lg p-3 h-[250px] overflow-hidden flex flex-col justify-between shadow-inner">
                                <!-- Glowing Scan Laser Beam -->
                                <div v-show="currentStep === 1 || currentStep === 2" class="absolute left-0 right-0 h-[2px] bg-brand animate-scan-laser shadow-[0_0_12px_#3B82F6] z-20"></div>
                                
                                <!-- Mock Document Content (French Invoice style) -->
                                <div class="space-y-2 opacity-90 relative z-10">
                                    <div class="flex items-center justify-between mb-3 border-b border-border/40 pb-2">
                                        <div class="w-8 h-8 rounded-full border border-border/80 flex items-center justify-center bg-surface-light/40">
                                            <span class="text-[8px] font-serif font-bold text-brand">10/30</span>
                                        </div>
                                        <div class="text-[10px] font-bold tracking-widest text-[#e5e5e5]">FACTURE</div>
                                    </div>
                                    <div class="h-2 w-16 bg-text-muted/30 rounded"></div>
                                    <div class="h-1 w-full bg-text-muted/20 rounded"></div>
                                    <div class="h-1 w-5/6 bg-text-muted/20 rounded"></div>
                                    
                                    <!-- Invoice Table representation -->
                                    <div class="mt-4 space-y-1.5">
                                        <div class="flex justify-between border-t border-border/40 pt-2 text-[8px] text-text-muted">
                                            <span>DESC</span>
                                            <span>AMOUNT</span>
                                        </div>
                                        <div class="h-1 w-full bg-text-muted/15 rounded"></div>
                                        <div class="h-1 w-5/6 bg-text-muted/15 rounded"></div>
                                        <div class="h-1 w-11/12 bg-text-muted/15 rounded"></div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between border-t border-border/40 pt-2 text-[8px] font-mono text-text-muted relative z-10 bg-[#0a0a0a]/80">
                                    <span>PLOMBERIE.PDF</span>
                                    <span>PAGE 1 OF 1</span>
                                </div>
                            </div>

                            <!-- Right 7 Cols: Fields Extraction Form & Naming Preview -->
                            <div class="sm:col-span-7 flex flex-col justify-between space-y-4">
                                
                                <!-- Document Fields -->
                                <div class="space-y-2.5">
                                    <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider border-b border-border/30 pb-1.5 mb-1.5 flex items-center justify-between">
                                        <span>{{ $t('hero.simulator.fields') }}</span>
                                        <span class="text-[#27c93f] font-mono text-[8px]" v-if="currentStep >= 2">{{ $t('hero.simulator.matchConfirmed') }}</span>
                                    </div>
                                    
                                    <!-- Vendor Field -->
                                    <div class="flex items-center gap-2">
                                        <span class="w-16 text-text-muted text-[10px]">Vendor:</span>
                                        <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden">
                                            <span class="font-mono text-[10px] text-[#e5e5e5] transition-opacity duration-300" :class="currentStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                plomberie10-30
                                            </span>
                                            <span v-if="currentStep >= 2" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                95% Match
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Date Field -->
                                    <div class="flex items-center gap-2">
                                        <span class="w-16 text-text-muted text-[10px]">Date:</span>
                                        <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden">
                                            <span class="font-mono text-[10px] text-[#e5e5e5] transition-opacity duration-300" :class="currentStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                2026-06-19
                                            </span>
                                            <span v-if="currentStep >= 2" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                95% Match
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Total Field -->
                                    <div class="flex items-center gap-2">
                                        <span class="w-16 text-text-muted text-[10px]">Total ($):</span>
                                        <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden">
                                            <span class="font-mono text-[10px] text-[#e5e5e5] transition-opacity duration-300" :class="currentStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                1609.02
                                            </span>
                                            <span v-if="currentStep >= 2" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                95% Match
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- File Naming Preview -->
                                <div class="bg-surface/60 border border-border/50 rounded-lg p-3 space-y-1">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider">{{ $t('hero.simulator.preview') }}</div>
                                    <div class="font-mono text-[9px] text-[#60A5FA] break-all h-6 overflow-hidden flex items-center">
                                        <span class="transition-opacity duration-300" :class="currentStep >= 3 ? 'opacity-100' : 'opacity-0'">
                                            bolt_facture_2026-06-19_plomberie10-30_1609.02.pdf
                                        </span>
                                    </div>
                                    <div class="text-[8px] text-[#27c93f] font-mono transition-opacity duration-300" :class="currentStep >= 3 ? 'opacity-100' : 'opacity-0'">
                                        {{ $t('hero.simulator.validFilename') }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Control & Status bar -->
                        <div class="bg-surface/40 px-4 py-3 border-t border-border/40 flex items-center justify-between gap-4">
                            <div class="text-[10px] font-mono text-text-muted">
                                Status: <span :class="steps[currentStep].statusColor" class="font-semibold">{{ $t('hero.simulator.status.' + steps[currentStep].statusKey) }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="btn-outline text-[9px] font-mono px-3.5 py-1.5 h-7">{{ $t('hero.simulator.discard') }}</button>
                                <button class="btn-brand text-[9px] font-mono px-3.5 py-1.5 h-7 flex items-center gap-1 bg-[#27c93f] hover:bg-[#22a835]"
                                        :class="{'opacity-50 cursor-not-allowed': currentStep < 4}">
                                    {{ $t('hero.simulator.save') }}
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'HeroSection',
    data() {
        return {
            currentStep: 0,
            steps: [
                { key: 'load', statusKey: 'ready', statusColor: 'text-text-muted' },
                { key: 'ocr', statusKey: 'ocr', statusColor: 'text-[#60A5FA]' },
                { key: 'extract', statusKey: 'extract', statusColor: 'text-[#60A5FA]' },
                { key: 'rename', statusKey: 'rename', statusColor: 'text-[#60A5FA]' },
                { key: 'saveStep', statusKey: 'save', statusColor: 'text-[#27c93f]' }
            ],
            intervalId: null
        };
    },
    computed: {
        stepProgress() {
            return (this.currentStep / (this.steps.length - 1)) * 100;
        }
    },
    mounted() {
        this.runSimulation();
        this.intervalId = setInterval(this.runSimulation, 10000);
    },
    beforeUnmount() {
        if (this.intervalId) {
            clearInterval(this.intervalId);
        }
    },
    methods: {
        runSimulation() {
            this.currentStep = 0;

            setTimeout(() => {
                this.currentStep = 1; // OCR Scan
            }, 1500);

            setTimeout(() => {
                this.currentStep = 2; // Extract
            }, 3500);

            setTimeout(() => {
                this.currentStep = 3; // Rename
            }, 5500);

            setTimeout(() => {
                this.currentStep = 4; // Save
            }, 7500);
        }
    }
};
</script>
