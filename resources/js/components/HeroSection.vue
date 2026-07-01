<template>
    <section class="relative overflow-hidden py-24 lg:py-32 min-h-screen flex items-center justify-center">
        <!-- Background Video -->
        <video 
            class="absolute inset-0 w-full h-full object-cover z-0 opacity-40" 
            autoplay 
            loop 
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
                <div class="lg:col-span-5 text-left flex flex-col items-start bg-surface-light/35 backdrop-blur-lg p-8 lg:p-10 rounded-2xl border border-border/40 shadow-2xl">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-border text-xs text-text-muted mb-6 bg-surface-light/50 backdrop-blur-sm">
                        <span class="w-2 h-2 rounded-full bg-blue-500 inline-block shadow-[0_0_8px_rgba(59,130,246,0.6)] animate-pulse"></span>
                        Offline-First · Local AI
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-semibold leading-[1.1] mb-6 tracking-[-0.02em] text-wrap-balance">
                        Extract receipt data<br/>
                        <span class="text-brand">without the cloud</span>
                    </h1>

                    <p class="text-base sm:text-lg text-text-muted max-w-xl mb-8 leading-relaxed">
                        OCR Receipt uses local AI to extract vendor, amount, date, and category from your PDF receipts — 
                        <span class="text-[#e5e5e5] font-medium">completely offline, no subscription, your financial data stays on your machine.</span>
                    </p>

                    <div class="flex flex-wrap items-center gap-4 w-full sm:w-auto">
                        <button @click="$root.scrollToPricing" class="btn-brand text-base px-8 py-3 w-full sm:w-auto shadow-lg shadow-brand-dark/20 hover:shadow-brand/30 transition-all duration-300">
                            Get OCR Receipt
                        </button>
                        <a href="#features" class="btn-outline bg-surface/50 backdrop-blur-sm text-base px-8 py-3 w-full sm:w-auto text-center">
                            See Features
                        </a>
                    </div>
                </div>

                <!-- Right Column: Recapture OCR App Simulator -->
                <div class="lg:col-span-7 w-full max-w-2xl mx-auto lg:mx-0">
                    <div class="border border-border bg-[#161615]/95 backdrop-blur-md rounded-xl overflow-hidden shadow-2xl relative font-sans text-xs">
                        
                        <!-- Top Header bar (OS Window style) -->
                        <div class="flex items-center justify-between bg-surface/60 px-4 py-3 border-b border-border/60">
                            <div class="flex items-center gap-2">
                                <div class="flex items-center gap-1.5 mr-2">
                                    <span class="w-3 h-3 rounded-full bg-[#ff5f56]"></span>
                                    <span class="w-3 h-3 rounded-full bg-[#ffbd2e]"></span>
                                    <span class="w-3 h-3 rounded-full bg-[#27c93f]"></span>
                                </div>
                                <span class="font-mono text-[10px] text-text-muted uppercase tracking-wider">PDF Unique</span>
                            </div>
                            <div class="text-[10px] text-text-muted font-mono">
                                Process an individual receipt for data extraction and renaming
                            </div>
                        </div>

                        <!-- Progress Tracker -->
                        <div class="px-6 py-4 bg-surface/20 border-b border-border/40">
                            <div class="relative flex items-center justify-between">
                                <div class="absolute left-0 right-0 h-0.5 bg-border z-0"></div>
                                <div class="absolute left-0 h-0.5 bg-brand transition-all duration-500 z-0" :style="{ width: stepProgress + '%' }"></div>
                                
                                <div v-for="(step, idx) in steps" :key="step.label" class="relative z-10 flex flex-col items-center">
                                    <div class="w-5 h-5 rounded-full flex items-center justify-center text-[9px] font-mono transition-all duration-300"
                                         :class="[
                                             idx <= currentStep ? 'bg-brand text-surface font-semibold shadow-[0_0_8px_rgba(96,165,250,0.6)]' : 'bg-surface border border-border text-text-muted'
                                         ]">
                                        {{ idx + 1 }}
                                    </div>
                                    <span class="text-[8px] font-mono uppercase mt-1 tracking-wider" 
                                          :class="idx <= currentStep ? 'text-brand font-medium' : 'text-text-muted'">
                                        {{ step.label }}
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
                                        <span>Document Fields</span>
                                        <span class="text-[#27c93f] font-mono text-[8px]" v-if="currentStep >= 2">✓ Match Confirmed</span>
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
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider">File Naming Preview</div>
                                    <div class="font-mono text-[9px] text-[#60A5FA] break-all h-6 overflow-hidden flex items-center">
                                        <span class="transition-opacity duration-300" :class="currentStep >= 3 ? 'opacity-100' : 'opacity-0'">
                                            bolt_facture_2026-06-19_plomberie10-30_1609.02.pdf
                                        </span>
                                    </div>
                                    <div class="text-[8px] text-[#27c93f] font-mono transition-opacity duration-300" :class="currentStep >= 3 ? 'opacity-100' : 'opacity-0'">
                                        ✓ Valid local filename.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Control & Status bar -->
                        <div class="bg-surface/40 px-4 py-3 border-t border-border/40 flex items-center justify-between gap-4">
                            <div class="text-[10px] font-mono text-text-muted">
                                Status: <span :class="steps[currentStep].statusColor" class="font-semibold">{{ steps[currentStep].statusText }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="btn-outline text-[9px] font-mono px-3.5 py-1.5 h-7">Discard</button>
                                <button class="btn-brand text-[9px] font-mono px-3.5 py-1.5 h-7 flex items-center gap-1 bg-[#27c93f] hover:bg-[#22a835]"
                                        :class="{'opacity-50 cursor-not-allowed': currentStep < 4}">
                                    Rename &amp; Save
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
                { label: 'Load File', statusText: 'Ready', statusColor: 'text-text-muted' },
                { label: 'OCR Scan', statusText: 'Extracting text local OCR...', statusColor: 'text-[#60A5FA]' },
                { label: 'Extract', statusText: 'DeepSeek-LLM analyzing fields...', statusColor: 'text-[#60A5FA]' },
                { label: 'Rename', statusText: 'Formatting file template name...', statusColor: 'text-[#60A5FA]' },
                { label: 'Save', statusText: 'Ready to Rename & Save locally.', statusColor: 'text-[#27c93f]' }
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


