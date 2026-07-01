<template>
    <section id="pricing" class="py-24 lg:py-32 bg-surface-light/50">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4">
                    Simple pricing. <span class="gradient-text">No subscription.</span>
                </h2>
                <p class="text-text-muted max-w-xl mx-auto">
                    Start free. Pay only if you need more.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <!-- Free Tier -->
                <div class="card flex flex-col">
                    <h3 class="font-serif font-semibold text-xl mb-1">Free</h3>
                    <p class="text-sm text-text-muted mb-6">For light users</p>
                    <div class="text-3xl font-bold mb-6">$0</div>
                    <ul class="space-y-3 text-sm mb-8 flex-1">
                        <li v-for="item in freeTier" :key="item" class="flex items-start gap-2">
                            <span class="text-brand mt-0.5">✓</span>
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                    <button @click="startCheckout('free')" class="btn-outline w-full text-center">
                        Download Free
                    </button>
                </div>

                <!-- Cloud Pay-per-use -->
                <div class="card flex flex-col border-brand/30 glow relative">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-brand text-white text-xs font-semibold rounded-full">
                        MOST POPULAR
                    </div>
                    <h3 class="font-serif font-semibold text-xl mb-1">Cloud</h3>
                    <p class="text-sm text-text-muted mb-6">For occasional cloud AI</p>
                    <div class="text-3xl font-bold mb-1">5¢</div>
                    <div class="text-sm text-text-muted mb-6">per page</div>
                    <ul class="space-y-3 text-sm mb-8 flex-1">
                        <li v-for="item in cloudTier" :key="item" class="flex items-start gap-2">
                            <span class="text-brand mt-0.5">✓</span>
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                    <button @click="startCheckout('cloud')" class="btn-brand w-full text-center">
                        Buy Credits
                    </button>
                </div>

                <!-- Pro Tier -->
                <div class="card flex flex-col">
                    <h3 class="font-serif font-semibold text-xl mb-1">Pro</h3>
                    <p class="text-sm text-text-muted mb-6">Unlimited everything</p>
                    <div class="text-3xl font-bold mb-1">$199</div>
                    <div class="text-sm text-text-muted mb-6">one-time</div>
                    <ul class="space-y-3 text-sm mb-8 flex-1">
                        <li v-for="item in proTier" :key="item" class="flex items-start gap-2">
                            <span class="text-brand mt-0.5">✓</span>
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                    <button @click="startCheckout('pro')" class="btn-brand w-full text-center">
                        Buy Pro
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
