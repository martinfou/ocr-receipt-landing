<template>
    <section id="features" class="py-24 lg:py-32">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-wrap-balance text-[#e5e5e5]" v-html="$t('features.title')">
                </h2>
                <p class="text-text-muted max-w-xl mx-auto">
                    {{ $t('features.subtitle') }}
                </p>
            </div>

            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Card 1: Confidentialité Totale (2 cols) -->
                <div class="card md:col-span-2 border-brand/20 bg-brand/5 shadow-[inset_0_1px_1px_rgba(255,255,255,0.05),0_0_30px_rgba(59,130,246,0.03)] flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/40">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-brand/10 flex items-center justify-center mb-5 border border-brand/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-xl mb-2 text-[#e5e5e5]">{{ $t('features.privacy.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed max-w-xl">
                            {{ $t('features.privacy.desc') }}
                        </p>
                    </div>
                    <div class="mt-4 flex items-center gap-4 text-xs font-mono text-brand/80">
                        <span>// SECURE ENCLAVE</span>
                        <span>// NO SERVER LOGS</span>
                    </div>
                </div>

                <!-- Card 2: Correction par IA (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-border-hover">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">{{ $t('features.ai.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            {{ $t('features.ai.desc') }}
                        </p>
                    </div>
                </div>

                <!-- Card 3: Batch Processing (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-border-hover">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h12M6 12h12M6 18h12" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">{{ $t('features.batch.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            {{ $t('features.batch.desc') }}
                        </p>
                    </div>
                </div>

                <!-- Card 4: Matching Fournisseur (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-border-hover">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">{{ $t('features.match.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            {{ $t('features.match.desc') }}
                        </p>
                    </div>
                </div>

                <!-- Card 5: Export CSV & Reports (1 col) -->
                <div class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-border-hover">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5]">{{ $t('features.export.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed">
                            {{ $t('features.export.desc') }}
                        </p>
                    </div>
                </div>

                <!-- Card 6: Interface Desktop (2 cols/3 cols) -->
                <div class="card md:col-span-2 lg:col-span-3 flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-border-hover bg-surface-light/50">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-5 border border-border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-xl mb-2 text-[#e5e5e5]">{{ $t('features.desktop.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed max-w-2xl">
                            {{ $t('features.desktop.desc') }}
                        </p>
                    </div>
                    <div class="mt-4 flex items-center gap-4 text-xs font-mono text-text-muted">
                        <span>// WINDOWS (NSIS)</span>
                        <span>// MACOS (DMG SIGNED)</span>
                        <span>// LINUX (APPIMAGE)</span>
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
