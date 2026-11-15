<template>
    <section id="pricing" class="py-24 lg:py-32 bg-surface border-y border-border relative">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-3 flex items-center justify-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
                    {{ $lang.lang === 'fr' ? 'Licence Perpétuelle' : 'Perpetual Licensing' }}
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-wrap-balance text-text" v-html="$t('pricing.title')">
                </h2>
                <p class="text-text-muted max-w-xl mx-auto text-sm">
                    {{ $t('pricing.subtitle') }}
                </p>
            </div>

            <!-- Subscription Fatigue & Data Ownership Comparison -->
            <div class="mb-20 border border-border bg-surface-light/50 backdrop-blur-md rounded-2xl p-8 lg:p-10 shadow-xl max-w-4xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <!-- Left: Anti-SaaS Hook -->
                    <div class="lg:col-span-5">
                        <div class="text-[9px] font-mono text-brand uppercase tracking-wider mb-2">// OWNERSHIP REVOLUTION</div>
                        <h3 class="font-serif font-semibold text-2xl text-text mb-4">
                            {{ $lang.lang === 'fr' ? 'Fatigué des abonnements ?' : 'Tired of subscriptions?' }}
                        </h3>
                        <p class="text-xs text-text-muted leading-relaxed mb-6">
                            {{ $lang.lang === 'fr' ? 'En tant que travailleur autonome, j\'ai créé OCR Receipt parce que j\'en avais assez de payer des abonnements mensuels pour un outil qui devrait simplement tourner sur mon ordinateur. Pire encore : la plupart des services cloud exigent d\'envoyer vos factures sur des serveurs distants. OCR Receipt fonctionne 100% localement à vie sur votre disque dur : aucun abonnement, aucune donnée partagée.' : 'As an independent contractor myself, I built OCR Receipt because I was tired of paying recurring monthly rent just to organize my own business receipts. Worse, cloud services force you to upload sensitive client and tax invoices to remote servers. OCR Receipt runs strictly on your machine: pay once, run 100% offline, and own your archive forever.' }}
                        </p>
                        
                        <!-- Financial ROI highlight -->
                        <div class="inline-flex items-center gap-3 px-4 py-2.5 rounded-lg border border-brand/20 bg-brand/[0.02] text-xs font-mono text-brand-dark">
                            <span class="text-lg">🛡️</span>
                            <div>
                                <span class="font-bold">{{ $lang.lang === 'fr' ? 'Données 100% Souveraines' : '100% Sovereign Data' }}</span>
                                <span class="text-[10px] text-text-muted block font-sans">{{ $lang.lang === 'fr' ? 'Aucune connexion requise, aucun cloud forced' : 'No connection required, zero cloud forced' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Comparison Grid -->
                    <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4 border-l border-border/20 pl-0 lg:pl-8">
                        
                        <!-- Column 1: Renting (SaaS) -->
                        <div class="p-4 rounded-xl border border-red-500/20 bg-red-500/[0.01]">
                            <div class="text-[9px] font-mono text-red-400 uppercase tracking-widest mb-3 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span>
                                {{ $lang.lang === 'fr' ? 'SaaS (Louer)' : 'SaaS (Rent)' }}
                            </div>
                            <ul class="space-y-3 text-[11px] text-text-muted">
                                <li class="flex items-start gap-2">
                                    <span class="text-red-400 font-bold select-none">&times;</span>
                                    <span>{{ $lang.lang === 'fr' ? 'Facture mensuelle récurrente et prélèvements sans fin' : 'Endless monthly billing cycles and micro-transactions' }}</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-400 font-bold select-none">&times;</span>
                                    <span>{{ $lang.lang === 'fr' ? 'Données hébergées sur le cloud (risque de piratage)' : 'Cloud database hosting (vulnerable to breaches)' }}</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-400 font-bold select-none">&times;</span>
                                    <span>{{ $lang.lang === 'fr' ? 'Accès bloqué instantanément en cas d\'impayé' : 'Instant loss of tool access if billing lapses' }}</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-400 font-bold select-none">&times;</span>
                                    <span>{{ $lang.lang === 'fr' ? 'Vos reçus confidentiels analysés par des tiers' : 'Your financial files processed by corporate clouds' }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Column 2: Owning (OCR Receipt) -->
                        <div class="p-4 rounded-xl border border-brand bg-brand/[0.01] shadow-[0_0_20px_rgba(34,197,94,0.03)]">
                            <div class="text-[9px] font-mono text-brand-dark uppercase tracking-widest mb-3 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand shadow-[0_0_8px_rgba(34,197,94,0.4)]"></span>
                                {{ $lang.lang === 'fr' ? 'OCR Receipt (Posséder)' : 'OCR Receipt (Own)' }}
                            </div>
                            <ul class="space-y-3 text-[11px] text-text">
                                <li class="flex items-start gap-2">
                                    <span class="text-[#27c93f] font-semibold select-none">✓</span>
                                    <span>{{ $lang.lang === 'fr' ? 'Achat unique à vie, aucun frais récurrent' : 'One-time purchase, zero monthly billing cycles' }}</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-[#27c93f] font-semibold select-none">✓</span>
                                    <span>{{ $lang.lang === 'fr' ? '100% stocké sur votre disque dur (sécurité absolue)' : '100% on your local drive (zero external access)' }}</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-[#27c93f] font-semibold select-none">✓</span>
                                    <span>{{ $lang.lang === 'fr' ? 'Licence perpétuelle sans expiration' : 'Perpetual key that is yours to keep forever' }}</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-[#27c93f] font-semibold select-none">✓</span>
                                    <span>{{ $lang.lang === 'fr' ? 'Aucune télémétrie, aucune donnée partagée' : 'Zero telemetry, zero remote server sharing' }}</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- 5-Year Competitor TCO Comparison Bar (NeatReceipts, Dext, Hubdoc, Shoeboxed vs OCR Receipt) -->
                <div class="mt-8 pt-6 border-t border-border/40">
                    <div class="text-[10px] font-mono text-text-muted uppercase tracking-widest mb-4 flex items-center justify-between">
                        <span>{{ $lang.lang === 'fr' ? '// COMPARATIF DU COÛT SUR 5 ANS (CAD)' : '// 5-YEAR TOTAL COST OF OWNERSHIP (CAD)' }}</span>
                        <a href="/vs/neat" class="text-brand hover:underline">{{ $lang.lang === 'fr' ? 'Voir le comparatif NeatReceipts & Dext →' : 'Compare vs NeatReceipts & Dext →' }}</a>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs">
                        <div class="p-3 rounded-xl border border-brand/40 bg-brand/[0.04]">
                            <div class="text-[10px] font-mono text-brand font-semibold">OCR Receipt Pro</div>
                            <div class="text-lg font-bold text-text mt-0.5">{{ $lang.lang === 'fr' ? '199 $ CAD' : '$199 CAD' }}</div>
                            <div class="text-[10px] text-text-muted">{{ $lang.lang === 'fr' ? 'Achat unique · 100% Local' : 'One-time · 100% Offline' }}</div>
                        </div>
                        <div class="p-3 rounded-xl border border-border bg-surface/60">
                            <div class="text-[10px] font-mono text-red-400">NeatReceipts (Neat.com)</div>
                            <div class="text-lg font-bold text-text-muted line-through decoration-red-500/60 mt-0.5">{{ $lang.lang === 'fr' ? '1 375 $ – 2 400 $' : '$1,375 – $2,400' }}</div>
                            <div class="text-[10px] text-text-muted">{{ $lang.lang === 'fr' ? '~275–480 $/an · Cloud forcé' : '~$275–$480/yr · Forced Cloud' }}</div>
                        </div>
                        <div class="p-3 rounded-xl border border-border bg-surface/60">
                            <div class="text-[10px] font-mono text-red-400">Dext Prepare</div>
                            <div class="text-lg font-bold text-text-muted line-through decoration-red-500/60 mt-0.5">{{ $lang.lang === 'fr' ? '~2 075 $ CAD' : '~$2,075 CAD' }}</div>
                            <div class="text-[10px] text-text-muted">{{ $lang.lang === 'fr' ? '~415 $/an · Abonnement' : '~$415/yr · Cloud SaaS' }}</div>
                        </div>
                        <div class="p-3 rounded-xl border border-border bg-surface/60">
                            <div class="text-[10px] font-mono text-red-400">Shoeboxed Pro</div>
                            <div class="text-lg font-bold text-text-muted line-through decoration-red-500/60 mt-0.5">{{ $lang.lang === 'fr' ? '~2 050 $ CAD' : '~$2,050 CAD' }}</div>
                            <div class="text-[10px] text-text-muted">{{ $lang.lang === 'fr' ? '~410 $/an · Serveurs US' : '~$410/yr · US Cloud' }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing Grid (3-Tier Sovereign Architecture: Free Lite $0 / Pro $199 CAD / Cabinet $399 CAD) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch max-w-5xl mx-auto">
                
                <!-- Free Lite Tier ($0 Forever) -->
                <div class="card flex flex-col justify-between p-7 bg-surface-light border border-border hover:border-border/200 transition-all duration-300 rounded-2xl">
                    <div class="mb-6">
                        <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider mb-2">// FOREVER FREE</div>
                        <h3 class="font-serif font-semibold text-xl text-text">{{ $t('pricing.freeLite.name') }}</h3>
                        <p class="text-xs text-text-muted mt-1 min-h-[24px]">{{ $t('pricing.freeLite.desc') }}</p>
                        <div class="mt-4">
                            <span class="text-4xl font-semibold text-text">{{ $lang.lang === 'fr' ? '0 $' : '$0' }}</span>
                            <span class="text-xs font-mono text-text-muted ml-1">CAD</span>
                            <span class="text-[10px] font-mono text-text-muted block mt-1">({{ $lang.lang === 'fr' ? 'gratuit à vie · sans carte de crédit' : 'free forever · no credit card' }})</span>
                        </div>
                        <div class="border-b border-border my-5"></div>
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
                    <a href="#download" class="btn-outline w-full text-center py-3 text-xs font-mono uppercase tracking-wider mt-auto cursor-pointer">
                        {{ $t('pricing.freeLite.btn') }}
                    </a>
                </div>

                <!-- Pro Tier ($199 CAD — Recommended / Flagship) -->
                <div class="card flex flex-col justify-between p-7 border-2 border-brand bg-brand/[0.02] shadow-[0_0_45px_rgba(34,197,94,0.08)] relative transition-all duration-300 hover:shadow-[0_0_50px_rgba(34,197,94,0.16)] hover:border-brand/90 rounded-2xl lg:-translate-y-2">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 bg-brand-dark text-white text-[9px] font-mono font-semibold tracking-wider rounded-full uppercase select-none shadow-[0_0_12px_rgba(34,197,94,0.3)] whitespace-nowrap">
                        {{ $lang.lang === 'fr' ? '★ Le Choix des Indépendants & PME' : '★ Most Popular · Freelancers & SMBs' }}
                    </div>
                    <div class="mb-6">
                        <div class="text-[9px] font-mono text-brand uppercase tracking-wider mb-2 mt-2">// PRO · 2 DEVICES</div>
                        <h3 class="font-serif font-semibold text-xl text-text">{{ $t('pricing.pro.name') }}</h3>
                        <p class="text-xs text-text-muted mt-1 min-h-[24px]">{{ $t('pricing.pro.desc') }}</p>
                        <div class="mt-4">
                            <span class="text-4xl font-semibold text-text">{{ $lang.lang === 'fr' ? '199 $' : '$199' }}</span>
                            <span class="text-xs font-mono text-brand font-semibold ml-1">CAD</span>
                            <span class="text-[10px] font-mono text-brand block mt-1">({{ $t('pricing.period') }} · ~145 $ USD)</span>
                        </div>
                        <div class="mt-3 inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-brand/10 border border-brand/20 text-[10px] font-mono text-brand-dark">
                            <span>💰</span>
                            <span>{{ $lang.lang === 'fr' ? 'Économisez 1 800 $+ sur 5 ans vs SaaS' : 'Save $1,800+ CAD over 5 yrs vs SaaS' }}</span>
                        </div>
                        <div class="border-b border-brand/20 my-5"></div>
                        <ul class="space-y-3.5 text-xs">
                            <li v-for="item in $t('pricing.pro.features')" :key="item" class="flex items-start gap-2.5">
                                <span class="text-[#27c93f] text-[10px] font-semibold select-none mt-0.5">✓</span>
                                <span class="text-text font-medium">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button @click="openCheckoutModal('pro')" class="btn-brand w-full py-3 text-xs font-mono uppercase tracking-wider mt-auto shadow-lg shadow-brand-dark/15 cursor-pointer">
                            {{ $t('pricing.pro.btn') }}
                        </button>
                        <div class="text-center text-[10px] font-mono text-text-muted mt-2.5">
                            {{ $lang.lang === 'fr' ? '✓ Garantie 30 jours · 100% déductible d\'impôt' : '✓ 30-day money-back guarantee · 100% tax-deductible' }}
                        </div>
                    </div>
                </div>

                <!-- Comptable / Firm Tier ($399 CAD — 5 Seats) -->
                <div class="card flex flex-col justify-between p-7 bg-surface-light border border-border hover:border-border/200 transition-all duration-300 rounded-2xl">
                    <div class="mb-6">
                        <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider mb-2">// CABINET & ÉQUIPE (5 POSTES)</div>
                        <h3 class="font-serif font-semibold text-xl text-text">{{ $t('pricing.comptable.name') }}</h3>
                        <p class="text-xs text-text-muted mt-1 min-h-[24px]">{{ $t('pricing.comptable.desc') }}</p>
                        <div class="mt-4">
                            <span class="text-4xl font-semibold text-text">{{ $lang.lang === 'fr' ? '399 $' : '$399' }}</span>
                            <span class="text-xs font-mono text-text-muted ml-1">CAD</span>
                            <span class="text-[10px] font-mono text-text-muted block mt-1">({{ $t('pricing.period') }} · {{ $lang.lang === 'fr' ? '79,80 $ / poste' : '$79.80 CAD / seat' }})</span>
                        </div>
                        <div class="border-b border-border my-5"></div>
                        <ul class="space-y-3.5 text-xs">
                            <li v-for="item in $t('pricing.comptable.features')" :key="item" class="flex items-start gap-2.5">
                                <span class="text-[#27c93f] text-[10px] font-semibold select-none mt-0.5">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button @click="openCheckoutModal('comptable')" class="btn-brand w-full py-3 text-xs font-mono uppercase tracking-wider mt-auto cursor-pointer">
                            {{ $t('pricing.comptable.btn') }}
                        </button>
                        <div class="text-center text-[10px] font-mono text-text-muted mt-2.5">
                            {{ $lang.lang === 'fr' ? '✓ 5 licences perpétuelles · Support prioritaire' : '✓ 5 perpetual seats · Priority onboarding' }}
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Checkout Email Modal Dialog -->
        <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center p-6 bg-surface/80 backdrop-blur-md transition-all duration-300">
            <div class="border border-border bg-surface-light rounded-2xl p-8 max-w-md w-full relative shadow-2xl transition-all hover:border-border/200">
                <button @click="closeModal" class="absolute top-4 right-4 text-text-muted hover:text-text font-light text-xl select-none cursor-pointer">&times;</button>
                
                <h3 class="font-serif font-semibold text-xl mb-2 text-text">
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
                            class="w-full bg-surface border border-border focus:border-brand focus:ring-1 focus:ring-brand focus:shadow-[0_0_15px_rgba(34,197,94,0.12)] rounded-lg px-4 py-3 text-sm text-text outline-none transition-all"
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
