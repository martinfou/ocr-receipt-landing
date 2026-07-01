<template>
    <section id="how-it-works" class="py-24 lg:py-32 border-t border-border/40">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-wrap-balance text-[#e5e5e5]">
                    {{ $t('howItWorks.title') }}
                </h2>
                <div class="h-0.5 w-12 bg-brand/50 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Steps Grid -->
            <div class="grid md:grid-cols-3 gap-8 md:gap-6 lg:gap-8 relative">
                <!-- Step 1 -->
                <div class="card flex flex-col justify-between p-6 bg-surface-light/40 border border-border/60 hover:border-brand/35 transition-all duration-300 group">
                    <div>
                        <div class="text-xs font-mono text-brand/80 mb-4 select-none">
                            // STEP_01
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
                <div class="card flex flex-col justify-between p-6 bg-surface-light/40 border border-border/60 hover:border-brand/35 transition-all duration-300 group">
                    <div>
                        <div class="text-xs font-mono text-brand/80 mb-4 select-none">
                            // STEP_02
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
                <div class="card flex flex-col justify-between p-6 bg-surface-light/40 border border-border/60 hover:border-brand/35 transition-all duration-300 group">
                    <div>
                        <div class="text-xs font-mono text-brand/80 mb-4 select-none">
                            // STEP_03
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
    </section>
</template>

<script>
export default {
    name: 'HowItWorksSection'
};
</script>
