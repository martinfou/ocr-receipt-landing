<template>
    <!-- One behavior for all Download buttons (hero, nav, Free card, closing band).
         Desktop OS detected: links straight to its installer (/dl/{platform}).
         Phone, tablet or unknown: links to the #download chooser in the closing band. -->
    <a :href="href" class="lp-btn" :class="variantClass">
        <svg v-if="variant !== 'nav'" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 4v11m0 0-4.5-4.5M12 15l4.5-4.5M5 20h14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        {{ label }}
    </a>
</template>

<script>
import { LINUX_READY } from '../config.js';
import { currentPlatform } from '../platform.js';

const VARIANTS = {
    primary: 'lp-btn-primary',
    nav: 'lp-btn-nav',
    outline: 'lp-btn-outline-brand',
    band: 'lp-btn-on-band'
};
const OS_NAMES = { macos: 'macOS', windows: 'Windows', linux: 'Linux' };

export default {
    name: 'DownloadLink',
    props: {
        variant: { type: String, default: 'primary' }
    },
    data() {
        return { platform: null };
    },
    computed: {
        variantClass() {
            return VARIANTS[this.variant] || VARIANTS.primary;
        },
        // A desktop OS we have an installer for, or null.
        desktopOs() {
            const p = this.platform;
            if (p === 'macos' || p === 'windows') return p;
            if (p === 'linux' && LINUX_READY) return p;
            return null;
        },
        href() {
            return this.desktopOs ? '/dl/' + this.desktopOs : '#download';
        },
        label() {
            // The nav keeps the short label.
            if (!this.desktopOs || this.variant === 'nav') return this.$t('download.label');
            return this.$t('download.labelFor', { os: OS_NAMES[this.desktopOs] });
        }
    },
    mounted() {
        this.platform = currentPlatform();
    }
};
</script>
