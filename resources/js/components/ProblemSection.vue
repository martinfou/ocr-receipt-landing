<template>
    <section id="problem" class="py-24 lg:py-32 bg-surface-light/10 border-t border-border/40">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: The manual chore steps -->
                <div class="lg:col-span-7 space-y-6">
                    <h2 class="text-3xl lg:text-4xl font-serif font-semibold tracking-[-0.01em] text-wrap-balance text-[#e5e5e5]">
                        {{ $t('problem.title') }}
                    </h2>
                    
                    <div class="space-y-4 mt-8">
                        <div class="flex items-start gap-4 p-5 rounded-xl border border-border bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/20 hover:bg-red-500/[0.01] group">
                            <span class="text-xl shrink-0 mt-0.5 select-none transition-transform duration-300 group-hover:scale-110">❌</span>
                            <span class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item1') }}
                            </span>
                        </div>
                        <div class="flex items-start gap-4 p-5 rounded-xl border border-border bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/20 hover:bg-red-500/[0.01] group">
                            <span class="text-xl shrink-0 mt-0.5 select-none transition-transform duration-300 group-hover:scale-110">❌</span>
                            <span class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item2') }}
                            </span>
                        </div>
                        <div class="flex items-start gap-4 p-5 rounded-xl border border-border bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/20 hover:bg-red-500/[0.01] group">
                            <span class="text-xl shrink-0 mt-0.5 select-none transition-transform duration-300 group-hover:scale-110">❌</span>
                            <span class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item3') }}
                            </span>
                        </div>
                        <div class="flex items-start gap-4 p-5 rounded-xl border border-border bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/20 hover:bg-red-500/[0.01] group">
                            <span class="text-xl shrink-0 mt-0.5 select-none transition-transform duration-300 group-hover:scale-110">❌</span>
                            <span class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item4') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: The cost calculator / summary -->
                <div class="lg:col-span-5">
                    <div class="border border-border/80 bg-[#161615]/95 p-8 rounded-2xl shadow-2xl relative overflow-hidden flex flex-col justify-between min-h-[340px]">
                        <!-- Subtle red/orange warning glow in the background -->
                        <div class="absolute -top-24 -right-24 w-48 h-48 bg-red-500/5 rounded-full blur-3xl pointer-events-none"></div>
                        
                        <div class="space-y-6">
                            <div class="text-[10px] font-mono text-red-400 uppercase tracking-widest flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                                Cost of Manual Processing
                            </div>
                            
                            <div class="space-y-5 font-mono">
                                <div class="flex items-center justify-between border-b border-border/40 pb-3">
                                    <span class="text-xs text-text-muted">1 Invoice / Receipt</span>
                                    <span class="text-sm font-semibold text-[#e5e5e5]">&approx; 5 min</span>
                                </div>
                                <div class="flex items-center justify-between border-b border-border/40 pb-3">
                                    <span class="text-xs text-text-muted">50 Receipts / Month</span>
                                    <span class="text-sm font-semibold text-[#e5e5e5]">&approx; 4 Hours</span>
                                </div>
                                <div class="flex items-center justify-between pb-1">
                                    <span class="text-xs text-text-muted">Yearly Waste</span>
                                    <span class="text-base font-bold text-red-400">48 Hours / Year</span>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-border/40 pt-6 mt-6">
                            <p class="text-sm text-[#e5e5e5] font-serif italic leading-relaxed text-center">
                                "{{ $t('problem.summary3') }}"
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
    name: 'ProblemSection'
};
</script>
