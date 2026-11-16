<template>
    <!-- "Local AI" rubber-stamp seal, in the page's stamp style (mono, rotated, double ring).
         Theme-aware ink so it reads in light and dark mode. -->
    <p
        class="m-0 shrink-0 rounded-full border-[3px] border-brand-ink bg-brand-tint text-brand-ink flex flex-col items-center justify-center text-center font-mono font-bold uppercase -rotate-[8deg] shadow-[inset_0_0_0_5px_var(--lp-brand-tint),inset_0_0_0_7px_var(--lp-brand-ink)]"
        :class="size === 'sm' ? 'w-[118px] h-[118px] gap-1 px-3' : 'w-[164px] h-[164px] gap-1.5 px-4'"
    >
        <svg :width="size === 'sm' ? 22 : 30" :height="size === 'sm' ? 22 : 30" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <rect x="6" y="6" width="12" height="12" rx="2" stroke="currentColor" stroke-width="2" />
            <path d="M9.5 10h5v4h-5z" fill="currentColor" />
            <path d="M9 2v3M15 2v3M9 19v3M15 19v3M2 9h3M2 15h3M19 9h3M19 15h3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
        <span class="leading-none tracking-[0.12em]" :class="size === 'sm' ? 'text-[14px]' : 'text-[19px]'">{{ $t('hero.sealTitle') }}</span>
        <span class="leading-tight tracking-[0.08em]" :class="size === 'sm' ? 'text-[8px]' : 'text-[10px]'">{{ $t('hero.sealText') }}</span>
    </p>
</template>

<script>
export default {
    name: 'LocalAiSeal',
    props: {
        size: { type: String, default: 'lg' }
    }
};
</script>
