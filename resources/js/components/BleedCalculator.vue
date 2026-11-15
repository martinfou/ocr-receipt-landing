<template>
    <section id="math" class="on-inverse bg-inverse-surface text-inverse-ink" aria-labelledby="math-title">
        <div class="lp-wrap py-[88px] flex flex-col desk:flex-row gap-14">
            <div class="min-w-0 desk:flex-[1_1_380px] flex flex-col gap-7">
                <p class="lp-kicker text-inverse-accent">{{ $t('calc.kicker') }}</p>
                <h2 id="math-title" class="lp-headline-section text-inverse-ink">{{ $t('calc.title') }}</h2>
                <p class="lp-body text-inverse-body">{{ $t('calc.intro') }}</p>

                <fieldset class="m-0 p-0 border-0 flex flex-col gap-3 min-w-0">
                    <legend class="p-0 mb-3 font-bold text-[15px] text-inverse-ink">{{ $t('calc.monthlyLegend') }}</legend>
                    <div class="flex flex-wrap gap-2.5">
                        <label v-for="m in monthlyOptions" :key="m" class="lp-calc-pill">
                            <input v-model.number="monthly" type="radio" name="calc-monthly" :value="m" class="sr-only">
                            <span>{{ money(m) }}</span><span class="sr-only">&nbsp;{{ $t('calc.perMonthSr') }}</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="m-0 p-0 border-0 flex flex-col gap-3 min-w-0">
                    <legend class="p-0 mb-3 font-bold text-[15px] text-inverse-ink">{{ $t('calc.yearsLegend') }}</legend>
                    <div class="flex flex-wrap gap-2.5">
                        <label v-for="y in yearOptions" :key="y" class="lp-calc-pill">
                            <input v-model.number="years" type="radio" name="calc-years" :value="y" class="sr-only">
                            <span>{{ yearsLabel(y) }}</span>
                        </label>
                    </div>
                </fieldset>

                <p class="text-[13px] text-inverse-muted">{{ $t('calc.footnote') }}</p>
            </div>

            <div class="min-w-0 desk:flex-[1_1_440px] flex flex-col gap-7 p-9 max-[480px]:p-6 rounded-[20px] bg-inverse-raised border border-inverse-border">
                <div class="flex flex-col gap-2">
                    <p class="lp-body-sm text-inverse-body">{{ $t('calc.rentingFor', { years: yearsLabel(years) }) }}</p>
                    <p class="lp-numeral-xl text-loss-soft">{{ money(total) }}</p>
                </div>

                <div class="flex flex-col gap-3.5" aria-hidden="true">
                    <div class="flex flex-col gap-1.5">
                        <div class="flex justify-between text-[14px] text-inverse-body"><span>{{ $t('calc.subscription') }}</span><span class="tabular-nums">{{ money(total) }}</span></div>
                        <div class="h-[18px] rounded-md bg-inverse-border overflow-hidden"><div class="lp-bar-fill h-full rounded-md bg-loss-bar" :style="{ width: subPct + '%' }"></div></div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <div class="flex justify-between text-[14px] text-inverse-body"><span>{{ $t('calc.pro') }}</span><span class="tabular-nums">{{ money(proPrice) }}</span></div>
                        <div class="h-[18px] rounded-md bg-inverse-border overflow-hidden"><div class="lp-bar-fill h-full rounded-md bg-inverse-accent" :style="{ width: proPct + '%' }"></div></div>
                    </div>
                </div>

                <div class="border-t-2 border-dashed border-inverse-border"></div>

                <p v-if="ahead" class="lp-verdict text-inverse-ink">{{ $t('calc.keepBefore') }}<span class="text-inverse-accent tabular-nums">{{ money(saved) }}</span>{{ $t('calc.keepAfter', { month: breakEven }) }}</p>
                <p v-else class="lp-verdict text-inverse-ink">{{ $t('calc.cheaper', { month: breakEven }) }}</p>

                <p class="text-[14px] text-inverse-muted">{{ $t('calc.free') }}</p>

                <!-- One sentence per change, debounced, silent on load. -->
                <p class="sr-only" aria-live="polite" aria-atomic="true">{{ announcement }}</p>
            </div>
        </div>
    </section>
</template>

<script>
import { PRO_PRICE } from '../config.js';
import { money } from '../format.js';
import { bleed } from '../bleed.js';

export default {
    name: 'BleedCalculator',
    data() {
        return {
            monthlyOptions: [12, 20, 30, 45],
            yearOptions: [1, 3, 5, 10],
            monthly: 12,
            years: 5,
            proPrice: PRO_PRICE,
            announcement: ''
        };
    },
    computed: {
        result() {
            return bleed(this.monthly, this.years, this.proPrice);
        },
        total() {
            return this.result.total;
        },
        saved() {
            return this.result.saved;
        },
        ahead() {
            return this.result.ahead;
        },
        breakEven() {
            return this.result.breakEven;
        },
        scaleMax() {
            return Math.max(this.total, this.proPrice);
        },
        subPct() {
            return Math.max(2, (this.total / this.scaleMax) * 100);
        },
        proPct() {
            return Math.max(2, (this.proPrice / this.scaleMax) * 100);
        }
    },
    watch: {
        monthly() { this.queueAnnouncement(); },
        years() { this.queueAnnouncement(); }
    },
    beforeUnmount() {
        clearTimeout(this.announceTimer);
    },
    methods: {
        money(n) {
            return money(n, this.$lang.lang);
        },
        yearsLabel(y) {
            return y === 1 ? this.$t('calc.year') : this.$t('calc.years', { n: y });
        },
        queueAnnouncement() {
            clearTimeout(this.announceTimer);
            this.announceTimer = setTimeout(() => {
                const verdict = this.ahead
                    ? this.$t('calc.keepPlain', { amount: this.money(this.saved), month: this.breakEven })
                    : this.$t('calc.cheaper', { month: this.breakEven });
                this.announcement = this.$t('calc.live', {
                    years: this.yearsLabel(this.years),
                    total: this.money(this.total),
                    pro: this.money(this.proPrice),
                    verdict
                });
            }, 300);
        }
    }
};
</script>
