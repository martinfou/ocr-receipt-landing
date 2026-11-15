<template>
    <section id="how" class="bg-surface-raised border-y border-lp-border" aria-labelledby="how-title">
        <div class="lp-wrap py-20 flex flex-col gap-10">
            <div class="flex flex-col gap-3 max-w-[640px]">
                <h2 id="how-title" class="lp-headline-section-sm text-ink">{{ $t('tour.title') }}</h2>
                <p class="lp-body-lg text-ink-body">{{ $t('tour.sub') }}</p>
            </div>

            <div class="flex flex-col desk:flex-row gap-8 desk:items-start">
                <!-- APG Tabs: roving tabindex, selection follows focus, no autoplay. -->
                <div class="min-w-0 desk:flex-[1_1_280px] flex flex-col gap-3">
                    <div role="tablist" :aria-label="$t('tour.tablistLabel')" aria-orientation="vertical" class="flex flex-col gap-3" @keydown="onKeydown">
                        <button
                            v-for="(step, i) in steps"
                            :key="i"
                            :id="'tour-tab-' + i"
                            type="button"
                            role="tab"
                            :aria-selected="i === active ? 'true' : 'false'"
                            aria-controls="tour-panel"
                            :aria-labelledby="'tour-tab-' + i + '-num tour-tab-' + i + '-title'"
                            :aria-describedby="'tour-tab-' + i + '-body'"
                            :tabindex="i === active ? 0 : -1"
                            class="flex flex-col items-start gap-1.5 w-full text-left px-5 py-[18px] rounded-[14px] border-2 cursor-pointer"
                            :class="i === active ? 'bg-brand-tint border-brand-strong' : 'bg-lp-surface border-lp-border'"
                            @click="select(i)"
                        >
                            <span :id="'tour-tab-' + i + '-num'" class="sr-only">{{ $t('tour.stepPrefix', { n: i + 1 }) }}</span>
                            <span aria-hidden="true" class="lp-mono-label text-brand-ink">{{ step.kicker }}</span>
                            <span :id="'tour-tab-' + i + '-title'" class="lp-title text-ink">{{ step.title }}</span>
                            <span :id="'tour-tab-' + i + '-body'" class="lp-body-sm text-ink-body">{{ step.body }}</span>
                        </button>
                    </div>
                    <p v-if="!isDesktop" class="text-[13px] text-ink-muted mt-1">{{ $t('tour.note') }}</p>
                </div>

                <div
                    id="tour-panel"
                    role="tabpanel"
                    :aria-labelledby="'tour-tab-' + active"
                    tabindex="0"
                    class="min-w-0 desk:flex-[999_1_600px] rounded-[14px]"
                >
                    <figure class="m-0 flex flex-col gap-3">
                        <div class="rounded-[14px] overflow-hidden border border-inverse-border bg-inverse-surface shadow-[0_40px_80px_-40px_var(--lp-frame-shadow)]">
                            <!-- Desktop: the decorative simulator (steps 1–3). Step 4 and below desktop-min: real screenshots. -->
                            <DesktopSimulator v-if="isDesktop && simulatorTab !== null" :active-tab="simulatorTab" />
                            <img
                                v-else
                                :src="screenshot"
                                :alt="steps[active].alt"
                                width="1200"
                                height="800"
                                class="block w-full max-w-full aspect-[3/2] object-cover"
                            >
                        </div>
                        <figcaption class="font-mono text-[13px] text-ink-muted">{{ steps[active].caption }}</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import DesktopSimulator from './DesktopSimulator.vue';

// Tour step → simulator page (0 Single PDF, 1 Batches, 2 Library, 3 Reports).
// The simulator has no dashboard page, so step 4 shows the dashboard screenshot on desktop too.
const SIMULATOR_TAB = [1, 0, 2, null];
const SCREENSHOTS = [
    '/screenshots/screenshot_batches.png',
    '/screenshots/screenshot_single_pdf.png',
    '/screenshots/screenshot_library.png',
    '/screenshots/screenshot_dashboard.png'
];
const DESKTOP_QUERY = '(min-width: 1000px)';

export default {
    name: 'TourSection',
    components: { DesktopSimulator },
    data() {
        const mq = typeof window !== 'undefined' && window.matchMedia ? window.matchMedia(DESKTOP_QUERY) : null;
        return {
            active: 0,
            isDesktop: !!(mq && mq.matches)
        };
    },
    computed: {
        steps() {
            return this.$t('tour.steps');
        },
        simulatorTab() {
            return SIMULATOR_TAB[this.active];
        },
        screenshot() {
            return SCREENSHOTS[this.active];
        }
    },
    mounted() {
        if (!window.matchMedia) return;
        this.mq = window.matchMedia(DESKTOP_QUERY);
        this.onMq = (e) => { this.isDesktop = e.matches; };
        if (this.mq.addEventListener) this.mq.addEventListener('change', this.onMq);
    },
    beforeUnmount() {
        if (this.mq && this.mq.removeEventListener) this.mq.removeEventListener('change', this.onMq);
    },
    methods: {
        select(i) {
            this.active = i;
        },
        focusTab(i) {
            this.active = i;
            this.$nextTick(() => {
                const tab = document.getElementById('tour-tab-' + i);
                if (tab) tab.focus();
            });
        },
        onKeydown(e) {
            const last = this.steps.length - 1;
            let next = null;
            switch (e.key) {
                case 'ArrowRight':
                case 'ArrowDown':
                    next = this.active === last ? 0 : this.active + 1;
                    break;
                case 'ArrowLeft':
                case 'ArrowUp':
                    next = this.active === 0 ? last : this.active - 1;
                    break;
                case 'Home':
                    next = 0;
                    break;
                case 'End':
                    next = last;
                    break;
                default:
                    return;
            }
            e.preventDefault();
            this.focusTab(next);
        }
    }
};
</script>
