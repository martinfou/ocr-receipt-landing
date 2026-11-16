<template>
    <section id="faq" class="bg-lp-surface" aria-labelledby="faq-title">
        <div class="w-full max-w-[880px] mx-auto px-6 box-border py-24 flex flex-col gap-8">
            <h2 id="faq-title" class="lp-headline-section-sm text-ink">{{ $t('faq.title') }}</h2>
            <div class="flex flex-col border-t border-border-strong">
                <details v-for="(item, i) in $t('faq.items')" :key="i" class="border-b border-border-strong" :open="i === 0">
                    <summary class="flex justify-between items-center gap-4 py-[22px] text-[19px] font-bold leading-[1.35] text-ink">
                        {{ item.q }}
                        <span class="lp-faq-plus text-[28px] font-normal leading-none text-brand-ink" aria-hidden="true">+</span>
                    </summary>
                    <!-- Answers are static, trusted locale strings (one contains the support mailto link). -->
                    <p class="mb-[22px] lp-body lp-measure text-ink-body" v-html="item.a"></p>
                </details>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'FaqSection'
};
</script>
