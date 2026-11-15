<template>
    <!-- One behavior for all Download buttons (hero, nav, Free card, closing band).
         Until OS detection ships, every instance links to the #download chooser. -->
    <a href="#download" class="lp-btn" :class="variantClass">
        <svg v-if="variant !== 'nav'" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 4v11m0 0-4.5-4.5M12 15l4.5-4.5M5 20h14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        {{ $t('download.label') }}
    </a>
</template>

<script>
const VARIANTS = {
    primary: 'lp-btn-primary',
    nav: 'lp-btn-nav',
    outline: 'lp-btn-outline-brand',
    band: 'lp-btn-on-band'
};

export default {
    name: 'DownloadLink',
    props: {
        variant: { type: String, default: 'primary' }
    },
    computed: {
        variantClass() {
            return VARIANTS[this.variant] || VARIANTS.primary;
        }
    }
};
</script>
