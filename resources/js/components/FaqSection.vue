<template>
    <section id="faq" class="py-24 lg:py-32">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl lg:text-4xl font-serif font-semibold text-center mb-12">
                Frequently Asked Questions
            </h2>

            <div class="space-y-4">
                <div v-for="(item, i) in faqs" :key="i"
                     class="card cursor-pointer select-none"
                     @click="toggle(i)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-sm">{{ item.q }}</h3>
                        <span class="text-amber text-lg transition-transform" :class="openIndex === i ? 'rotate-45' : ''">+</span>
                    </div>
                    <div v-if="openIndex === i" class="mt-4 text-sm text-text-muted leading-relaxed">
                        {{ item.a }}
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
