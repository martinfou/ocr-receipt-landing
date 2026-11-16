<template>
    <section class="bg-lp-surface" aria-labelledby="hero-title">
        <div class="lp-wrap pt-[72px] pb-[56px] flex flex-col desk:flex-row gap-14 desk:items-center">
            <div class="min-w-0 desk:flex-[1_1_520px] flex flex-col gap-6">
                <p class="lp-kicker text-ink-muted">{{ $t('hero.kicker') }}</p>
                <h1 id="hero-title" class="lp-display-hero text-ink">{{ $t('hero.titleLine1') }}<br>{{ $t('hero.titleLine2') }}</h1>
                <p class="lp-lede text-ink-body max-w-[34ch]">{{ $t('hero.pitch') }}</p>

                <div class="flex flex-wrap gap-3 items-center">
                    <DownloadLink variant="primary" />
                    <a href="#pricing" class="lp-btn lp-btn-secondary">{{ $t('hero.proCta') }}</a>
                </div>
                <!-- "No email" only beside the free download on desktop; phones say "No account needed". -->
                <p class="lp-caption text-ink-muted hidden desk:block">{{ $t('hero.microDesktop') }}</p>
                <p class="lp-caption text-ink-muted desk:hidden">{{ $t('hero.microPhone') }}</p>

                <!-- App peek: phone only, a real screenshot cropped at the fold. -->
                <div class="desk:hidden relative mt-4">
                    <div class="h-[220px] rounded-[14px] overflow-hidden border border-lp-border bg-surface-raised shadow-[0_40px_80px_-40px_var(--lp-frame-shadow)]">
                        <img :src="peekSrc" :alt="$t('hero.peekAlt')" width="1440" height="900" class="block w-[200%] max-w-none h-auto">
                    </div>
                    <!-- Phone seal: stamped on the app peek's corner. -->
                    <div class="absolute -top-8 -right-2">
                        <LocalAiSeal size="sm" />
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-2.5">
                    <span class="lp-caption font-semibold text-ink-body">{{ $t('hero.runsOn') }}</span>
                    <!-- Each OS chip downloads that platform's installer. -->
                    <a v-for="os in platforms" :key="os.id" :href="'/dl/' + os.id" class="inline-flex items-center gap-2 min-h-[44px] px-3 rounded-lg bg-ink text-lp-surface font-bold text-[14px] no-underline hover:opacity-90">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 4v11m0 0-4.5-4.5M12 15l4.5-4.5M5 20h14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        <span class="sr-only">{{ $t('download.forSr') }}&nbsp;</span>{{ os.name }}
                    </a>
                </div>

                <ul :aria-label="$t('hero.trustLabel')" class="mt-2 p-0 list-none flex flex-wrap gap-2.5">
                    <li v-for="pill in $t('hero.trust')" :key="pill" class="flex items-center gap-2 px-3.5 py-2 rounded-full bg-surface-raised border border-lp-border text-ink font-semibold text-[14px] leading-[1.4]">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true" class="text-loss"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" /><path d="m6 18 12-12" stroke="currentColor" stroke-width="2" /></svg>
                        {{ pill }}
                    </li>
                </ul>

                <!-- Founder confession with the photo stamp (photo is decorative: alt=""). -->
                <div class="flex items-center gap-4 mt-2">
                    <div aria-hidden="true" class="shrink-0 w-16 h-16 rounded-md border-[3px] border-brand-ink -rotate-[4deg] bg-[repeating-linear-gradient(135deg,var(--lp-border)_0_8px,var(--lp-surface-raised)_8px_16px)] flex items-center justify-center">
                        <span class="font-mono text-[9px] leading-tight text-ink-muted text-center px-1">{{ $t('founder.photoPlaceholder') }}</span>
                    </div>
                    <p class="lp-body-sm text-ink-body max-w-[48ch]">{{ $t('hero.confession') }}</p>
                </div>
            </div>

            <!-- Receipt statement: decorative; the sr-only figcaption is the only text alternative. -->
            <figure class="relative min-w-0 desk:flex-[1_1_400px] m-0 flex justify-center pb-6 desk:pt-24">
                <!-- Desktop seal: above the receipt, overlapping its top edge a little. -->
                <div class="hidden desk:block absolute top-0 -left-10 z-10">
                    <LocalAiSeal />
                </div>
                <div aria-hidden="true" class="relative w-full max-w-[420px] bg-paper border border-on-paper-rule shadow-[0_30px_60px_-30px_var(--lp-soft-shadow)] px-7 pt-7 pb-9 font-mono text-[14px] leading-[1.5] text-on-paper rotate-[1.2deg] uppercase">
                    <div class="flex justify-between text-[12px] text-on-paper-struck tracking-[0.06em]"><span>{{ $t('hero.receipt.header') }}</span><span>{{ $t('hero.receipt.example') }}</span></div>
                    <div class="border-t-2 border-dashed border-on-paper-rule my-3.5"></div>
                    <div class="flex flex-col gap-2.5">
                        <div v-for="line in $t('hero.receipt.lines')" :key="line[0]" class="flex justify-between gap-3 line-through text-on-paper-struck"><span>{{ line[0] }}</span><span class="normal-case">{{ line[1] }}</span></div>
                    </div>
                    <div class="border-t-2 border-dashed border-on-paper-rule mt-[18px] mb-3.5"></div>
                    <div class="flex justify-between gap-3 font-bold text-[16px] text-on-paper"><span>{{ $t('hero.receipt.proName') }}</span><span>{{ $t('hero.receipt.proAmount') }}</span></div>
                    <div class="flex justify-between gap-3 font-medium mt-1 text-on-paper-accent"><span>{{ $t('hero.receipt.nextCharge') }}</span><span>{{ $t('hero.receipt.never') }}</span></div>
                    <div class="absolute top-[74px] right-[18px] px-3.5 py-1.5 border-[3px] border-on-paper-loss text-on-paper-loss font-bold text-[22px] leading-none tracking-[0.12em] -rotate-[11deg] rounded-md bg-paper/75">{{ $t('hero.receipt.cancelled') }}</div>
                    <div class="absolute -bottom-[18px] left-[22px] px-3.5 py-1.5 border-[3px] border-on-paper-accent text-on-paper-accent bg-on-paper-tint font-bold text-[18px] leading-none tracking-[0.12em] -rotate-[4deg] rounded-md">{{ $t('hero.receipt.paidOnce') }}</div>
                </div>
                <figcaption class="sr-only">{{ $t('hero.receipt.caption') }}</figcaption>
            </figure>
        </div>

        <!-- Local AI, made visible: a full-width dark band right under the hero, three plain facts. -->
        <div class="on-inverse bg-inverse-surface text-inverse-ink border-t-4 border-inverse-accent">
            <div class="lp-wrap py-14 flex flex-col gap-8">
                <h2 class="lp-headline-section-sm text-inverse-ink max-w-[22ch]">{{ $t('hero.aiTitle') }}</h2>
                <ul class="m-0 p-0 list-none grid gap-8 desk:grid-cols-3">
                    <li v-for="(fact, i) in $t('hero.ai')" :key="fact.title" class="flex flex-col gap-2.5">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-inverse-raised border border-inverse-border text-inverse-accent" aria-hidden="true">
                            <!-- 0: computer, 1: chip, 2: wifi off -->
                            <svg v-if="i === 0" width="26" height="26" viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="12" rx="2" stroke="currentColor" stroke-width="2" /><path d="M8 20h8M12 16v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg>
                            <svg v-else-if="i === 1" width="26" height="26" viewBox="0 0 24 24" fill="none"><rect x="6" y="6" width="12" height="12" rx="2" stroke="currentColor" stroke-width="2" /><path d="M9.5 10h5v4h-5z" fill="currentColor" /><path d="M9 2v3M15 2v3M9 19v3M15 19v3M2 9h3M2 15h3M19 9h3M19 15h3" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg>
                            <svg v-else width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M2 8.5a15 15 0 0 1 20 0M5 12a10 10 0 0 1 14 0M8.5 15.5a5 5 0 0 1 7 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" /><circle cx="12" cy="19" r="1.3" fill="currentColor" /><path d="M3 3l18 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" /></svg>
                        </span>
                        <span class="font-bold text-inverse-ink text-[19px]">{{ fact.title }}</span>
                        <span class="lp-body text-inverse-body">{{ fact.body }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>

<script>
import DownloadLink from './DownloadLink.vue';
import LocalAiSeal from './LocalAiSeal.vue';
import { LINUX_READY } from '../config.js';
import { tourFrame } from '../theme.js';

export default {
    name: 'HeroSection',
    components: { DownloadLink, LocalAiSeal },
    computed: {
        // App peek: the final batch frame of the tour, in the page language and theme.
        peekSrc() {
            return tourFrame(this.$lang.lang, 'batches-3');
        },
        platforms() {
            const all = [{ id: 'macos', name: 'macOS' }, { id: 'windows', name: 'Windows' }, { id: 'linux', name: 'Linux' }];
            return LINUX_READY ? all : all.slice(0, 2);
        }
    }
};
</script>
