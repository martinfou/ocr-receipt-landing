<template>
    <section id="features" class="py-24 lg:py-32">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4">
                    Everything you need to<br/>manage your receipts
                </h2>
                <p class="text-text-muted max-w-xl mx-auto">
                    From PDF to structured data in seconds. No internet required. No monthly fees.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div v-for="feature in features" :key="feature.title" class="card">
                    <div class="w-10 h-10 rounded-lg bg-brand/10 flex items-center justify-center mb-4">
                        <span class="text-brand text-lg">{{ feature.icon }}</span>
                    </div>
                    <h3 class="font-serif font-semibold text-lg mb-2">{{ feature.title }}</h3>
                    <p class="text-sm text-text-muted leading-relaxed">{{ feature.description }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'FeaturesSection',
    data() {
        return {
            features: [
                {
                    icon: '📄',
                    title: 'Local OCR Engine',
                    description: 'Extract text from PDF receipts using Tesseract OCR — runs entirely on your machine. No data ever leaves your computer.'
                },
                {
                    icon: '🤖',
                    title: 'AI-Powered Extraction',
                    description: 'DeepSeek local LLM automatically identifies vendor names, dates, totals, categories, and line items with high accuracy.'
                },
                {
                    icon: '🔍',
                    title: 'Smart Business Matching',
                    description: 'Fuzzy matching auto-links receipts to known vendors. The more you use it, the smarter it gets.'
                },
                {
                    icon: '📁',
                    title: 'Projects & Categories',
                    description: 'Organize receipts by project, category, or custom tags. Create naming templates for automatic file organization.'
                },
                {
                    icon: '📊',
                    title: 'PDF Reports & Exports',
                    description: 'Generate professional PDF reports, export to CSV. Perfect for accounting, taxes, or client billing.'
                },
                {
                    icon: '🔒',
                    title: '100% Offline & Private',
                    description: 'No account, no cloud, no subscription. Your financial data stays on your computer. Open SQLite format.'
                },
            ]
        };
    }
};
</script>
