<template>
    <section id="pricing" class="py-24 lg:py-32 bg-[#0a0a0a] border-y border-border/40 relative">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-3 flex items-center justify-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
                    Perpetual Licensing
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-wrap-balance text-[#e5e5e5]" v-html="$t('pricing.title')">
                </h2>
                <p class="text-text-muted max-w-xl mx-auto text-sm">
                    {{ $t('pricing.subtitle') }}
                </p>
            </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
                
                <!-- Free Lite Tier -->
                <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border/60 hover:border-border/100 transition-all duration-300 rounded-xl">
                    <div class="mb-6">
                        <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider mb-2">// LITE</div>
                        <h3 class="font-serif font-semibold text-lg text-[#e5e5e5]">{{ $t('pricing.freeLite.name') }}</h3>
                        <p class="text-[10px] text-text-muted mt-1 min-h-[24px]">{{ $t('pricing.freeLite.desc') }}</p>
                        <div class="text-3xl font-semibold mt-4 text-[#e5e5e5]">{{ $lang.lang === 'fr' ? '0 $' : '$0' }}</div>
                        <div class="border-b border-border/40 my-5"></div>
                        <ul class="space-y-3.5 text-xs">
                            <li v-for="item in $t('pricing.freeLite.features')" :key="item" class="flex items-start gap-2.5">
                                <span class="text-[#27c93f] text-[10px] font-semibold select-none mt-0.5">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                            <li v-for="item in $t('pricing.freeLite.disabled')" :key="item" class="flex items-start gap-2.5 opacity-35">
                                <span class="text-red-500 text-xs font-bold select-none">&times;</span>
                                <span class="text-text-muted/60 line-through">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <a href="#beta" class="btn-outline w-full text-center py-2.5 text-xs font-mono uppercase tracking-wider mt-auto cursor-pointer">
                        {{ $t('pricing.freeLite.btn') }}
                    </a>
                </div>

                <!-- Solo Tier -->
                <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border/60 hover:border-border/100 transition-all duration-300 rounded-xl">
                    <div class="mb-6">
                        <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider mb-2">// INDIVIDUAL</div>
                        <h3 class="font-serif font-semibold text-lg text-[#e5e5e5]">{{ $t('pricing.solo.name') }}</h3>
                        <p class="text-[10px] text-text-muted mt-1 min-h-[24px]">{{ $t('pricing.solo.desc') }}</p>
                        <div class="mt-4">
                            <span class="text-3xl font-semibold text-[#e5e5e5]">{{ $lang.lang === 'fr' ? '149 $' : '$149' }}</span>
                            <span class="text-[9px] font-mono text-text-muted block mt-1">({{ $t('pricing.period') }})</span>
                        </div>
                        <div class="border-b border-border/40 my-5"></div>
                        <ul class="space-y-3.5 text-xs">
                            <li v-for="item in $t('pricing.solo.features')" :key="item" class="flex items-start gap-2.5">
                                <span class="text-[#27c93f] text-[10px] font-semibold select-none mt-0.5">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                            <li v-for="item in $t('pricing.solo.disabled')" :key="item" class="flex items-start gap-2.5 opacity-35">
                                <span class="text-red-500 text-xs font-bold select-none">&times;</span>
                                <span class="text-text-muted/60 line-through">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="openCheckoutModal('solo')" class="btn-brand w-full py-2.5 text-xs font-mono uppercase tracking-wider mt-auto cursor-pointer">
                        {{ $t('pricing.solo.btn') }}
                    </button>
                </div>

                <!-- Pro Tier (Recommended / Border Glow) -->
                <div class="card flex flex-col justify-between p-6 border-brand bg-brand/[0.01] shadow-[0_0_40px_rgba(96,165,250,0.06)] relative transition-all duration-300 hover:shadow-[0_0_40px_rgba(96,165,250,0.12)] hover:border-brand/80 rounded-xl">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-3.5 py-1 bg-brand-dark text-white text-[9px] font-mono font-semibold tracking-wider rounded-full uppercase select-none shadow-[0_0_12px_rgba(59,130,246,0.3)]">
                        {{ $lang.lang === 'fr' ? 'Recommandé' : 'Recommended' }}
                    </div>
                    <div class="mb-6">
                        <div class="text-[9px] font-mono text-brand uppercase tracking-wider mb-2 mt-2">// POWER USER</div>
                        <h3 class="font-serif font-semibold text-lg text-[#e5e5e5]">{{ $t('pricing.pro.name') }}</h3>
                        <p class="text-[10px] text-text-muted mt-1 min-h-[24px]">{{ $t('pricing.pro.desc') }}</p>
                        <div class="mt-4">
                            <span class="text-3xl font-semibold text-[#e5e5e5]">{{ $lang.lang === 'fr' ? '199 $' : '$199' }}</span>
                            <span class="text-[9px] font-mono text-brand block mt-1">({{ $t('pricing.period') }})</span>
                        </div>
                        <div class="border-b border-brand/20 my-5"></div>
                        <ul class="space-y-3.5 text-xs">
                            <li v-for="item in $t('pricing.pro.features')" :key="item" class="flex items-start gap-2.5">
                                <span class="text-[#27c93f] text-[10px] font-semibold select-none mt-0.5">✓</span>
                                <span class="text-text">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="openCheckoutModal('pro')" class="btn-brand w-full py-2.5 text-xs font-mono uppercase tracking-wider mt-auto shadow-lg shadow-brand-dark/10 cursor-pointer">
                        {{ $t('pricing.pro.btn') }}
                    </button>
                </div>

                <!-- Comptable Tier -->
                <div class="card flex flex-col justify-between p-6 bg-surface-light border border-border/60 hover:border-border/100 transition-all duration-300 rounded-xl">
                    <div class="mb-6">
                        <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider mb-2">// CABINET & ENTERPRISE</div>
                        <h3 class="font-serif font-semibold text-lg text-[#e5e5e5]">{{ $t('pricing.comptable.name') }}</h3>
                        <p class="text-[10px] text-text-muted mt-1 min-h-[24px]">{{ $t('pricing.comptable.desc') }}</p>
                        <div class="mt-4">
                            <span class="text-3xl font-semibold text-[#e5e5e5]">{{ $lang.lang === 'fr' ? '399 $' : '$399' }}</span>
                            <span class="text-[9px] font-mono text-text-muted block mt-1">({{ $t('pricing.period') }})</span>
                        </div>
                        <div class="border-b border-border/40 my-5"></div>
                        <ul class="space-y-3.5 text-xs">
                            <li v-for="item in $t('pricing.comptable.features')" :key="item" class="flex items-start gap-2.5">
                                <span class="text-[#27c93f] text-[10px] font-semibold select-none mt-0.5">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="openCheckoutModal('comptable')" class="btn-brand w-full py-2.5 text-xs font-mono uppercase tracking-wider mt-auto cursor-pointer">
                        {{ $t('pricing.comptable.btn') }}
                    </button>
                </div>

            </div>
        </div>

        <!-- Checkout Email Modal Dialog -->
        <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center p-6 bg-surface/80 backdrop-blur-md transition-all duration-300">
            <div class="border border-border bg-[#161615] rounded-2xl p-8 max-w-md w-full relative shadow-2xl transition-all hover:border-border/100">
                <button @click="closeModal" class="absolute top-4 right-4 text-text-muted hover:text-[#e5e5e5] font-light text-xl select-none cursor-pointer">&times;</button>
                
                <h3 class="font-serif font-semibold text-xl mb-2 text-[#e5e5e5]">
                    {{ $lang.lang === 'fr' ? 'Informations de facturation' : 'Billing Information' }}
                </h3>
                <p class="text-xs text-text-muted mb-6">
                    {{ $lang.lang === 'fr' ? 'Saisissez votre adresse email pour recevoir votre licence après achat.' : 'Enter your email address to receive your license key after purchase.' }}
                </p>

                <form @submit.prevent="submitCheckout" class="space-y-5">
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
                            class="w-full bg-[#0a0a0a] border border-border focus:border-brand focus:ring-1 focus:ring-brand focus:shadow-[0_0_15px_rgba(96,165,250,0.12)] rounded-lg px-4 py-3 text-sm text-[#e5e5e5] outline-none transition-all"
                        />
                    </div>

                    <div v-if="errorMsg" class="text-red-400 text-xs font-mono">
                        {{ errorMsg }}
                    </div>

                    <div class="flex items-center gap-4 pt-2">
                        <button type="button" @click="closeModal" class="btn-outline flex-1 py-3 text-xs font-mono uppercase tracking-wider cursor-pointer">
                            {{ $lang.lang === 'fr' ? 'Annuler' : 'Cancel' }}
                        </button>
                        <button type="submit" :disabled="loading" class="btn-brand flex-1 py-3 text-xs font-mono uppercase tracking-wider cursor-pointer disabled:opacity-50">
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
