<template>
    <section id="pricing" class="py-24 lg:py-32 bg-surface-light/30 border-y border-border/40">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em]">
                    Simple pricing. <span class="text-brand">No subscription.</span>
                </h2>
                <p class="text-text-muted max-w-xl mx-auto">
                    Start free. Pay only if you need more.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto items-stretch">
                <!-- Free Tier -->
                <div class="card flex flex-col justify-between hover:border-border transition-all duration-300">
                    <div>
                        <h3 class="font-serif font-semibold text-xl mb-1 text-[#e5e5e5]">Free</h3>
                        <p class="text-xs text-text-muted mb-6">For personal or light use</p>
                        <div class="text-4xl font-semibold mb-6 text-[#e5e5e5]">$0</div>
                        <div class="border-b border-border/50 mb-6"></div>
                        <ul class="space-y-4 text-sm mb-8">
                            <li v-for="item in freeTier" :key="item" class="flex items-start gap-2.5">
                                <span class="text-brand text-xs mt-0.5">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="startCheckout('free')" class="btn-outline w-full text-center py-2.5 mt-auto">
                        Download Free
                    </button>
                </div>

                <!-- Cloud Pay-per-use -->
                <div class="card flex flex-col justify-between border-brand/40 bg-brand/[0.02] shadow-[0_0_30px_rgba(59,130,246,0.05)] relative hover:border-brand/60 transition-all duration-300">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-brand-dark text-white text-[10px] font-mono font-semibold tracking-wider rounded-full uppercase">
                        Most Popular
                    </div>
                    <div>
                        <h3 class="font-serif font-semibold text-xl mb-1 text-[#e5e5e5] mt-2">Cloud</h3>
                        <p class="text-xs text-text-muted mb-6">For occasional high accuracy</p>
                        <div class="text-4xl font-semibold mb-1 text-[#e5e5e5]">5¢</div>
                        <div class="text-xs text-text-muted mb-6">per scanned page</div>
                        <div class="border-b border-brand/10 mb-6"></div>
                        <ul class="space-y-4 text-sm mb-8">
                            <li v-for="item in cloudTier" :key="item" class="flex items-start gap-2.5">
                                <span class="text-brand text-xs mt-0.5">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="startCheckout('cloud')" class="btn-brand w-full text-center py-2.5 mt-auto">
                        Buy Credits
                    </button>
                </div>

                <!-- Pro Tier -->
                <div class="card flex flex-col justify-between hover:border-border transition-all duration-300">
                    <div>
                        <h3 class="font-serif font-semibold text-xl mb-1 text-[#e5e5e5]">Pro</h3>
                        <p class="text-xs text-text-muted mb-6">Unlimited local scans</p>
                        <div class="text-4xl font-semibold mb-1 text-[#e5e5e5]">$199</div>
                        <div class="text-xs text-text-muted mb-6">one-time payment</div>
                        <div class="border-b border-border/50 mb-6"></div>
                        <ul class="space-y-4 text-sm mb-8">
                            <li v-for="item in proTier" :key="item" class="flex items-start gap-2.5">
                                <span class="text-brand text-xs mt-0.5">✓</span>
                                <span class="text-text-muted">{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                    <button @click="startCheckout('pro')" class="btn-brand w-full text-center py-2.5 mt-auto">
                        Buy Pro License
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>


<script>
export default {
    name: 'PricingSection',
    data() {
        return {
            freeTier: [
                'Local OCR + AI extraction',
                '30 receipts per month',
                'All export formats (CSV, PDF)',
                'Projects & categories',
                'Windows, Mac & Linux',
            ],
            cloudTier: [
                'All Free features',
                'Cloud AI for better accuracy',
                'Pay only when you use it',
                'No commitment',
                'Great for complex receipts',
            ],
            proTier: [
                'Everything unlimited',
                'Unlimited receipts',
                'Cloud AI included',
                'Batch processing',
                'Priority support',
            ],
        };
    },
    methods: {
        startCheckout(tier) {
            const prices = { free: null, cloud: null, pro: 'price_pro_199' };
            if (!prices[tier]) return;

            fetch('/checkout', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content },
                body: JSON.stringify({ tier })
            })
            .then(r => r.json())
            .then(data => {
                if (data.url) window.location.href = data.url;
            })
            .catch(() => { window.location.href = '/checkout/cancel'; });
        }
    }
};
</script>
