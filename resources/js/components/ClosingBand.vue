<template>
    <section id="download" class="on-band bg-cta-band text-on-cta-band scroll-mt-4" aria-labelledby="download-title">
        <div class="lp-wrap py-[88px] flex flex-col desk:flex-row desk:justify-between desk:items-center gap-8">
            <div class="min-w-0 desk:flex-[1_1_520px] flex flex-col gap-3.5">
                <h2 id="download-title" class="lp-headline-cta text-on-cta-band">{{ $t('closing.line1') }}<br>{{ $t('closing.line2') }}</h2>
                <p class="lp-body-lg text-on-cta-band">{{ linuxReady ? $t('closing.subAll') : $t('closing.subNoLinux') }}</p>
            </div>
            <div class="flex flex-col gap-2.5 items-start">
                <DownloadLink variant="band" />
                <p class="lp-caption text-on-cta-band">{{ $t('closing.micro') }}</p>
                <!-- No-JS / pre-detection path: the OS chooser links are always rendered here. -->
                <OsChooser tone="band" />
            </div>
        </div>
    </section>
</template>

<script>
import DownloadLink from './DownloadLink.vue';
import OsChooser from './OsChooser.vue';
import { LINUX_READY } from '../config.js';

export default {
    name: 'ClosingBand',
    components: { DownloadLink, OsChooser },
    data() {
        return { linuxReady: LINUX_READY };
    }
};
</script>
