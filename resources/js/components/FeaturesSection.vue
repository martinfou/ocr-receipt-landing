<template>
    <section id="features" class="py-24 lg:py-32">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-wrap-balance text-text" v-html="$t('features.title')">
                </h2>
                <p class="text-text-muted max-w-xl mx-auto">
                    {{ $t('features.subtitle') }}
                </p>
            </div>

            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Card 1: Confidentialité Totale (2 cols) -->
                <div @click="$emit('select-feature-tab', 1)" class="card md:col-span-2 border-brand/20 bg-brand/5 shadow-[inset_0_1px_1px_rgba(255,255,255,0.05),0_0_30px_rgba(59,130,246,0.03)] flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.privacyBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-brand/10 flex items-center justify-center mb-5 border border-brand/20 group-hover:border-brand/35 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-xl mb-2 text-text group-hover:text-text transition-colors">{{ $t('features.privacy.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed max-w-xl group-hover:text-text transition-colors">
                            {{ $t('features.privacy.desc') }}
                        </p>
                    </div>
                    <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="flex items-center gap-4 text-xs font-mono text-brand/80">
                            <span>// SECURE ENCLAVE</span>
                            <span>// NO SERVER LOGS</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs font-mono text-brand/80 group-hover:text-brand transition-colors">
                            <span>{{ $t('features.privacyClickToOpen') }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Correction par IA (1 col) -->
                <div @click="$emit('select-feature-tab', 2)" class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 hover:bg-brand/[0.01] cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.aiBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-surface-light flex items-center justify-center mb-5 border border-border group-hover:border-brand/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text group-hover:text-brand w-5 h-5 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-text group-hover:text-text transition-colors">{{ $t('features.ai.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors">
                            {{ $t('features.ai.desc') }}
                        </p>
                    </div>
                    <div class="mt-4 flex items-center gap-1.5 text-xs font-mono text-brand/80 group-hover:text-brand transition-colors">
                        <span>{{ $t('features.aiClickToOpen') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>

                <!-- Card 3: Batch Processing (1 col) -->
                <div @click="$emit('select-feature-tab', 3)" class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 hover:bg-brand/[0.01] cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.batchBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-surface-light flex items-center justify-center mb-5 border border-border group-hover:border-brand/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text group-hover:text-brand w-5 h-5 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h12M6 12h12M6 18h12" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-text group-hover:text-text transition-colors">{{ $t('features.batch.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors">
                            {{ $t('features.batch.desc') }}
                        </p>
                    </div>
                    <div class="mt-4 flex items-center gap-1.5 text-xs font-mono text-brand/80 group-hover:text-brand transition-colors">
                        <span>{{ $t('features.batchClickToOpen') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>

                <!-- Card 4: Matching Fournisseur (1 col) -->
                <div @click="$emit('select-feature-tab', 4)" class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 hover:bg-brand/[0.01] cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.matchBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-surface-light flex items-center justify-center mb-5 border border-border group-hover:border-brand/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text group-hover:text-brand w-5 h-5 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-text group-hover:text-text transition-colors">{{ $t('features.match.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors">
                            {{ $t('features.match.desc') }}
                        </p>
                    </div>
                    <div class="mt-4 flex items-center gap-1.5 text-xs font-mono text-brand/80 group-hover:text-brand transition-colors">
                        <span>{{ $t('features.matchClickToOpen') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>

                <!-- Card 5: Export CSV & Reports (1 col) -->
                <div @click="$emit('select-feature-tab', 5)" class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 hover:bg-brand/[0.01] cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.demoBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-surface-light flex items-center justify-center mb-5 border border-border group-hover:border-brand/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-text group-hover:text-brand w-5 h-5 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-text group-hover:text-text transition-colors">{{ $t('features.export.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed group-hover:text-text transition-colors">
                            {{ $t('features.export.desc') }}
                        </p>
                    </div>
                    <div class="mt-4 flex items-center gap-1.5 text-xs font-mono text-brand/80 group-hover:text-brand transition-colors">
                        <span>{{ $t('features.clickToOpen') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'FeaturesSection',
    emits: ['select-feature-tab']
};
</script>

<style scoped>
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.98); }
    to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
    animation: fadeIn 0.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
</style>
