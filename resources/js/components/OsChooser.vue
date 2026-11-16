<template>
    <ul :aria-label="$t('download.chooserLabel')" class="m-0 p-0 list-none flex flex-wrap items-stretch">
        <li v-for="(os, i) in platforms" :key="os" class="flex" :class="i > 0 ? 'border-l ' + dividerClass : ''">
            <a :href="'/dl/' + os" class="lp-label inline-flex items-center min-h-[44px] font-semibold underline" :class="[linkClass, i > 0 ? 'pl-4' : '', 'pr-4']">{{ $t('download.' + os) }}</a>
        </li>
    </ul>
</template>

<script>
import { LINUX_READY } from '../config.js';

export default {
    name: 'OsChooser',
    props: {
        // 'page' on page surfaces, 'band' inside the closing CTA band.
        tone: { type: String, default: 'page' }
    },
    computed: {
        platforms() {
            return LINUX_READY ? ['macos', 'windows', 'linux'] : ['macos', 'windows'];
        },
        linkClass() {
            return this.tone === 'band' ? 'text-paper' : 'text-brand-ink';
        },
        dividerClass() {
            return this.tone === 'band' ? 'border-on-cta-band/50' : 'border-lp-border';
        }
    }
};
</script>
