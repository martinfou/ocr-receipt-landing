<template>
    <div class="lp min-h-screen overflow-x-clip">
        <a href="#main" class="lp-skip">{{ $t('skip') }}</a>

        <header>
            <!-- Founder bar, desktop instance (the phone instance sits after the hero). -->
            <FounderBar class="hidden desk:block" />

            <div class="bg-lp-surface border-b border-lp-border">
                <nav
                    :aria-label="$t('nav.label')"
                    class="lp-wrap py-4 grid grid-cols-[auto_auto_minmax(0,1fr)] items-center gap-3 desk:flex desk:flex-wrap desk:justify-between desk:gap-4"
                    @keydown.esc="closeMenu(true)"
                >
                    <a :href="$t('nav.homeHref')" class="col-start-1 row-start-1 inline-flex items-center gap-2.5 min-h-[44px] no-underline text-ink font-extrabold text-[18px] tracking-[-0.01em]">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true" class="shrink-0">
                            <path d="M6 3h16v22l-2.7-1.8L16.7 25 14 23.2 11.3 25l-2.6-1.8L6 25V3Z" stroke="var(--lp-brand-strong)" stroke-width="2" stroke-linejoin="round" fill="var(--lp-brand-track)" />
                            <path d="M10 9h8M10 13h8M10 17h5" stroke="var(--lp-brand-strong)" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="max-[420px]:sr-only">ocr-receipt</span>
                    </a>

                    <button
                        ref="menuButton"
                        type="button"
                        class="desk:hidden col-start-2 row-start-1 inline-flex items-center gap-2 min-h-[44px] px-3.5 rounded-[10px] border border-border-strong bg-transparent text-ink-body lp-label font-semibold cursor-pointer"
                        :aria-expanded="menuOpen ? 'true' : 'false'"
                        aria-controls="nav-menu"
                        @click="menuOpen = !menuOpen"
                    >
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg>
                        {{ $t('nav.menu') }}
                    </button>

                    <div
                        id="nav-menu"
                        class="col-span-3 row-start-2 flex-col gap-1 pt-2 border-t border-lp-border desk:flex desk:flex-row desk:flex-wrap desk:items-center desk:gap-6 desk:pt-0 desk:border-0 desk:ml-auto"
                        :class="menuOpen ? 'flex' : 'hidden'"
                    >
                        <ul class="m-0 p-0 list-none flex flex-col desk:flex-row desk:items-center desk:gap-6">
                            <li v-for="link in links" :key="link.href">
                                <a :href="link.href" class="inline-flex items-center min-h-[44px] lp-label text-ink-body no-underline" @click="closeMenu(false)">{{ $t(link.label) }}</a>
                            </li>
                        </ul>
                        <div class="flex items-center gap-4 desk:gap-6">
                            <button
                                type="button"
                                class="inline-flex items-center gap-2 min-h-[44px] min-w-[44px] justify-center rounded-[10px] bg-transparent border-0 text-ink-body lp-label cursor-pointer px-1"
                                :aria-pressed="isDark ? 'true' : 'false'"
                                @click="toggleTheme"
                            >
                                <svg v-if="isDark" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="4.5" stroke="currentColor" stroke-width="2" /><path d="M12 2v2M12 20v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M2 12h2M20 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg>
                                <svg v-else width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" /></svg>
                                <span class="desk:sr-only">{{ $t('nav.darkTheme') }}</span>
                            </button>
                            <a
                                :href="$t('nav.lang.href')"
                                :lang="$t('nav.lang.code')"
                                :hreflang="$t('nav.lang.code')"
                                class="inline-flex items-center min-h-[44px] lp-label text-ink-body"
                                @click="switchLanguage"
                            >{{ $t('nav.lang.label') }}</a>
                        </div>
                    </div>

                    <DownloadLink variant="nav" class="col-start-3 row-start-1 justify-self-end text-center leading-tight" />
                </nav>
            </div>
        </header>

        <main id="main" tabindex="-1">
            <HeroSection />
            <FounderBar class="desk:hidden" />
            <TourSection />
            <BleedCalculator />
            <FounderNote />
            <PricingSection />
            <FaqSection />
            <ClosingBand />
        </main>

        <FooterSection />
    </div>
</template>

<script>
import FounderBar from './FounderBar.vue';
import DownloadLink from './DownloadLink.vue';
import HeroSection from './HeroSection.vue';
import TourSection from './TourSection.vue';
import BleedCalculator from './BleedCalculator.vue';
import FounderNote from './FounderNote.vue';
import PricingSection from './PricingSection.vue';
import FaqSection from './FaqSection.vue';
import ClosingBand from './ClosingBand.vue';
import FooterSection from './FooterSection.vue';

function storedTheme() {
    try {
        const t = localStorage.getItem('theme');
        return t === 'dark' || t === 'light' ? t : null;
    } catch (e) {
        return null;
    }
}

export default {
    name: 'App',
    components: {
        FounderBar,
        DownloadLink,
        HeroSection,
        TourSection,
        BleedCalculator,
        FounderNote,
        PricingSection,
        FaqSection,
        ClosingBand,
        FooterSection
    },
    data() {
        return {
            menuOpen: false,
            isDark: document.documentElement.classList.contains('dark'),
            links: [
                { href: '#how', label: 'nav.how' },
                { href: '#math', label: 'nav.math' },
                { href: '#pricing', label: 'nav.pricing' },
                { href: '#faq', label: 'nav.faq' }
            ]
        };
    },
    mounted() {
        // With no stored choice, follow prefers-color-scheme live.
        if (window.matchMedia) {
            this.schemeQuery = window.matchMedia('(prefers-color-scheme: dark)');
            this.onSchemeChange = (e) => {
                if (!storedTheme()) this.applyTheme(e.matches);
            };
            if (this.schemeQuery.addEventListener) this.schemeQuery.addEventListener('change', this.onSchemeChange);
        }
        this.applyTheme(storedTheme() ? storedTheme() === 'dark' : this.isDark);
    },
    beforeUnmount() {
        if (this.schemeQuery && this.schemeQuery.removeEventListener) {
            this.schemeQuery.removeEventListener('change', this.onSchemeChange);
        }
    },
    methods: {
        applyTheme(dark) {
            this.isDark = dark;
            document.documentElement.classList.toggle('dark', dark);
        },
        toggleTheme() {
            const dark = !this.isDark;
            try { localStorage.setItem('theme', dark ? 'dark' : 'light'); } catch (e) { /* storage blocked */ }
            this.applyTheme(dark);
        },
        closeMenu(returnFocus) {
            if (!this.menuOpen) return;
            this.menuOpen = false;
            if (returnFocus && this.$refs.menuButton) this.$refs.menuButton.focus();
        },
        // Go to the equivalent URL in the other language, keeping the anchor,
        // and remember the choice in a cookie.
        switchLanguage(e) {
            const code = this.$t('nav.lang.code');
            document.cookie = 'lang=' + code + '; path=/; max-age=31536000; SameSite=Lax';
            try { localStorage.setItem('lang', code); } catch (err) { /* storage blocked */ }
            if (window.location.hash) {
                e.currentTarget.setAttribute('href', this.$t('nav.lang.href') + window.location.hash);
            }
        }
    }
};
</script>
