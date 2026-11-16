<template>
    <section id="founder" class="bg-lp-surface" aria-labelledby="founder-title">
        <div class="lp-wrap py-24 flex flex-col desk:flex-row gap-14 desk:items-start">
            <div class="min-w-0 desk:flex-[0_1_320px] flex flex-col gap-3.5">
                <!-- [YOUR PHOTO] placeholder: must be replaced by the real photo before launch. -->
                <div role="img" :aria-label="$t('founder.photoLabel')" class="w-full max-w-[320px] aspect-[4/5] rounded-[18px] bg-[repeating-linear-gradient(135deg,var(--lp-border)_0_12px,var(--lp-surface-raised)_12px_24px)] flex items-end p-[18px] box-border">
                    <span aria-hidden="true" class="font-mono text-[12px] text-ink-muted bg-lp-surface px-2.5 py-1.5 rounded-md">{{ $t('founder.photoPlaceholder') }}</span>
                </div>
                <p class="lp-caption text-ink-muted">{{ $t('founder.stats') }}</p>
            </div>

            <div class="min-w-0 desk:flex-[1_1_520px] flex flex-col gap-[22px]">
                <p class="lp-kicker text-brand-ink">{{ $t('founder.kicker') }}</p>
                <h2 id="founder-title" class="lp-headline-section-sm text-ink">{{ $t('founder.title') }}</h2>
                <div class="flex flex-col gap-[18px] lp-letter text-ink max-w-[62ch]">
                    <p v-for="(para, i) in $t('founder.paragraphs')" :key="i">{{ para }}</p>
                </div>
                <p class="lp-signature text-ink">{{ $t('founder.signature') }}</p>

                <div class="flex flex-wrap items-center gap-3.5 px-5 py-[18px] rounded-[14px] bg-brand-tint border border-brand-tint-border">
                    <p class="text-[16px] leading-[1.5] text-ink flex-[1_1_280px] min-w-0"><strong>{{ $t('founder.supportStrong') }}</strong>{{ $t('founder.supportText') }}</p>
                    <a href="mailto:support@ocrreceipt.com" class="font-mono text-[15px] font-bold text-brand-ink-strong inline-flex items-center min-h-[44px]">support@ocrreceipt.com</a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'FounderNote'
};
</script>
