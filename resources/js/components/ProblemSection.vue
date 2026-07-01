<template>
    <section id="problem" class="py-24 lg:py-32 bg-[#0a0a0a] border-t border-border/40 relative">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: The manual chore steps timeline -->
                <div class="lg:col-span-7 space-y-8 relative">
                    <div class="space-y-3">
                        <div class="text-[10px] font-mono text-red-400 uppercase tracking-widest flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                            The Inefficient Workflow
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-serif font-semibold tracking-[-0.01em] text-[#e5e5e5]">
                            {{ $t('problem.title') }}
                        </h2>
                    </div>
                    
                    <!-- Vertical Timeline Line -->
                    <div class="relative pl-8 border-l border-border/60 ml-4 space-y-6 mt-8">
                        <div class="relative group p-5 rounded-xl border border-border/50 bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/30 hover:bg-red-500/[0.01]">
                            <!-- Timeline Dot Indicator -->
                            <div class="absolute -left-[41px] top-7 w-4.5 h-4.5 rounded-full bg-surface border-2 border-red-500 flex items-center justify-center text-[10px] font-mono font-bold text-red-500 shadow-[0_0_8px_rgba(239,68,68,0.3)]">
                                1
                            </div>
                            <p class="text-xs text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item1') }}
                            </p>
                        </div>

                        <div class="relative group p-5 rounded-xl border border-border/50 bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/30 hover:bg-red-500/[0.01]">
                            <div class="absolute -left-[41px] top-7 w-4.5 h-4.5 rounded-full bg-surface border-2 border-red-500 flex items-center justify-center text-[10px] font-mono font-bold text-red-500 shadow-[0_0_8px_rgba(239,68,68,0.3)]">
                                2
                            </div>
                            <p class="text-xs text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item2') }}
                            </p>
                        </div>

                        <div class="relative group p-5 rounded-xl border border-border/50 bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/30 hover:bg-red-500/[0.01]">
                            <div class="absolute -left-[41px] top-7 w-4.5 h-4.5 rounded-full bg-surface border-2 border-red-500 flex items-center justify-center text-[10px] font-mono font-bold text-red-500 shadow-[0_0_8px_rgba(239,68,68,0.3)]">
                                3
                            </div>
                            <p class="text-xs text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item3') }}
                            </p>
                        </div>

                        <div class="relative group p-5 rounded-xl border border-border/50 bg-surface-light/40 backdrop-blur-sm transition-all duration-300 hover:border-red-500/30 hover:bg-red-500/[0.01]">
                            <div class="absolute -left-[41px] top-7 w-4.5 h-4.5 rounded-full bg-surface border-2 border-red-500 flex items-center justify-center text-[10px] font-mono font-bold text-red-500 shadow-[0_0_8px_rgba(239,68,68,0.3)]">
                                4
                            </div>
                            <p class="text-xs text-text-muted leading-relaxed group-hover:text-text transition-colors duration-200">
                                {{ $t('problem.item4') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: The Cost Sheet -->
                <div class="lg:col-span-5">
                    <div class="border border-border bg-[#161615] p-8 rounded-2xl shadow-2xl relative overflow-hidden flex flex-col justify-between min-h-[350px] transition-all duration-300 hover:border-border-hover">
                        <!-- Warning glow backdrop -->
                        <div class="absolute -top-24 -right-24 w-48 h-48 bg-red-500/[0.02] rounded-full blur-3xl pointer-events-none"></div>
                        
                        <div class="space-y-6">
                            <div class="text-[9px] font-mono text-red-400 uppercase tracking-wider border-b border-border/40 pb-2 flex justify-between items-center">
                                <span>YEARLY TIME LOSS SHEET</span>
                                <span>UNRECOVERED TIME</span>
                            </div>
                            
                            <div class="space-y-4 font-mono">
                                <div class="flex items-center justify-between border-b border-border/30 pb-3">
                                    <span class="text-xs text-text-muted">1 Invoice / Receipt</span>
                                    <span class="text-xs text-[#e5e5e5] font-semibold">&approx; 5 Min</span>
                                </div>
                                <div class="flex items-center justify-between border-b border-border/30 pb-3">
                                    <span class="text-xs text-text-muted">50 Receipts / Month</span>
                                    <span class="text-xs text-[#e5e5e5] font-semibold">&approx; 4 Hours</span>
                                </div>
                                <div class="flex items-center justify-between pb-1">
                                    <span class="text-xs text-text-muted">Total Yearly Loss</span>
                                    <span class="text-sm font-bold text-red-400">48 Hours / Year</span>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-border/40 pt-6 mt-6">
                            <p class="text-sm text-[#e5e5e5] font-serif italic leading-relaxed text-center text-wrap-balance">
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
