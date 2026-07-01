<template>
    <section class="relative overflow-hidden py-24 lg:py-32 min-h-screen flex items-center justify-center">
        <!-- Background Video -->
        <video 
            class="absolute inset-0 w-full h-full object-cover z-0 opacity-50" 
            autoplay 
            loop 
            muted 
            playsinline 
            :src="'/bg-video.mp4'">
        </video>
        
        <!-- Overlays -->
        <div class="absolute inset-0 bg-surface/70 z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(96,165,250,0.1),transparent_50%)] z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(96,165,250,0.05),transparent_50%)] z-0"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 w-full">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: Copy & CTAs -->
                <div class="lg:col-span-6 text-left flex flex-col items-start">
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

                <!-- Right Column: Interactive Local OCR Simulator -->
                <div class="lg:col-span-6 w-full max-w-xl mx-auto lg:mx-0">
                    <div class="border border-border bg-surface-light/70 backdrop-blur-md rounded-xl overflow-hidden p-6 shadow-xl relative">
                        <!-- Top status bar -->
                        <div class="flex items-center justify-between border-b border-border/60 pb-3 mb-4">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#3e3e3a]"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#3e3e3a]"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#3e3e3a]"></span>
                            </div>
                            <div class="text-[10px] font-mono text-text-muted tracking-wider uppercase">
                                LOCAL SCAN ENGINE
                            </div>
                            <div class="text-[10px] font-mono text-[#3B82F6] font-medium bg-[#3B82F6]/10 px-2 py-0.5 rounded">
                                v1.0.0
                            </div>
                        </div>

                        <!-- Simulator Panels -->
                        <div class="grid sm:grid-cols-2 gap-4">
                            
                            <!-- Left: Mock Receipt with Scan Line -->
                            <div class="relative bg-surface/60 border border-border/80 rounded-lg p-4 h-[190px] overflow-hidden flex flex-col justify-between">
                                <!-- Glowing Laser Beam -->
                                <div v-if="scanning" class="absolute left-0 right-0 h-[2px] bg-brand animate-scan-laser shadow-[0_0_8px_#3B82F6] z-10"></div>
                                
                                <!-- Mock Receipt Content -->
                                <div class="space-y-2 opacity-80">
                                    <div class="h-3 w-16 bg-text-muted/30 rounded mx-auto mb-3"></div>
                                    <div class="h-1.5 w-full bg-text-muted/20 rounded"></div>
                                    <div class="h-1.5 w-3/4 bg-text-muted/20 rounded"></div>
                                    <div class="h-1.5 w-5/6 bg-text-muted/20 rounded"></div>
                                    <div class="border-t border-dashed border-border/50 my-2"></div>
                                    <div class="h-2 w-12 bg-text-muted/20 rounded"></div>
                                    <div class="h-1.5 w-1/2 bg-text-muted/10 rounded"></div>
                                </div>

                                <div class="flex items-center justify-between border-t border-border/40 pt-2 text-[9px] font-mono text-text-muted">
                                    <span>RECEIPT.PDF</span>
                                    <span>100% LOCAL</span>
                                </div>
                            </div>

                            <!-- Right: Terminal Output Logs -->
                            <div class="bg-surface/85 border border-border/80 rounded-lg p-3.5 h-[190px] font-mono text-[10px] text-text-muted overflow-y-auto flex flex-col justify-between">
                                <div class="space-y-1.5 leading-relaxed">
                                    <div v-for="(log, idx) in logs" :key="idx" :class="log.color">
                                        {{ log.text }}
                                    </div>
                                </div>
                                <div v-if="success" class="mt-2 pt-2 border-t border-border/40 text-brand">
                                    <div class="font-semibold text-[11px] mb-1">Extracted Fields:</div>
                                    <div class="space-y-0.5">
                                        <div><span class="text-text-muted">Vendor:</span> Cafe Nero</div>
                                        <div><span class="text-text-muted">Total:</span> $12.50</div>
                                        <div><span class="text-text-muted">Date:</span> 2026-06-30</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scan Trigger Button -->
                        <div class="mt-4 flex items-center justify-between gap-4">
                            <div class="text-[10px] text-text-muted">
                                Click scan to test offline extraction pipeline.
                            </div>
                            <button 
                                @click="runOcrSequence" 
                                :disabled="running"
                                class="btn-brand text-xs px-4 py-2 font-mono flex items-center gap-1.5 shrink-0">
                                <svg v-if="running" class="animate-spin h-3.5 w-3.5 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                {{ running ? 'SCANNING...' : 'RUN OCR SCAN' }}
                            </button>
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
            running: false,
            scanning: false,
            success: false,
            logs: [
                { text: '[ready] local AI pipeline idle', color: 'text-text-muted' }
            ],
            intervalId: null
        };
    },
    mounted() {
        // Run once on load, then auto-cycle
        this.runOcrSequence();
        this.intervalId = setInterval(() => {
            if (!this.running) {
                this.runOcrSequence();
            }
        }, 12000);
    },
    beforeUnmount() {
        if (this.intervalId) {
            clearInterval(this.intervalId);
        }
    },
    methods: {
        runOcrSequence() {
            if (this.running) return;
            this.running = true;
            this.scanning = true;
            this.success = false;
            this.logs = [
                { text: '> init local_ai_engine', color: 'text-[#60A5FA]' }
            ];

            setTimeout(() => {
                this.logs.push({ text: '[ok] model deepseek-v2 loaded', color: 'text-green-500' });
            }, 600);

            setTimeout(() => {
                this.logs.push({ text: '> ocr: parsing document layout', color: 'text-[#60A5FA]' });
            }, 1500);

            setTimeout(() => {
                this.logs.push({ text: '> llm: structuring entities', color: 'text-[#60A5FA]' });
            }, 2500);

            setTimeout(() => {
                this.scanning = false;
                this.success = true;
                this.logs.push({ text: '[success] data extracted safely', color: 'text-green-500' });
                this.running = false;
            }, 3600);
        }
    }
};
</script>

