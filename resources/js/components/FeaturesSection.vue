<template>
    <section id="features" class="py-24 lg:py-32">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-wrap-balance">
                    Everything you need to<br/>manage your receipts
                </h2>
                <p class="text-text-muted max-w-xl mx-auto">
                    From PDF to structured data in seconds. No internet required. No monthly fees.
                </p>
            </div>

            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Row 1, Card 1: 100% Offline & Private (2 cols) -->
                <div class="card md:col-span-2 border-brand/20 bg-brand/5 shadow-[inset_0_1px_1px_rgba(255,255,255,0.05),0_0_30px_rgba(59,130,246,0.03)] flex flex-col justify-between min-h-[220px]">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-brand/10 flex items-center justify-center mb-5 border border-brand/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-xl mb-2 text-[#e5e5e5]">100% Offline & Private</h3>
                        <p class="text-sm text-text-muted leading-relaxed max-w-xl">
                            No account creation, no cloud servers, no trackers. All operations happen on your hardware. Your receipts, database, and configurations are stored in an open SQLite database directly on your system.
                        </p>
                    </div>
                    <div class="mt-4 flex items-center gap-4 text-xs font-mono text-brand/80">
                        <span>// SECURE SANDBOX</span>
                        <span>// NO EXTERNAL LOGS</span>
                    </div>
                </div>

                <!-- Row 1, Card 2: Local OCR Engine (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px]">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">Local OCR Engine</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            Extract text from PDF and images using an embedded high-performance OCR engine running locally.
                        </p>
                    </div>
                </div>

                <!-- Row 2, Card 3: AI-Powered Extraction (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px]">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">AI-Powered Extraction</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            DeepSeek local LLM models identify vendor names, transaction dates, totals, taxes, and items automatically.
                        </p>
                    </div>
                </div>

                <!-- Row 2, Card 4: Smart Business Matching (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px]">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">Business Matching</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            Fuzzy matching automatically categorizes and links receipts to existing vendors, learning naming variations over time.
                        </p>
                    </div>
                </div>

                <!-- Row 2, Card 5: Projects & Categories (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px]">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">Projects & Folders</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            Organize files by client or tax code. Define templated output rules for renaming files based on extraction.
                        </p>
                    </div>
                </div>

                <!-- Row 3, Card 6: PDF Reports & Exports (2 cols) -->
                <div class="card md:col-span-2 flex flex-col justify-between min-h-[220px]">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-xl mb-2 text-[#e5e5e5]">PDF Reports & Multi-Format Export</h3>
                        <p class="text-sm text-text-muted leading-relaxed max-w-xl">
                            Compile tax logs into clean PDF tables with embedded receipt clippings. Export structured CSV files formatted to drop straight into Excel, Google Sheets, or accounting software.
                        </p>
                    </div>
                    <div class="mt-4 flex items-center gap-4 text-xs font-mono text-text-muted">
                        <span>// EXCEL COMPATIBLE</span>
                        <span>// EXPENSE REPORTS READY</span>
                    </div>
                </div>

                <!-- Row 3, Card 7: Native Platform Support (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px]">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">Native App Support</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            Native binaries compiled for macOS (signed DMG), Windows (NSIS installer), and Linux (AppImage) with auto-updates.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'FeaturesSection'
};
</script>

