<template>
    <section id="problem" class="py-24 lg:py-32 bg-surface border-t border-border relative z-20 -mt-12 lg:-mt-16 rounded-t-[32px] shadow-[0_-30px_60px_rgba(0,0,0,0.03)]">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: The manual chore steps timeline -->
                <div class="lg:col-span-6 space-y-8 relative">
                    <div class="space-y-3">
                        <div class="text-[10px] font-mono text-red-400 uppercase tracking-widest flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                            The Inefficient Workflow
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-serif font-semibold tracking-[-0.01em] text-text">
                            {{ $t('problem.title') }}
                        </h2>
                    </div>
                    
                    <!-- Vertical Timeline Line -->
                    <div class="relative pl-8 border-l border-border ml-4 space-y-6 mt-8">
                        <div class="relative group p-5 rounded-xl border border-border bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/30 hover:bg-red-500/[0.01]">
                            <div class="absolute -left-[43px] top-6 w-5.5 h-5.5 rounded-full bg-surface border border-red-500/50 flex items-center justify-center shadow-[0_0_8px_rgba(239,68,68,0.2)] text-red-400 select-none transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 stroke-red-500 fill-none" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                            <p class="text-xs text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item1') }}
                            </p>
                        </div>

                        <div class="relative group p-5 rounded-xl border border-border bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/30 hover:bg-red-500/[0.01]">
                            <div class="absolute -left-[43px] top-6 w-5.5 h-5.5 rounded-full bg-surface border border-red-500/50 flex items-center justify-center shadow-[0_0_8px_rgba(239,68,68,0.2)] text-red-400 select-none transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 stroke-red-500 fill-none" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                            <p class="text-xs text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item2') }}
                            </p>
                        </div>

                        <div class="relative group p-5 rounded-xl border border-border bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/30 hover:bg-red-500/[0.01]">
                            <div class="absolute -left-[43px] top-6 w-5.5 h-5.5 rounded-full bg-surface border border-red-500/50 flex items-center justify-center shadow-[0_0_8px_rgba(239,68,68,0.2)] text-red-400 select-none transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 stroke-red-500 fill-none" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                            <p class="text-xs text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item3') }}
                            </p>
                        </div>

                        <div class="relative group p-5 rounded-xl border border-border bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/30 hover:bg-red-500/[0.01]">
                            <div class="absolute -left-[43px] top-6 w-5.5 h-5.5 rounded-full bg-surface border border-red-500/50 flex items-center justify-center shadow-[0_0_8px_rgba(239,68,68,0.2)] text-red-400 select-none transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 stroke-red-500 fill-none" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                            <p class="text-xs text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item4') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: The Cost Sheet & Sliders Calculator -->
                <div class="lg:col-span-6">
                    <div class="border border-border bg-surface-light p-8 rounded-2xl shadow-2xl relative overflow-hidden flex flex-col justify-between min-h-[460px] transition-all duration-300 hover:border-border-hover">
                        <!-- Warning glow backdrop -->
                        <div class="absolute -top-24 -right-24 w-48 h-48 bg-red-500/[0.02] rounded-full blur-3xl pointer-events-none"></div>
                        
                        <div class="space-y-6">
                            <div class="text-[9px] font-mono text-red-400 uppercase tracking-wider border-b border-border pb-2 flex justify-between items-center">
                                <span>{{ $t('problem.sheetTitle') }}</span>
                                <span>{{ $t('problem.sheetSubtitle') }}</span>
                            </div>
                            
                            <!-- Dynamic Sliders -->
                            <div class="space-y-4 bg-surface/40 border border-border rounded-xl p-4 font-mono">
                                <!-- Slider 1: Monthly Receipts Count -->
                                <div class="space-y-1.5">
                                    <div class="flex justify-between text-[10px] text-text-muted">
                                        <span>{{ $t('problem.monthLabel') }}</span>
                                        <span class="text-brand font-bold">{{ receiptsPerMonth }}</span>
                                    </div>
                                    <input 
                                        type="range" 
                                        v-model.number="receiptsPerMonth" 
                                        min="10" 
                                        max="500" 
                                        step="10"
                                        class="w-full accent-brand bg-surface border border-border/30 h-1.5 rounded-lg appearance-none cursor-pointer outline-none"
                                    />
                                </div>

                                <!-- Slider 2: Average Time Wasted per Receipt -->
                                <div class="space-y-1.5">
                                    <div class="flex justify-between text-[10px] text-text-muted">
                                        <span>{{ $t('problem.timePerReceiptLabel') }}</span>
                                        <span class="text-brand font-bold">{{ timePerReceipt }} min</span>
                                    </div>
                                    <input 
                                        type="range" 
                                        v-model.number="timePerReceipt" 
                                        min="2" 
                                        max="5" 
                                        step="0.5"
                                        class="w-full accent-brand bg-surface border border-border/30 h-1.5 rounded-lg appearance-none cursor-pointer outline-none"
                                    />
                                </div>

                                <!-- Slider 3: Hourly Value -->
                                <div class="space-y-1.5">
                                    <div class="flex justify-between text-[10px] text-text-muted">
                                        <span>{{ $t('problem.hourlyLabel') }}</span>
                                        <span class="text-brand font-bold">${{ hourlyRate }}/hr</span>
                                    </div>
                                    <input 
                                        type="range" 
                                        v-model.number="hourlyRate" 
                                        min="20" 
                                        max="150" 
                                        step="5"
                                        class="w-full accent-brand bg-surface border border-border/30 h-1.5 rounded-lg appearance-none cursor-pointer outline-none"
                                    />
                                </div>
                            </div>

                            <!-- Live Audited Loss Metrics -->
                            <div class="space-y-4 font-mono">
                                <div class="flex items-center justify-between border-b border-border/30 pb-3">
                                    <span class="text-xs text-text-muted">{{ $t('problem.rateLabel') }}</span>
                                    <span class="text-xs text-text font-semibold">≈ {{ timePerReceipt }} min</span>
                                </div>
                                <div class="flex items-center justify-between border-b border-border/30 pb-3">
                                    <span class="text-xs text-text-muted">{{ $t('problem.wastedHoursMonthLabel') }}</span>
                                    <span class="text-xs text-text font-semibold">≈ {{ formatNumber(monthlyHours) }} {{ $lang.lang === 'fr' ? 'Heures' : 'Hours' }}</span>
                                </div>
                                <div class="flex items-center justify-between border-b border-border/30 pb-3">
                                    <span class="text-xs text-text-muted">{{ $t('problem.yearLabel') }}</span>
                                    <span class="text-sm font-bold text-red-400">{{ formatNumber(yearlyHours) }} {{ $lang.lang === 'fr' ? 'Heures / An' : 'Hours / Year' }}</span>
                                </div>
                                <div class="flex items-center justify-between pb-1">
                                    <span class="text-xs text-text-muted">{{ $t('problem.financialLossLabel') }}</span>
                                    <span class="text-sm font-bold text-red-500 animate-pulse">${{ formatNumber(yearlyFinancialLoss) }} / {{ $lang.lang === 'fr' ? 'An' : 'Year' }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-border pt-6 mt-6">
                            <p class="text-sm text-text font-serif italic leading-relaxed text-center text-wrap-balance">
                                <span v-if="$lang.lang === 'fr'">
                                    "{{ formatNumber(yearlyHours) }} heures et ${{ formatNumber(yearlyFinancialLoss) }} de perte annuelle gâchés à jamais."
                                </span>
                                <span v-else>
                                    "{{ formatNumber(yearlyHours) }} hours and ${{ formatNumber(yearlyFinancialLoss) }} of yearly value wasted forever."
                                </span>
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
    name: 'ProblemSection',
    data() {
        return {
            receiptsPerMonth: 100,
            timePerReceipt: 3, // minutes (2 to 5 minutes)
            hourlyRate: 50 // $/hour
        };
    },
    computed: {
        monthlyHours() {
            return (this.receiptsPerMonth * this.timePerReceipt) / 60;
        },
        yearlyHours() {
            return this.monthlyHours * 12;
        },
        yearlyFinancialLoss() {
            return this.yearlyHours * this.hourlyRate;
        }
    },
    methods: {
        formatNumber(num) {
            return num.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 1 });
        }
    }
};
</script>
