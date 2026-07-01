<template>
    <section id="pricing" class="py-24 lg:py-32 bg-surface-light/30 border-y border-border/40">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-wrap-balance text-[#e5e5e5]" v-html="$t('pricing.title')">
                </h2>
                <p class="text-text-muted max-w-xl mx-auto">
                    {{ $t('pricing.subtitle') }}
                </p>
            </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
                
                <!-- Free Lite Tier -->
                <div class="card flex flex-col justify-between hover:border-border transition-all duration-300">
                    <div>
                        <h3 class="font-serif font-semibold text-lg mb-1 text-[#e5e5e5]">{{ $t('pricing.freeLite.name') }}</h3>
                        <p class="text-[10px] text-text-muted mb-6">{{ $t('pricing.freeLite.desc') }}</p>
                        <div class="text-3xl font-semibold mb-6 text-[#e5e5e5]">{{ $lang.lang === 'fr' ? '0 $' : '$0' }}</div>
                        <div class="border-b border-border/50 mb-6"></div>
                        <ul class="space-y-3 text-xs mb-8">
                            <li v-for="item in $t('pricing.freeLite.features')" :key="item" class="flex items-start gap-2">
                                <span class="text-[#27c93f] text-xs font-semibold select-none">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                            <li v-for="item in $t('pricing.freeLite.disabled')" :key="item" class="flex items-start gap-2 opacity-40">
                                <span class="text-red-500 text-xs font-bold select-none">&times;</span>
                                <span class="text-text-muted/60 line-through">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <a href="#beta" class="btn-outline w-full text-center py-2.5 mt-auto text-xs">
                        {{ $t('pricing.freeLite.btn') }}
                    </a>
                </div>

                <!-- Solo Tier -->
                <div class="card flex flex-col justify-between hover:border-border transition-all duration-300">
                    <div>
                        <h3 class="font-serif font-semibold text-lg mb-1 text-[#e5e5e5]">{{ $t('pricing.solo.name') }}</h3>
                        <p class="text-[10px] text-text-muted mb-6">{{ $t('pricing.solo.desc') }}</p>
                        <div class="mb-6">
                            <span class="text-3xl font-semibold text-[#e5e5e5]">{{ $lang.lang === 'fr' ? '149 $' : '$149' }}</span>
                            <span class="text-[10px] text-text-muted block mt-1">({{ $t('pricing.period') }})</span>
                        </div>
                        <div class="border-b border-border/50 mb-6"></div>
                        <ul class="space-y-3 text-xs mb-8">
                            <li v-for="item in $t('pricing.solo.features')" :key="item" class="flex items-start gap-2">
                                <span class="text-[#27c93f] text-xs font-semibold select-none">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                            <li v-for="item in $t('pricing.solo.disabled')" :key="item" class="flex items-start gap-2 opacity-40">
                                <span class="text-red-500 text-xs font-bold select-none">&times;</span>
                                <span class="text-text-muted/60 line-through">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="openCheckoutModal('solo')" class="btn-brand w-full text-center py-2.5 mt-auto text-xs">
                        {{ $t('pricing.solo.btn') }}
                    </button>
                </div>

                <!-- Pro Tier (Highlighted) -->
                <div class="card flex flex-col justify-between border-brand/45 bg-brand/[0.02] shadow-[0_0_30px_rgba(59,130,246,0.04)] relative hover:border-brand/60 transition-all duration-300">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-brand-dark text-white text-[9px] font-mono font-semibold tracking-wider rounded-full uppercase">
                        {{ $lang.lang === 'fr' ? 'Recommandé' : 'Recommended' }}
                    </div>
                    <div>
                        <h3 class="font-serif font-semibold text-lg mb-1 text-[#e5e5e5] mt-2">{{ $t('pricing.pro.name') }}</h3>
                        <p class="text-[10px] text-text-muted mb-6">{{ $t('pricing.pro.desc') }}</p>
                        <div class="mb-6">
                            <span class="text-3xl font-semibold text-[#e5e5e5]">{{ $lang.lang === 'fr' ? '199 $' : '$199' }}</span>
                            <span class="text-[10px] text-text-muted block mt-1">({{ $t('pricing.period') }})</span>
                        </div>
                        <div class="border-b border-brand/10 mb-6"></div>
                        <ul class="space-y-3 text-xs mb-8">
                            <li v-for="item in $t('pricing.pro.features')" :key="item" class="flex items-start gap-2">
                                <span class="text-[#27c93f] text-xs font-semibold select-none">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="openCheckoutModal('pro')" class="btn-brand w-full text-center py-2.5 mt-auto text-xs shadow-lg shadow-brand-dark/10">
                        {{ $t('pricing.pro.btn') }}
                    </button>
                </div>

                <!-- Comptable Tier -->
                <div class="card flex flex-col justify-between hover:border-border transition-all duration-300">
                    <div>
                        <h3 class="font-serif font-semibold text-lg mb-1 text-[#e5e5e5]">{{ $t('pricing.comptable.name') }}</h3>
                        <p class="text-[10px] text-text-muted mb-6">{{ $t('pricing.comptable.desc') }}</p>
                        <div class="mb-6">
                            <span class="text-3xl font-semibold text-[#e5e5e5]">{{ $lang.lang === 'fr' ? '399 $' : '$399' }}</span>
                            <span class="text-[10px] text-text-muted block mt-1">({{ $t('pricing.period') }})</span>
                        </div>
                        <div class="border-b border-border/50 mb-6"></div>
                        <ul class="space-y-3 text-xs mb-8">
                            <li v-for="item in $t('pricing.comptable.features')" :key="item" class="flex items-start gap-2">
                                <span class="text-[#27c93f] text-xs font-semibold select-none">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="openCheckoutModal('comptable')" class="btn-brand w-full text-center py-2.5 mt-auto text-xs">
                        {{ $t('pricing.comptable.btn') }}
                    </button>
                </div>

            </div>
        </div>

        <!-- Checkout Email Modal Dialog -->
        <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center p-6 bg-surface/80 backdrop-blur-md animate-fade-in">
            <div class="border border-border/80 bg-[#161615] rounded-2xl p-8 max-w-md w-full relative shadow-2xl">
                <button @click="closeModal" class="absolute top-4 right-4 text-text-muted hover:text-[#e5e5e5] font-light text-xl select-none cursor-pointer">&times;</button>
                
                <h3 class="font-serif font-semibold text-xl mb-2 text-[#e5e5e5]">
                    {{ $lang.lang === 'fr' ? 'Informations de facturation' : 'Billing Information' }}
                </h3>
                <p class="text-xs text-text-muted mb-6">
                    {{ $lang.lang === 'fr' ? 'Saisissez votre adresse email pour recevoir votre licence après achat.' : 'Enter your email address to receive your license key after purchase.' }}
                </p>

                <form @submit.prevent="submitCheckout" class="space-y-4">
                    <div>
                        <label for="checkout-email" class="block text-xs font-mono text-text-muted uppercase tracking-wider mb-2">
                            {{ $lang.lang === 'fr' ? 'Adresse email' : 'Email Address' }}
                        </label>
                        <input 
                            type="email" 
                            id="checkout-email" 
                            v-model="email" 
                            required 
                            placeholder="you@example.com"
                            class="w-full bg-[#0a0a0a] border border-border focus:border-brand focus:ring-1 focus:ring-brand rounded-lg px-4 py-2.5 text-sm text-[#e5e5e5] outline-none transition-all"
                        />
                    </div>

                    <div v-if="errorMsg" class="text-red-400 text-xs font-mono">
                        {{ errorMsg }}
                    </div>

                    <div class="flex items-center gap-3 pt-2">
                        <button type="button" @click="closeModal" class="btn-outline flex-1 py-2.5 text-xs text-center">
                            {{ $lang.lang === 'fr' ? 'Annuler' : 'Cancel' }}
                        </button>
                        <button type="submit" :disabled="loading" class="btn-brand flex-1 py-2.5 text-xs text-center disabled:opacity-50">
                            {{ loading ? ($lang.lang === 'fr' ? 'Redirection...' : 'Redirecting...') : ($lang.lang === 'fr' ? 'Continuer' : 'Continue') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'PricingSection',
    data() {
        return {
            showModal: false,
            selectedTier: null,
            email: '',
            loading: false,
            errorMsg: ''
        };
    },
    methods: {
        openCheckoutModal(tier) {
            this.selectedTier = tier;
            this.showModal = true;
            this.errorMsg = '';
        },
        closeModal() {
            this.showModal = false;
            this.selectedTier = null;
            this.email = '';
            this.errorMsg = '';
        },
        submitCheckout() {
            this.loading = true;
            this.errorMsg = '';

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            fetch('/checkout', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    tier: this.selectedTier,
                    email: this.email
                })
            })
            .then(async r => {
                const data = await r.json();
                if (!r.ok) {
                    throw new Error(data.error || (this.$lang.lang === 'fr' ? 'Une erreur est survenue lors de l\'initialisation.' : 'An error occurred during initialization.'));
                }
                return data;
            })
            .then(data => {
                if (data.url) {
                    window.location.href = data.url;
                }
            })
            .catch(err => {
                this.errorMsg = err.message;
            })
            .finally(() => {
                this.loading = false;
            });
        }
    }
};
</script>
