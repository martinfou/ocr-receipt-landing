<template>
    <section id="faq" class="py-24 lg:py-32">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl lg:text-4xl font-serif font-semibold text-center mb-16 tracking-[-0.01em]">
                Frequently Asked Questions
            </h2>

            <div class="space-y-4">
                <div v-for="(item, i) in faqs" :key="i"
                     class="card cursor-pointer select-none transition-all duration-300"
                     :class="openIndex === i ? 'border-brand/40 bg-surface-light' : 'hover:border-border'"
                     @click="toggle(i)">
                    
                    <!-- Question Header -->
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-base text-[#e5e5e5]">{{ item.q }}</h3>
                        <span class="text-brand text-xl font-light shrink-0 transition-transform duration-300" 
                              :class="openIndex === i ? 'rotate-45 text-brand' : 'text-text-muted'">
                            +
                        </span>
                    </div>
                    
                    <!-- Answer Section with Grid Height Transition -->
                    <div class="accordion-transition" :class="{ 'is-open': openIndex === i }">
                        <div class="accordion-inner">
                            <div class="pt-4 text-sm text-text-muted leading-relaxed">
                                {{ item.a }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'FaqSection',
    data() {
        return {
            openIndex: null,
            faqs: [
                {
                    q: 'Does OCR Receipt need an internet connection?',
                    a: 'No. OCR Receipt runs entirely offline. The OCR engine, AI model, and all processing happen on your computer. Your receipts never leave your machine.'
                },
                {
                    q: 'What platforms are supported?',
                    a: 'Windows (NSIS installer), macOS (DMG, signed), and Linux (AppImage). All three platforms are built and tested with every release.'
                },
                {
                    q: 'What file formats are supported?',
                    a: 'PDF receipts are the primary format. The app converts PDF pages to images for OCR processing. Multi-page PDFs are fully supported with batch processing.'
                },
                {
                    q: 'How accurate is the AI extraction?',
                    a: 'The local DeepSeek model achieves high accuracy on standard receipt fields: vendor name, date, total amount, and category. For complex or damaged receipts, you can use the optional cloud AI (5¢/page) for even better results.'
                },
                {
                    q: 'Can I export to my accounting software?',
                    a: 'Yes. Export to CSV that can be imported into Excel, Google Sheets, QuickBooks, or any accounting software. PDF reports are also available for client presentation.'
                },
                {
                    q: 'Is my data stored in the cloud?',
                    a: 'No. All data is stored locally in an open SQLite database on your computer. You own every byte. No account required, no telemetry, no cloud dependency.'
                },
            ]
        };
    },
    methods: {
        toggle(i) {
            this.openIndex = this.openIndex === i ? null : i;
        }
    }
};
</script>

