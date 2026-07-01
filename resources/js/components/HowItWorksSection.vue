<template>
    <section id="how-it-works" class="py-24 lg:py-32 border-t border-border/40 bg-[#0a0a0a] relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-3 flex items-center justify-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
                    Workflow Optimization
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-[#e5e5e5]">
                    {{ $t('howItWorks.title') }}
                </h2>
                <div class="h-0.5 w-10 bg-brand/50 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Steps Grid with timeline connectors -->
            <div class="relative">
                <!-- Desktop timeline connector line -->
                <div class="absolute top-10 left-[12%] right-[12%] h-[1px] bg-border/60 hidden md:block z-0"></div>

                <div class="grid md:grid-cols-3 gap-8 md:gap-6 lg:gap-8 relative z-10">
                    <!-- Step 1 -->
                    <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border/60 hover:border-brand/40 transition-all duration-300 group rounded-xl">
                        <div>
                            <!-- Numbered Bubble -->
                            <div class="w-8 h-8 rounded-full border border-border bg-[#0a0a0a] flex items-center justify-center text-xs font-mono font-bold text-brand mb-5 shadow-[0_0_12px_rgba(96,165,250,0.1)] group-hover:border-brand transition-colors">
                                01
                            </div>
                            <h3 class="font-serif font-semibold text-lg mb-3 text-[#e5e5e5]">
                                {{ $t('howItWorks.step1.title') }}
                            </h3>
                            <p class="text-sm text-text-muted leading-relaxed group-hover:text-[#e5e5e5] transition-colors duration-200">
                                {{ $t('howItWorks.step1.desc') }}
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border/60 hover:border-brand/40 transition-all duration-300 group rounded-xl">
                        <div>
                            <div class="w-8 h-8 rounded-full border border-border bg-[#0a0a0a] flex items-center justify-center text-xs font-mono font-bold text-brand mb-5 shadow-[0_0_12px_rgba(96,165,250,0.1)] group-hover:border-brand transition-colors">
                                02
                            </div>
                            <h3 class="font-serif font-semibold text-lg mb-3 text-[#e5e5e5]">
                                {{ $t('howItWorks.step2.title') }}
                            </h3>
                            <p class="text-sm text-text-muted leading-relaxed group-hover:text-[#e5e5e5] transition-colors duration-200">
                                {{ $t('howItWorks.step2.desc') }}
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border/60 hover:border-brand/40 transition-all duration-300 group rounded-xl">
                        <div>
                            <div class="w-8 h-8 rounded-full border border-border bg-[#0a0a0a] flex items-center justify-center text-xs font-mono font-bold text-brand mb-5 shadow-[0_0_12px_rgba(96,165,250,0.1)] group-hover:border-brand transition-colors">
                                03
                            </div>
                            <h3 class="font-serif font-semibold text-lg mb-3 text-[#e5e5e5]">
                                {{ $t('howItWorks.step3.title') }}
                            </h3>
                            <p class="text-sm text-text-muted leading-relaxed group-hover:text-[#e5e5e5] transition-colors duration-200">
                                {{ $t('howItWorks.step3.desc') }}
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
