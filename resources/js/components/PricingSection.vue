<template>
    <section id="pricing" class="bg-surface-raised border-y border-lp-border" aria-labelledby="pricing-title">
        <div class="lp-wrap py-[88px] flex flex-col gap-10">
            <div class="flex flex-col gap-3 max-w-[680px]">
                <h2 id="pricing-title" class="lp-headline-section text-ink">{{ $t('pricing.title') }}</h2>
                <p class="lp-body-lg text-ink-body">{{ $t('pricing.intro') }}</p>
                <p class="lp-caption text-ink-muted flex flex-wrap gap-x-4 gap-y-1 items-center">
                    <span>{{ $t('pricing.compareLabel') }}</span>
                    <a href="/vs/dext" class="inline-flex items-center min-h-[44px]">vs Dext</a>
                    <a href="/vs/neat" class="inline-flex items-center min-h-[44px]">vs NeatReceipts</a>
                    <a href="/alternative-hubdoc" class="inline-flex items-center min-h-[44px]">vs Hubdoc</a>
                </p>
            </div>

            <div class="flex flex-col desk:flex-row gap-6 desk:items-stretch">
                <!-- Pricing card Free -->
                <div class="min-w-0 desk:flex-[1_1_340px] flex flex-col gap-5 p-8 max-[480px]:p-6 rounded-[20px] border border-lp-border bg-lp-surface">
                    <h3 class="lp-title text-ink">{{ $t('pricing.free.name') }}</h3>
                    <p class="lp-numeral-price text-ink">{{ $t('pricing.free.price') }}</p>
                    <p class="lp-body text-ink-body">{{ $t('pricing.free.tagline') }}</p>
                    <ul class="m-0 p-0 list-none flex flex-col gap-2.5 lp-body text-ink">
                        <li v-for="item in $t('pricing.free.features')" :key="item">{{ item }}</li>
                        <li>{{ linuxReady ? $t('pricing.free.platformsAll') : $t('pricing.free.platformsNoLinux') }}</li>
                        <li class="hidden desk:list-item">{{ $t('pricing.free.noEmailDesktop') }}</li>
                        <li class="desk:hidden">{{ $t('pricing.free.noEmailPhone') }}</li>
                    </ul>
                    <DownloadLink variant="outline" class="mt-auto w-full" />
                </div>

                <!-- Pricing card Pro, founder state with the counter hidden -->
                <div class="min-w-0 desk:flex-[1_1_340px] relative flex flex-col gap-5 p-8 max-[480px]:p-6 rounded-[20px] border-2 border-ink bg-surface-raised shadow-[8px_8px_0_var(--lp-card-shadow)]">
                    <div class="flex justify-between items-center gap-3">
                        <h3 class="lp-title text-ink">{{ $t('pricing.pro.name') }}</h3>
                        <span aria-hidden="true" class="font-mono text-[12px] font-bold leading-none tracking-[0.12em] text-brand-ink bg-brand-tint border-2 border-brand-ink px-2.5 py-1 rounded-md -rotate-3">{{ $t('pricing.pro.paidOnce') }}</span>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <p class="lp-body-sm text-ink-muted"><span class="sr-only">{{ $t('pricing.pro.wasSr') }}</span><s>{{ $t('pricing.pro.regular') }}</s>{{ $t('pricing.pro.regularSuffix') }}</p>
                        <p class="lp-numeral-price text-ink"><span class="sr-only">{{ $t('pricing.pro.nowSr') }}</span>{{ $t('pricing.pro.price') }} <span class="text-[18px] font-semibold tracking-normal text-ink-muted">{{ $t('pricing.pro.priceSuffix') }}</span></p>
                    </div>
                    <p class="lp-body text-ink-body">{{ $t('pricing.pro.founderLine') }} {{ $t('pricing.pro.after') }}</p>
                    <ul class="m-0 p-0 list-none flex flex-col gap-2.5 lp-body text-ink">
                        <li v-for="item in $t('pricing.pro.features')" :key="item">{{ item }}</li>
                    </ul>
                    <p class="lp-caption text-ink-muted">{{ $t('pricing.pro.upgrade') }}</p>
                    <button type="button" class="lp-btn lp-btn-primary mt-auto w-full" aria-haspopup="dialog" @click="openCheckout('pro', $event)">{{ $t('pricing.pro.buy') }}</button>
                </div>
            </div>

            <div class="flex flex-wrap justify-between items-center gap-4">
                <p class="lp-body-sm text-ink-muted">
                    {{ $t('pricing.firmBefore') }}<button type="button" class="lp-link-button" aria-haspopup="dialog" @click="openCheckout('comptable', $event)">{{ $t('pricing.firmLink') }}</button>{{ $t('pricing.firmAfter') }}
                </p>
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="min-h-[44px] px-4 rounded-[10px] border border-border-strong bg-lp-surface text-ink-muted lp-caption cursor-pointer" @click="cancelRevealed = !cancelRevealed">{{ $t('pricing.cancelButton') }}</button>
                    <p role="status" class="font-bold text-brand-ink">{{ cancelRevealed ? $t('pricing.cancelReveal') : '' }}</p>
                </div>
            </div>
        </div>

        <!-- Checkout email step (POST /checkout {email, tier}) -->
        <dialog
            ref="dialog"
            aria-labelledby="checkout-title"
            class="m-auto w-[calc(100%-32px)] max-w-md p-0 rounded-[20px] border border-lp-border bg-surface-raised text-ink backdrop:bg-black/60"
            @close="onDialogClose"
        >
            <div class="p-8 max-[480px]:p-6 flex flex-col gap-5">
                <div class="flex justify-between items-start gap-4">
                    <h2 id="checkout-title" class="lp-title text-ink">{{ tier === 'comptable' ? $t('checkout.titleFirm') : $t('checkout.titlePro') }}</h2>
                    <button type="button" class="min-h-[44px] min-w-[44px] -mt-2 -mr-2 rounded-[10px] text-ink-muted text-[24px] leading-none cursor-pointer bg-transparent border-0" :aria-label="$t('checkout.close')" @click="closeCheckout">&times;</button>
                </div>
                <p class="lp-body-sm text-ink-body">{{ $t('checkout.intro') }}</p>

                <form class="flex flex-col gap-5" novalidate @submit.prevent="submitCheckout">
                    <div class="flex flex-col gap-2">
                        <label for="checkout-email" class="lp-label text-ink">{{ $t('checkout.emailLabel') }}</label>
                        <input
                            id="checkout-email"
                            ref="email"
                            v-model="email"
                            type="email"
                            autocomplete="email"
                            required
                            :aria-invalid="errorMsg ? 'true' : 'false'"
                            :aria-describedby="errorMsg ? 'checkout-error' : null"
                            class="w-full min-h-[44px] rounded-[10px] border border-input-border bg-lp-surface px-4 text-[16px] text-ink"
                        >
                        <p v-if="errorMsg" id="checkout-error" role="alert" class="flex items-start gap-2 text-ink font-semibold lp-body-sm">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true" class="shrink-0 mt-0.5"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" /><path d="M12 7v6M12 16.5v.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg>
                            <span>{{ errorMsg }}</span>
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <button type="button" class="lp-btn lp-btn-secondary flex-1" @click="closeCheckout">{{ $t('checkout.cancel') }}</button>
                        <button type="submit" class="lp-btn lp-btn-primary flex-1" :aria-disabled="loading ? 'true' : 'false'">{{ loading ? $t('checkout.redirecting') : $t('checkout.submit') }}</button>
                    </div>
                </form>
            </div>
        </dialog>
    </section>
</template>

<script>
import DownloadLink from './DownloadLink.vue';
import { LINUX_READY } from '../config.js';

export default {
    name: 'PricingSection',
    components: { DownloadLink },
    data() {
        return {
            linuxReady: LINUX_READY,
            cancelRevealed: false,
            tier: null,
            email: '',
            loading: false,
            errorMsg: ''
        };
    },
    methods: {
        openCheckout(tier, event) {
            this.tier = tier;
            this.errorMsg = '';
            this.trigger = event && event.currentTarget;
            const dialog = this.$refs.dialog;
            if (dialog && typeof dialog.showModal === 'function') {
                dialog.showModal();
                this.$nextTick(() => this.$refs.email && this.$refs.email.focus());
            }
        },
        closeCheckout() {
            const dialog = this.$refs.dialog;
            if (dialog && dialog.open) dialog.close();
        },
        onDialogClose() {
            this.tier = null;
            this.email = '';
            this.errorMsg = '';
            this.loading = false;
            if (this.trigger) this.trigger.focus();
        },
        submitCheckout() {
            if (this.loading) return;
            this.errorMsg = '';
            if (!this.email.trim() || !this.email.includes('@')) {
                this.errorMsg = this.$t('checkout.emailRequired');
                this.$nextTick(() => this.$refs.email && this.$refs.email.focus());
                return;
            }
            this.loading = true;

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            fetch('/checkout', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    tier: this.tier,
                    email: this.email
                })
            })
                .then(async (r) => {
                    let data = {};
                    try { data = await r.json(); } catch (e) { /* non-JSON error page */ }
                    if (!r.ok) {
                        throw new Error(data.error || this.$t('checkout.error'));
                    }
                    return data;
                })
                .then((data) => {
                    if (data.url) {
                        window.location.href = data.url;
                    } else {
                        throw new Error(this.$t('checkout.error'));
                    }
                })
                .catch((err) => {
                    // Network failures (TypeError) carry a raw, untranslated browser message.
                    this.errorMsg = err instanceof TypeError || !err.message ? this.$t('checkout.error') : err.message;
                    this.loading = false;
                    this.$nextTick(() => this.$refs.email && this.$refs.email.focus());
                });
        }
    }
};
</script>
