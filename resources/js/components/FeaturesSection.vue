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
                <div @click="openPrivacyModal" class="card md:col-span-2 border-brand/20 bg-brand/5 shadow-[inset_0_1px_1px_rgba(255,255,255,0.05),0_0_30px_rgba(59,130,246,0.03)] flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.privacyBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-brand/10 flex items-center justify-center mb-5 border border-brand/20 group-hover:border-brand/35 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-xl mb-2 text-[#e5e5e5] group-hover:text-[#ffffff] transition-colors">{{ $t('features.privacy.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed max-w-xl group-hover:text-[#e5e5e5] transition-colors">
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
                </div>>

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
                <div @click="openBatchModal" class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 hover:bg-brand/[0.01] cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.batchBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-[#161615] flex items-center justify-center mb-5 border border-border group-hover:border-brand/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] group-hover:text-brand w-5 h-5 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h12M6 12h12M6 18h12" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5] group-hover:text-[#ffffff] transition-colors">{{ $t('features.batch.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed group-hover:text-[#e5e5e5] transition-colors">
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
                <div @click="openMatchModal" class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 hover:bg-brand/[0.01] cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.matchBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-[#161615] flex items-center justify-center mb-5 border border-border group-hover:border-brand/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] group-hover:text-brand w-5 h-5 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5] group-hover:text-[#ffffff] transition-colors">{{ $t('features.match.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed group-hover:text-[#e5e5e5] transition-colors">
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
                <div @click="openModal" class="card flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 hover:bg-brand/[0.01] cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.demoBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-[#161615] flex items-center justify-center mb-5 border border-border group-hover:border-brand/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] group-hover:text-brand w-5 h-5 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg mb-2 text-[#e5e5e5] group-hover:text-[#ffffff] transition-colors">{{ $t('features.export.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed group-hover:text-[#e5e5e5] transition-colors">
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

                <!-- Card 6: Interface Desktop (2 cols/3 cols) -->
                <div @click="openSettingsModal" class="card md:col-span-2 lg:col-span-3 flex flex-col justify-between min-h-[220px] transition-all duration-300 hover:border-brand/45 hover:bg-brand/[0.01] cursor-pointer group relative">
                    <div class="absolute top-4 right-4 text-[8px] font-mono text-brand uppercase tracking-wider border border-brand/30 px-2 py-0.5 rounded-full bg-brand/5 group-hover:bg-brand/10 transition-colors">
                        {{ $t('features.settingsBadge') }}
                    </div>
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-[#161615] flex items-center justify-center mb-5 border border-border group-hover:border-brand/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-[#e5e5e5] group-hover:text-brand w-5 h-5 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-xl mb-2 text-[#e5e5e5] group-hover:text-[#ffffff] transition-colors">{{ $t('features.desktop.title') }}</h3>
                        <p class="text-sm text-text-muted leading-relaxed max-w-2xl group-hover:text-[#e5e5e5] transition-colors">
                            {{ $t('features.desktop.desc') }}
                        </p>
                    </div>
                    <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="flex items-center gap-4 text-xs font-mono text-text-muted">
                            <span>// WINDOWS (NSIS)</span>
                            <span>// MACOS (DMG SIGNED)</span>
                            <span>// LINUX (APPIMAGE)</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs font-mono text-brand/80 group-hover:text-brand transition-colors">
                            <span>{{ $t('features.settingsClickToOpen') }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Interactive Report Modal -->
        <div v-if="modalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-md transition-all duration-300" @click.self="closeModal">
            <div class="relative w-full max-w-5xl bg-[#161615] border border-border/80 rounded-2xl overflow-hidden shadow-[0_0_50px_rgba(96,165,250,0.15)] flex flex-col min-h-[550px] max-h-[90vh] animate-fadeIn">
                
                <!-- Modal Header -->
                <div class="p-6 border-b border-border/60 flex items-center justify-between bg-surface-light/40">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 border border-brand/20 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-4 h-4 animate-pulse">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-[#e5e5e5] font-serif font-semibold text-lg leading-tight">{{ $t('features.modal.title') }}</h2>
                            <p class="text-[10px] font-mono text-text-muted uppercase tracking-wider mt-0.5">// 100% OFFLINE DATA COMPILATION</p>
                        </div>
                    </div>
                    
                    <button @click="closeModal" class="p-2 text-text-muted hover:text-[#e5e5e5] transition-colors rounded-lg hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body (Two Column Layout) -->
                <div class="flex-1 flex flex-col md:flex-row overflow-y-auto min-h-0 bg-[#0a0a0a]">
                    
                    <!-- Left: Control Panel / Generator Progress -->
                    <div class="w-full md:w-[350px] p-6 border-r border-border/40 flex flex-col justify-between bg-[#161615]/30">
                        <div>
                            <!-- Source Info -->
                            <div class="space-y-4 mb-6">
                                <div class="space-y-1">
                                    <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">Source Scope</label>
                                    <div class="px-3 py-2 bg-[#0a0a0a] border border-border/60 rounded-lg text-xs text-text-muted font-mono truncate">
                                        /Volumes/T7/Dropbox/Factures/Facture 2025/
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="space-y-1">
                                        <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">Date range</label>
                                        <div class="px-3 py-1.5 bg-[#0a0a0a] border border-border/60 rounded-lg text-xs text-[#e5e5e5] font-mono text-center">
                                            2025 (Year)
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">Total receipts</label>
                                        <div class="px-3 py-1.5 bg-[#0a0a0a] border border-border/60 rounded-lg text-xs text-brand font-mono text-center font-bold">
                                            152 Reçus
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Preset Actions -->
                            <div v-if="reportStep === 'idle'" class="space-y-4">
                                <p class="text-xs text-text-muted leading-relaxed">
                                    {{ $t('features.modal.emptyState') }}
                                </p>
                                <button @click="startGeneration" class="w-full py-3 px-4 bg-brand hover:bg-brand-hover text-[#0a0a0a] font-serif font-bold rounded-lg transition-all shadow-[0_0_15px_rgba(96,165,250,0.2)] hover:scale-[1.01] flex items-center justify-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                                    </svg>
                                    {{ $t('features.modal.generate') }}
                                </button>
                            </div>

                            <!-- Progress Animation -->
                            <div v-if="reportStep === 'generating'" class="space-y-4">
                                <div class="flex justify-between items-center text-xs font-mono">
                                    <span class="text-brand animate-pulse">{{ $t('features.modal.generating') }}</span>
                                    <span class="text-text-muted">{{ progress }}%</span>
                                </div>
                                <div class="w-full bg-[#0a0a0a] rounded-full h-1.5 overflow-hidden border border-border/30">
                                    <div class="bg-brand h-full transition-all duration-100 ease-out" :style="{ width: progress + '%' }"></div>
                                </div>
                                
                                <!-- Terminal Logs -->
                                <div class="bg-[#0a0a0a] border border-border/60 rounded-lg p-3 h-[180px] overflow-y-auto font-mono text-[10px] text-green-400 space-y-1">
                                    <div v-for="(log, i) in logs" :key="i" class="leading-relaxed">
                                        {{ log }}
                                    </div>
                                    <div v-if="progress < 100" class="w-1.5 h-3 bg-green-400 animate-pulse inline-block"></div>
                                </div>
                            </div>

                            <!-- Done State Actions -->
                            <div v-if="reportStep === 'done'" class="space-y-4 animate-fadeIn">
                                <div class="p-3 bg-green-500/10 border border-green-500/30 rounded-lg flex items-center gap-3">
                                    <div class="w-6 h-6 rounded-full bg-green-500/20 border border-green-500/30 flex items-center justify-center text-green-400 text-xs">✓</div>
                                    <div class="text-xs">
                                        <div class="font-bold text-[#e5e5e5]">Rapport prêt!</div>
                                        <div class="text-text-muted text-[10px] font-mono">Format: PDF + HTML</div>
                                    </div>
                                </div>
                                
                                <div class="space-y-1.5 text-xs text-text-muted leading-relaxed">
                                    <p>Ce rapport contient un index complet et joint les copies de tous les reçus à la fin.</p>
                                    <p class="font-mono text-[10px]">// Fichier sauvegardé localement.</p>
                                </div>

                                <button @click="startGeneration" class="w-full py-2 px-3 border border-border hover:border-brand/40 hover:bg-[#0a0a0a] text-[#e5e5e5] text-xs font-mono rounded-lg transition-colors flex items-center justify-center gap-2">
                                    <span>↻ Regénérer</span>
                                </button>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="pt-4 border-t border-border/40 text-[9px] font-mono text-text-muted">
                            OCR RECEIPT DESKTOP V1.0.0
                        </div>
                    </div>

                    <!-- Right: Waved Content Report Preview (Simulates actual Report) -->
                    <div class="flex-1 flex flex-col md:flex-row min-h-0">
                        
                        <!-- Middle: Report sheet list -->
                        <div class="flex-1 p-6 overflow-y-auto min-h-0 bg-white text-[#111111] font-mono text-xs">
                            <div v-if="reportStep !== 'done'" class="h-full flex flex-col items-center justify-center text-center p-8 text-[#666666]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mb-4 text-[#888888]/40">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <p class="text-sm font-serif italic max-w-xs">Le rapport apparaîtra ici après la génération locale.</p>
                            </div>

                            <div v-if="reportStep === 'done'" class="space-y-6 animate-fadeIn">
                                <!-- Report Header -->
                                <div class="border-b-2 border-[#111111] pb-4">
                                    <h1 class="text-sm font-bold uppercase tracking-wide">RAPPORT DE RAPPROCHEMENT DES REÇUS</h1>
                                    <div class="grid grid-cols-2 gap-4 mt-4 text-[9px] text-[#444444]">
                                        <div>
                                            <div><strong>PROJET:</strong> All Projects</div>
                                            <div><strong>SOURCE:</strong> /Dropbox/Factures/Facture 2025/</div>
                                        </div>
                                        <div>
                                            <div><strong>DATE:</strong> 2026-07-01 16:20</div>
                                            <div><strong>RÉGISTRE:</strong> 152 Reçus</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Key Statistics -->
                                <div class="grid grid-cols-2 border-b border-[#dddddd] pb-4 gap-4">
                                    <div>
                                        <div class="text-[8px] uppercase text-[#666666]">REÇUS TOTALISÉS</div>
                                        <div class="text-sm font-bold">152 / 152</div>
                                    </div>
                                    <div>
                                        <div class="text-[8px] uppercase text-[#666666]">MONTANT TOTAL (CAD)</div>
                                        <div class="text-sm font-bold text-blue-600">CAD $239,690.83</div>
                                    </div>
                                </div>

                                <!-- Receipts List Table -->
                                <div>
                                    <h3 class="font-bold text-[10px] uppercase tracking-wider mb-2 text-[#444444]">Registre des Transactions</h3>
                                    <div class="border border-[#dddddd] rounded overflow-hidden">
                                        <table class="w-full text-[9px] border-collapse">
                                            <thead>
                                                <tr class="bg-[#f5f5f5] border-b border-[#dddddd]">
                                                    <th class="p-1.5 text-left font-bold w-[75px] border-none text-[#111111]">Date</th>
                                                    <th class="p-1.5 text-left font-bold border-none text-[#111111]">Fournisseur</th>
                                                    <th class="p-1.5 text-right font-bold w-[75px] border-none text-[#111111]">Montant</th>
                                                    <th class="p-1.5 text-center font-bold w-[95px] border-none text-[#111111]">Pièce Jointe</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="receipt in receipts" :key="receipt.date" 
                                                    @click="selectReceipt(receipt)"
                                                    class="border-b border-[#eeeeee] cursor-pointer hover:bg-blue-50/50 transition-colors"
                                                    :class="{ 'bg-blue-50 font-bold': selectedReceipt && selectedReceipt.date === receipt.date }">
                                                    <td class="p-1.5 text-left font-mono border-none text-[#111111]">{{ receipt.date }}</td>
                                                    <td class="p-1.5 text-left font-mono border-none text-[#111111]">{{ receipt.vendor }}</td>
                                                    <td class="p-1.5 text-right font-mono border-none text-[#111111]">{{ receipt.amount }}</td>
                                                    <td class="p-1.5 text-center border-none">
                                                        <span class="px-1.5 py-0.5 bg-blue-50 text-blue-600 border border-blue-200 rounded font-mono text-[8px] hover:bg-blue-600 hover:text-white transition-colors duration-150">
                                                            🔍 {{ $t('features.modal.viewReceipt') }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-[8px] text-[#666666] mt-2 italic">// Cliquez sur une ligne pour voir le reçu numérisé joint.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Sidebar: Selected visual receipt copy -->
                        <div class="w-full md:w-[280px] p-6 border-l border-border/40 bg-[#161615] overflow-y-auto min-h-0 flex flex-col justify-between text-text">
                            <div class="space-y-4">
                                <div class="text-[10px] font-mono text-text-muted uppercase tracking-wider border-b border-border/40 pb-2 flex justify-between items-center">
                                    <span>{{ $t('features.modal.receiptImage') }}</span>
                                    <span v-if="selectedReceipt" class="text-brand font-bold">{{ selectedReceipt.file }}</span>
                                </div>

                                <div v-if="!selectedReceipt" class="h-[280px] border border-dashed border-border/50 rounded-xl flex items-center justify-center text-center p-4 text-xs text-text-muted">
                                    Sélectionnez un reçu dans l'index de gauche pour afficher sa copie d'audit.
                                </div>

                                <!-- Styled CSS Receipt Copy Mockup -->
                                <div v-else class="bg-white text-[#111111] p-4 rounded shadow-lg font-mono text-[10px] border-t-4 border-brand space-y-4 relative overflow-hidden animate-fadeIn">
                                    <!-- Receipt visual elements -->
                                    <div class="text-center border-b border-dashed border-[#888888] pb-3">
                                        <div class="font-bold text-xs uppercase tracking-wider text-black">{{ selectedReceipt.vendor.toUpperCase() }}</div>
                                        <div class="text-[8px] text-[#555555]">SUCCURSALE #8762 - QUÉBEC</div>
                                        <div class="text-[8px] text-[#555555]">{{ selectedReceipt.date }} 12:43 PM</div>
                                    </div>
                                    
                                    <div class="space-y-1.5 border-b border-dashed border-[#888888] pb-3">
                                        <div class="flex justify-between text-black">
                                            <span>ITEM PRINCIPAL x1</span>
                                            <span>{{ selectedReceipt.amount }}</span>
                                        </div>
                                        <div class="text-[8px] text-[#666666] pl-2">* CODE PRO PRODUIT LOCAL</div>
                                    </div>

                                    <div class="space-y-1">
                                        <div class="flex justify-between text-[8px] text-[#555555]">
                                            <span>TPS/TVQ TAX</span>
                                            <span>{{ selectedReceipt.tax }}</span>
                                        </div>
                                        <div class="flex justify-between font-bold text-xs pt-1 text-black">
                                            <span>TOTAL CAD</span>
                                            <span>{{ selectedReceipt.amount }}</span>
                                        </div>
                                    </div>

                                    <div class="text-center pt-2">
                                        <!-- Barcode representation -->
                                        <div class="h-6 w-full bg-[#000000] flex items-center justify-center text-white text-[8px] tracking-[4px] font-bold overflow-hidden select-none opacity-80">
                                            ||||||||||| | ||||| | || ||| || ||
                                        </div>
                                        <div class="text-[7px] text-[#666666] mt-1">TRANSACTION CONFIRMÉE PAR IA LOCALE</div>
                                    </div>
                                </div>
                            </div>

                            <div v-if="selectedReceipt" class="pt-4 text-[9px] font-mono text-text-muted leading-tight border-t border-border/40 mt-4">
                                💡 <strong>Preuve d'Audit</strong> : L'application génère un PDF unique avec l'index des reçus cliquable et insère cette copie numérisée en pleine page à la fin pour votre comptable.
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- Interactive Batch Modal -->
        <div v-if="batchModalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-md transition-all duration-300" @click.self="closeBatchModal">
            <div class="relative w-full max-w-5xl bg-[#161615] border border-border/80 rounded-2xl overflow-hidden shadow-[0_0_50px_rgba(96,165,250,0.15)] flex flex-col min-h-[550px] max-h-[90vh] animate-fadeIn">
                
                <!-- Modal Header -->
                <div class="p-6 border-b border-border/60 flex items-center justify-between bg-surface-light/40">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 border border-brand/20 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-4 h-4 animate-pulse">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h12M6 12h12M6 18h12" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-[#e5e5e5] font-serif font-semibold text-lg leading-tight">{{ $t('features.batchModal.title') }}</h2>
                            <p class="text-[10px] font-mono text-text-muted uppercase tracking-wider mt-0.5">// LOCAL PARALLEL OCR RUNNER</p>
                        </div>
                    </div>
                    
                    <button @click="closeBatchModal" class="p-2 text-text-muted hover:text-[#e5e5e5] transition-colors rounded-lg hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body (Two Column Layout) -->
                <div class="flex-1 flex flex-col md:flex-row overflow-y-auto min-h-0 bg-[#0a0a0a]">
                    
                    <!-- Left Panel: Drag Zone, Options, Actions -->
                    <div class="w-full md:w-[350px] p-6 border-r border-border/40 flex flex-col justify-between bg-[#161615]/30">
                        <div class="space-y-6">
                            
                            <!-- Drag & Drop Zone Mockup -->
                            <div class="border-2 border-dashed border-border/80 hover:border-brand/40 bg-[#0a0a0a] p-6 rounded-xl text-center cursor-pointer transition-colors duration-200 group/drop flex flex-col items-center justify-center min-h-[140px]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-text-muted group-hover/drop:text-brand transition-colors mb-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                                <span class="text-[10px] font-mono text-text-muted group-hover/drop:text-[#e5e5e5] transition-colors leading-relaxed px-4 block">
                                    {{ $t('features.batchModal.dropzone') }}
                                </span>
                            </div>

                            <!-- Options Block -->
                            <div class="space-y-3">
                                <h4 class="text-[10px] font-mono text-text-muted uppercase tracking-wider">{{ $t('features.batchModal.options') }}</h4>
                                <div class="space-y-2">
                                    <div class="px-3 py-2 bg-[#0a0a0a] border border-border/60 rounded-lg text-xs text-text-muted font-mono flex justify-between items-center select-none">
                                        <span>{{ $t('features.batchModal.project') }}</span>
                                        <span class="text-[8px]">▼</span>
                                    </div>
                                    <div class="px-3 py-2 bg-[#0a0a0a] border border-border/60 rounded-lg text-xs text-text-muted font-mono flex justify-between items-center select-none">
                                        <span>{{ $t('features.batchModal.category') }}</span>
                                        <span class="text-[8px]">▼</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="space-y-3">
                                <button @click="startBatchProcessing" :disabled="batchStep === 'active'" class="w-full py-3 px-4 bg-brand hover:bg-brand-hover text-[#0a0a0a] font-serif font-bold rounded-lg transition-all shadow-[0_0_15px_rgba(96,165,250,0.2)] disabled:opacity-50 disabled:cursor-not-allowed hover:scale-[1.01] flex items-center justify-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.124 1.124 0 01-1.667-.985V5.653z" />
                                    </svg>
                                    {{ $t('features.batchModal.start') }}
                                </button>
                                <button @click="resetBatchQueue" :disabled="batchStep === 'active'" class="w-full py-2 px-3 border border-border hover:border-red-500/40 hover:bg-[#0a0a0a] text-text-muted hover:text-red-400 text-xs font-mono rounded-lg transition-colors flex items-center justify-center gap-2">
                                    {{ $t('features.batchModal.clear') }}
                                </button>
                            </div>
                        </div>

                        <!-- Footer Info -->
                        <div class="pt-4 border-t border-border/40 text-[9px] font-mono text-text-muted">
                            CPU LOGICAL THREADS: MULTI-CORE (8 CORE IA)
                        </div>
                    </div>

                    <!-- Right Panel: Documents Queue & Progress -->
                    <div class="flex-1 p-6 flex flex-col justify-between overflow-y-auto min-h-0">
                        <div class="space-y-6">
                            
                            <!-- Queue Header and Global Progress -->
                            <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-4 border-b border-border/40 pb-4">
                                <div>
                                    <h3 class="text-[#e5e5e5] font-serif font-semibold text-base">{{ $t('features.batchModal.queueTitle') }}</h3>
                                    <p class="text-[10px] font-mono text-text-muted mt-0.5">// Concurrency level: 3 parallel pipelines</p>
                                </div>
                                
                                <!-- Progress badge matching screenshot -->
                                <div class="w-full sm:w-[150px] bg-[#0a0a0a] border border-border/60 rounded p-1 flex items-center justify-between font-mono text-[10px]">
                                    <div class="bg-brand h-4 rounded transition-all duration-100 ease-out" :style="{ width: batchGlobalProgress + '%' }"></div>
                                    <span class="text-white px-2 font-bold">{{ batchGlobalProgress }}%</span>
                                </div>
                            </div>

                            <!-- Document Queue Table Mockup -->
                            <div class="border border-border/60 rounded-xl overflow-hidden bg-[#161615]/30">
                                <table class="w-full text-left font-mono text-xs border-collapse">
                                    <thead>
                                        <tr class="bg-surface-light/40 border-b border-border/60">
                                            <th class="p-3 text-text-muted text-[10px] uppercase font-bold border-none">{{ $t('features.batchModal.colName') }}</th>
                                            <th class="p-3 text-text-muted text-[10px] uppercase font-bold w-[90px] border-none text-right">{{ $t('features.batchModal.colSize') }}</th>
                                            <th class="p-3 text-text-muted text-[10px] uppercase font-bold w-[100px] border-none text-center">{{ $t('features.batchModal.colStatus') }}</th>
                                            <th class="p-3 text-text-muted text-[10px] uppercase font-bold w-[120px] border-none">{{ $t('features.batchModal.colProgress') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="file in batchFiles" :key="file.name" class="border-b border-border/40 hover:bg-white/[0.01] transition-colors duration-150">
                                            <td class="p-3 text-[#e5e5e5] font-medium truncate max-w-[200px] border-none">{{ file.name }}</td>
                                            <td class="p-3 text-text-muted text-right border-none">{{ file.size }}</td>
                                            <td class="p-3 border-none text-center">
                                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold" 
                                                    :class="{
                                                        'bg-white/5 text-text-muted border border-border/30': file.status === 'pending',
                                                        'bg-brand/10 text-brand border border-brand/20 animate-pulse': file.status === 'active',
                                                        'bg-green-500/10 text-green-400 border border-green-500/20': file.status === 'done'
                                                    }">
                                                    {{ 
                                                        file.status === 'pending' ? $t('features.batchModal.statusPending') :
                                                        file.status === 'active' ? $t('features.batchModal.statusActive') :
                                                        $t('features.batchModal.statusDone')
                                                    }}
                                                </span>
                                            </td>
                                            <td class="p-3 border-none">
                                                <div class="w-full bg-[#0a0a0a] rounded-full h-1.5 overflow-hidden border border-border/30">
                                                    <div class="h-full transition-all duration-100 ease-out" 
                                                        :class="{
                                                            'bg-brand': file.status === 'active',
                                                            'bg-green-400': file.status === 'done',
                                                            'bg-transparent': file.status === 'pending'
                                                        }"
                                                        :style="{ width: file.progress + '%' }"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!-- Info Tips -->
                        <div class="mt-6 p-4 bg-brand/5 border border-brand/20 rounded-xl text-xs text-text-muted leading-relaxed">
                            💡 <strong>Traitement local asynchrone</strong> : Vos fichiers sont analysés en parallèle par un modèle d'IA ultra-rapide. L'application reste réactive et fluide pendant le traitement en tâche de fond.
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Interactive Settings Modal -->
        <div v-if="settingsModalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-md transition-all duration-300" @click.self="closeSettingsModal">
            <div class="relative w-full max-w-5xl bg-[#161615] border border-border/80 rounded-2xl overflow-hidden shadow-[0_0_50px_rgba(96,165,250,0.15)] flex flex-col min-h-[550px] max-h-[90vh] animate-fadeIn">
                
                <!-- Modal Header -->
                <div class="p-6 border-b border-border/60 flex items-center justify-between bg-surface-light/40">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 border border-brand/20 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-4 h-4 animate-pulse">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.43l-1.003.828c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.99l1.005.831a1.125 1.125 0 01.26 1.43l-1.297 2.247a1.125 1.125 0 01-1.37.491l-1.216-.456c-.356-.133-.751-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.43l1.004-.83c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.831a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.645-.869l.214-1.28z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-[#e5e5e5] font-serif font-semibold text-lg leading-tight">{{ $t('features.settingsModal.title') }}</h2>
                            <p class="text-[10px] font-mono text-text-muted uppercase tracking-wider mt-0.5">// SYSTEM PREFERENCES & LLM CONFIG</p>
                        </div>
                    </div>
                    
                    <button @click="closeSettingsModal" class="p-2 text-text-muted hover:text-[#e5e5e5] transition-colors rounded-lg hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="flex-1 flex flex-col md:flex-row overflow-y-auto min-h-0 bg-[#0a0a0a]">
                    
                    <!-- Left Panel Settings Fields -->
                    <div class="flex-1 p-6 space-y-6 overflow-y-auto">
                        
                        <!-- Language block -->
                        <div class="space-y-3">
                            <h3 class="text-brand font-mono text-[10px] uppercase tracking-wider border-b border-border/40 pb-1.5">{{ $t('features.settingsModal.langTitle') }}</h3>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">Langue</label>
                                    <div class="px-3 py-2 bg-[#161615] border border-border/80 rounded-lg text-xs text-[#e5e5e5] font-mono flex justify-between items-center select-none cursor-pointer">
                                        <span>Français</span>
                                        <span class="text-[8px]">▼</span>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">Langue Actuelle</label>
                                    <div class="px-3 py-2 bg-[#0a0a0a] border border-border/40 rounded-lg text-xs text-text-muted font-mono">
                                        Langue actuelle: FR
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- GUI preferences block -->
                        <div class="space-y-3">
                            <h3 class="text-brand font-mono text-[10px] uppercase tracking-wider border-b border-border/40 pb-1.5">{{ $t('features.settingsModal.guiTitle') }}</h3>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center text-xs">
                                        <span class="text-text-muted">Largeur de Fenêtre:</span>
                                        <span class="font-mono text-[#e5e5e5]">1400 px</span>
                                    </div>
                                    <div class="flex justify-between items-center text-xs">
                                        <span class="text-text-muted">Hauteur de Fenêtre:</span>
                                        <span class="font-mono text-[#e5e5e5]">900 px</span>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2 text-xs">
                                        <input type="checkbox" checked disabled class="accent-brand bg-[#0a0a0a] border-border/60">
                                        <span class="text-text-muted">Sauvegarde Auto</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs">
                                        <input type="checkbox" checked disabled class="accent-brand bg-[#0a0a0a] border-border/60">
                                        <span class="text-text-muted">Afficher l'Aperçu</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LLM model configuration -->
                        <div class="space-y-3">
                            <h3 class="text-brand font-mono text-[10px] uppercase tracking-wider border-b border-border/40 pb-1.5">{{ $t('features.settingsModal.llmTitle') }}</h3>
                            <div class="space-y-4">
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div class="space-y-1">
                                        <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">Modèle préféré</label>
                                        <div class="px-3 py-2 bg-[#161615] border border-border/80 rounded-lg text-xs text-[#e5e5e5] font-mono flex justify-between items-center select-none cursor-pointer">
                                            <span>Local GGUF Model (Offline)</span>
                                            <span class="text-[8px]">▼</span>
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">Taille du modèle local</label>
                                        <div @click="toggleModelSize" class="px-3 py-2 bg-[#161615] border border-brand/50 hover:border-brand rounded-lg text-xs text-[#e5e5e5] font-mono flex justify-between items-center select-none cursor-pointer">
                                            <span class="text-brand font-bold">{{ selectedModelSize }}</span>
                                            <span class="text-[8px]">▼</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">Répertoire de stockage des modèles</label>
                                    <div class="flex gap-2">
                                        <div class="flex-1 px-3 py-2 bg-[#0a0a0a] border border-border/60 rounded-lg text-xs text-text-muted font-mono truncate">
                                            /Volumes/T7/ai-models/
                                        </div>
                                        <button class="px-3 py-1.5 bg-[#161615] border border-border hover:border-brand/40 text-[#e5e5e5] font-mono text-[10px] rounded-lg transition-colors select-none">
                                            Choisir...
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2.5 h-2.5 rounded-full bg-green-500 animate-pulse"></div>
                                        <span class="text-xs font-mono text-green-400 font-bold">{{ $t('features.settingsModal.modelStatus') }}</span>
                                    </div>
                                    
                                    <button @click="testModelConnection" :disabled="testingModel" class="px-4 py-2 bg-[#161615] border border-brand hover:border-brand-hover hover:bg-brand/5 text-[#e5e5e5] font-mono text-xs rounded-lg transition-all flex items-center justify-center gap-2 disabled:opacity-50 select-none">
                                        <span v-if="testingModel" class="animate-spin inline-block w-3 h-3 border-2 border-brand border-t-transparent rounded-full"></span>
                                        <span>{{ testingModel ? 'Testing...' : $t('features.settingsModal.testBtn') }}</span>
                                    </button>
                                </div>
                                
                                <div v-if="testResult" class="p-3 bg-green-500/10 border border-green-500/30 rounded-lg text-xs font-mono text-green-400 animate-fadeIn">
                                    {{ testResult }}
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Right Panel Preferences -->
                    <div class="w-full md:w-[320px] p-6 border-l border-border/40 flex flex-col justify-between bg-[#161615]/30">
                        <div class="space-y-6">
                            
                            <!-- License segment -->
                            <div class="space-y-2">
                                <h4 class="text-[10px] font-mono text-text-muted uppercase tracking-wider">License</h4>
                                <div class="p-4 bg-[#0a0a0a] border border-border/80 rounded-xl space-y-3">
                                    <div class="flex justify-between items-center text-xs">
                                        <span class="text-text-muted">Status:</span>
                                        <span class="font-mono text-brand font-bold">Free</span>
                                    </div>
                                    <div class="text-[10px] font-mono text-text-muted">
                                        Usage this month: 0/100 (100 remaining)
                                    </div>
                                    <a href="#pricing" @click="closeSettingsModal" class="w-full py-2 px-3 bg-[#161615] border border-brand hover:bg-brand text-[#e5e5e5] hover:text-[#0a0a0a] text-center text-xs font-serif font-bold rounded-lg transition-all block shadow-[0_0_10px_rgba(96,165,250,0.1)]">
                                        🚀 Upgrade to Pro
                                    </a>
                                </div>
                            </div>

                            <!-- Database Preferences -->
                            <div class="space-y-2">
                                <h4 class="text-[10px] font-mono text-text-muted uppercase tracking-wider">{{ $t('features.settingsModal.dbTitle') }}</h4>
                                <div class="space-y-3">
                                    <div class="space-y-1">
                                        <label class="text-[9px] font-mono text-text-muted uppercase">Chemin Base de Données</label>
                                        <div class="px-3 py-1.5 bg-[#0a0a0a] border border-border/60 rounded-lg text-[10px] text-text-muted font-mono truncate">
                                            data/databases/ocr_receipts.db
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2">
                                        <button class="py-1.5 px-2 bg-[#161615] border border-border hover:border-brand/40 text-text-muted hover:text-[#e5e5e5] font-mono text-[9px] rounded transition-colors select-none">
                                            Sauvegarder
                                        </button>
                                        <button class="py-1.5 px-2 bg-[#161615] border border-border hover:border-brand/40 text-text-muted hover:text-[#e5e5e5] font-mono text-[9px] rounded transition-colors select-none">
                                            Restaurer
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- OCR preferences -->
                            <div class="space-y-2">
                                <h4 class="text-[10px] font-mono text-text-muted uppercase tracking-wider">{{ $t('features.settingsModal.ocrTitle') }}</h4>
                                <div class="grid grid-cols-2 gap-3 text-xs font-mono">
                                    <div class="space-y-1">
                                        <label class="text-[9px] text-text-muted uppercase">Seuil Confiance</label>
                                        <div class="px-3 py-1.5 bg-[#0a0a0a] border border-border/60 rounded text-center text-[#e5e5e5]">
                                            80%
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-[9px] text-text-muted uppercase">Tentatives Max</label>
                                        <div class="px-3 py-1.5 bg-[#0a0a0a] border border-border/60 rounded text-center text-[#e5e5e5]">
                                            3
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Actions Buttons -->
                        <div class="pt-6 border-t border-border/40 space-y-2 mt-6">
                            <div class="flex gap-2">
                                <button @click="closeSettingsModal" class="flex-1 py-2 px-3 bg-brand hover:bg-brand-hover text-[#0a0a0a] font-serif font-bold text-xs rounded-lg transition-colors select-none">
                                    {{ $t('features.settingsModal.saveBtn') }}
                                </button>
                                <button @click="closeSettingsModal" class="py-2 px-3 border border-border hover:border-brand/40 text-[#e5e5e5] text-xs font-mono rounded-lg transition-colors select-none">
                                    {{ $t('features.settingsModal.applyBtn') }}
                                </button>
                            </div>
                            <button @click="resetSettingsResult" class="w-full py-1.5 px-3 border border-border/50 hover:border-red-500/40 text-text-muted hover:text-red-400 text-[10px] font-mono rounded transition-colors select-none">
                                {{ $t('features.settingsModal.resetBtn') }}
                            </button>
                        </div>
                    </div>

            </div>
        </div>
        </div>

        <!-- Interactive Fuzzy Matching Modal -->
        <div v-if="matchModalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-md transition-all duration-300" @click.self="closeMatchModal">
            <div class="relative w-full max-w-5xl bg-[#161615] border border-border/80 rounded-2xl overflow-hidden shadow-[0_0_50px_rgba(96,165,250,0.15)] flex flex-col min-h-[550px] max-h-[90vh] animate-fadeIn">
                
                <!-- Modal Header -->
                <div class="p-6 border-b border-border/60 flex items-center justify-between bg-surface-light/40">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 border border-brand/20 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-4 h-4 animate-pulse">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-[#e5e5e5] font-serif font-semibold text-lg leading-tight">{{ $t('features.matchModal.title') }}</h2>
                            <p class="text-[10px] font-mono text-text-muted uppercase tracking-wider mt-0.5">// FUZZY MATCH & DATA VERIFICATION</p>
                        </div>
                    </div>
                    
                    <button @click="closeMatchModal" class="p-2 text-text-muted hover:text-[#e5e5e5] transition-colors rounded-lg hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="flex-1 flex flex-col md:flex-row overflow-y-auto min-h-0 bg-[#0a0a0a]">
                    
                    <!-- Left Column: PDF Receipt Viewer -->
                    <div class="flex-1 p-6 bg-[#0e0e0d] flex items-center justify-center relative overflow-hidden min-h-[300px]">
                        <!-- Scan laser line -->
                        <div v-if="matchStep === 'scanning'" class="absolute left-0 right-0 h-[2px] bg-brand animate-scan-laser shadow-[0_0_12px_#3B82F6] z-20"></div>

                        <!-- Styled Invoice Copy matching Plomberie 10/30 -->
                        <div class="bg-white text-[#111111] p-6 sm:p-8 rounded-lg shadow-xl font-mono text-[10px] w-full max-w-[380px] border border-[#dddddd] space-y-4 transition-all duration-300 select-none"
                             :class="{ 'opacity-60 scale-[0.99]': matchStep === 'scanning' }">
                            
                            <!-- Logo and Title -->
                            <div class="flex justify-between items-start border-b border-[#bbbbbb] pb-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full border-2 border-[#111111] flex flex-col items-center justify-center bg-black text-white p-1">
                                        <span class="text-[7px] font-bold tracking-tighter">10/30</span>
                                        <span class="text-[4px] font-serif uppercase tracking-[1px] leading-[4px]">PLOMBERIE</span>
                                    </div>
                                    <div class="leading-tight">
                                        <div class="font-bold text-xs">PLOMBERIE 10/30 Inc.</div>
                                        <div class="text-[7px] text-[#555555]">Saint-Jean-sur-Richelieu, Qc</div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="font-bold text-sm tracking-wider uppercase text-black">FACTURE</div>
                                    <div class="text-[8px] text-[#555555]">N° DE FACTURE: <strong>1700</strong></div>
                                    <div class="text-[8px] text-[#555555]">DATE: 19/06/2025</div>
                                </div>
                            </div>

                            <!-- Billing Info -->
                            <div class="grid grid-cols-2 gap-4 text-[8px] text-[#444444] border-b border-[#eeeeee] pb-3">
                                <div>
                                    <div class="font-bold uppercase text-[#666666] mb-1">Facturé à:</div>
                                    <div>Sonia Tremblay</div>
                                    <div>890 Boulevard Des Écluses</div>
                                    <div>Sainte-Catherine, QC</div>
                                </div>
                                <div>
                                    <div class="font-bold uppercase text-[#666666] mb-1">Description Projet:</div>
                                    <div>bolt</div>
                                    <div>COMMISSION #9822</div>
                                </div>
                            </div>

                            <!-- Items Table representation -->
                            <div class="space-y-1.5 border-b border-[#eeeeee] pb-4">
                                <div class="flex justify-between font-bold border-b border-[#dddddd] pb-1 text-[#666666] text-[8px]">
                                    <span>DESCRIPTION TRAVAUX</span>
                                    <span>MONTANT</span>
                                </div>
                                <div class="flex justify-between text-[#333333]">
                                    <span>Remplacer un réservoir 40 gal électrique</span>
                                    <span>$895.00</span>
                                </div>
                                <div class="flex justify-between text-[#333333]">
                                    <span>Tuyaux PEX et raccords en laiton</span>
                                    <span>$53.35</span>
                                </div>
                                <div class="flex justify-between text-[#333333]">
                                    <span>Main d'oeuvre qualifiée (2 hommes/heure)</span>
                                    <span>$290.00</span>
                                </div>
                            </div>

                            <!-- Totals -->
                            <div class="space-y-1 text-right text-xs">
                                <div class="flex justify-between text-[8px] text-[#555555]">
                                    <span>TPS/TVQ TAX (14.975%)</span>
                                    <span>$209.72</span>
                                </div>
                                <div class="flex justify-between font-bold text-sm text-black pt-1 border-t border-[#bbbbbb]">
                                    <span>TOTAL CAD</span>
                                    <span>$1,609.02</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Settings & Verified Fields Form -->
                    <div class="w-full md:w-[420px] p-6 border-l border-border/40 bg-[#161615]/30 flex flex-col justify-between overflow-y-auto font-sans">
                        <div class="space-y-6">
                            
                            <!-- Project Settings -->
                            <div class="space-y-3">
                                <h3 class="text-text-muted font-mono text-[9px] uppercase tracking-wider border-b border-border/40 pb-1.5">Project Settings</h3>
                                <div class="space-y-3">
                                    <div class="space-y-1">
                                        <label class="text-[10px] font-mono text-text-muted uppercase tracking-wider">{{ $t('features.matchModal.project') }}</label>
                                        <div class="px-3 py-2 bg-[#0a0a0a] border border-border/60 rounded-lg text-xs text-[#e5e5e5] font-mono flex justify-between items-center select-none cursor-pointer">
                                            <span>bolt</span>
                                            <span class="text-[8px]">▼</span>
                                        </div>
                                    </div>
                                    
                                    <div class="p-2.5 bg-[#0a0a0a] border border-border/40 rounded-lg text-[10px] font-mono text-text-muted leading-relaxed">
                                        📁 Destination: <span class="text-[#e5e5e5]">/Dropbox/Factures/@CHEVROLET BOLT EUV PREMIER 2023/</span>
                                        <span class="text-[#27c93f] ml-1 font-bold">✓</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Extracted Fields form -->
                            <div class="space-y-3">
                                <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider border-b border-border/40 pb-1.5 flex justify-between items-center">
                                    <span>{{ $t('features.matchModal.fields') }}</span>
                                    <span v-if="matchStep === 'done'" class="text-[#27c93f] font-mono text-[8px] animate-pulse">✓ {{ $t('features.matchModal.statusMatched') }}</span>
                                </div>

                                <div class="space-y-2.5">
                                    <!-- Vendor Field -->
                                    <div class="flex items-center gap-2">
                                        <span class="w-24 text-text-muted text-[10px]">Vendor:</span>
                                        <div class="flex-1 bg-[#0a0a0a] border border-border/60 rounded px-2.5 py-1.5 h-7 flex items-center justify-between overflow-hidden font-mono text-xs">
                                            <span class="text-[#e5e5e5] transition-all duration-300" :class="matchStep === 'done' ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-2'">
                                                plomberie10-30
                                            </span>
                                            <span v-if="matchStep === 'done'" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                95% Match
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Category Field -->
                                    <div class="flex items-center gap-2">
                                        <span class="w-24 text-text-muted text-[10px]">Category:</span>
                                        <div class="flex-1 bg-[#0a0a0a] border border-border/60 rounded px-2.5 py-1.5 h-7 flex items-center justify-between font-mono text-xs text-text-muted">
                                            <span v-if="matchStep === 'done'" class="text-[#e5e5e5]">réparation-et-entretien</span>
                                            <span v-else>--</span>
                                            <span class="text-[8px]">▼</span>
                                        </div>
                                    </div>

                                    <!-- Date Field -->
                                    <div class="flex items-center gap-2">
                                        <span class="w-24 text-text-muted text-[10px]">Date:</span>
                                        <div class="flex-1 bg-[#0a0a0a] border border-border/60 rounded px-2.5 py-1.5 h-7 flex items-center justify-between overflow-hidden font-mono text-xs">
                                            <span class="text-[#e5e5e5] transition-all duration-300" :class="matchStep === 'done' ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-2'">
                                                2025-06-19
                                            </span>
                                            <span v-if="matchStep === 'done'" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                95% Match
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Total Field -->
                                    <div class="flex items-center gap-2">
                                        <span class="w-24 text-text-muted text-[10px]">Total ($):</span>
                                        <div class="flex-1 bg-[#0a0a0a] border border-border/60 rounded px-2.5 py-1.5 h-7 flex items-center justify-between overflow-hidden font-mono text-xs">
                                            <span class="text-[#e5e5e5] transition-all duration-300" :class="matchStep === 'done' ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-2'">
                                                1609.02
                                            </span>
                                            <span v-if="matchStep === 'done'" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                95% Match
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Invoice Number -->
                                    <div class="flex items-center gap-2">
                                        <span class="w-24 text-text-muted text-[10px]">Invoice Number:</span>
                                        <div class="flex-1 bg-[#0a0a0a] border border-border/60 rounded px-2.5 py-1.5 h-7 flex items-center justify-between overflow-hidden font-mono text-xs">
                                            <span class="text-[#e5e5e5] transition-all duration-300" :class="matchStep === 'done' ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-2'">
                                                1700
                                            </span>
                                            <span v-if="matchStep === 'done'" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                95% Match
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- File Naming Preview -->
                            <div class="bg-surface-light/40 border border-border/60 rounded-xl p-4 space-y-2">
                                <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider">{{ $t('features.matchModal.namingPreview') }}</div>
                                <div class="font-mono text-xs text-brand break-all h-6 overflow-hidden flex items-center">
                                    <span class="transition-opacity duration-300" :class="matchStep === 'done' ? 'opacity-100' : 'opacity-0'">
                                        bolt_facture_2025-06-19_plomberie10-30_1609.02.pdf
                                    </span>
                                </div>
                                <div class="text-[9px] text-[#27c93f] font-mono flex items-center gap-1 transition-opacity duration-300" :class="matchStep === 'done' ? 'opacity-100' : 'opacity-0'">
                                    <span>✓</span> Nom de fichier valide.
                                </div>
                            </div>

                        </div>

                        <!-- Actions Buttons -->
                        <div class="pt-6 border-t border-border/40 flex items-center justify-between gap-4 mt-6">
                            <button @click="runFuzzyMatchingScan" :disabled="matchStep === 'scanning'" class="flex-1 py-3 px-4 bg-green-500 hover:bg-green-600 disabled:bg-green-600/50 text-[#0a0a0a] font-serif font-bold text-sm rounded-lg transition-colors select-none text-center">
                                {{ matchStep === 'scanning' ? $t('features.matchModal.statusScanning') : $t('features.matchModal.saveBtn') }}
                            </button>
                            <button @click="closeMatchModal" class="py-2.5 px-4 border border-border hover:border-red-500/40 text-text-muted hover:text-red-400 text-xs font-mono rounded-lg transition-colors select-none">
                                {{ $t('features.matchModal.discardBtn') }}
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Interactive Privacy Modal -->
        <div v-if="privacyModalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-md transition-all duration-300" @click.self="closePrivacyModal">
            <div class="relative w-full max-w-5xl bg-[#161615] border border-border/80 rounded-2xl overflow-hidden shadow-[0_0_50px_rgba(96,165,250,0.15)] flex flex-col min-h-[550px] max-h-[90vh] animate-fadeIn">
                
                <!-- Modal Header -->
                <div class="p-6 border-b border-border/60 flex items-center justify-between bg-surface-light/40">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 border border-brand/20 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-brand w-4 h-4 animate-pulse">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-[#e5e5e5] font-serif font-semibold text-lg leading-tight">{{ $t('features.privacyModal.title') }}</h2>
                            <p class="text-[10px] font-mono text-text-muted uppercase tracking-wider mt-0.5">// NETWORK SOCKET SANDBOX INSPECTOR</p>
                        </div>
                    </div>
                    
                    <button @click="closePrivacyModal" class="p-2 text-text-muted hover:text-[#e5e5e5] transition-colors rounded-lg hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="flex-1 flex flex-col md:flex-row overflow-y-auto min-h-0 bg-[#0a0a0a]">
                    
                    <!-- Left Column: System Trace -->
                    <div class="flex-1 p-6 space-y-4 overflow-y-auto border-r border-border/40">
                        <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider border-b border-border/40 pb-1.5 flex justify-between items-center">
                            <span>{{ $t('features.privacyModal.scanLogs') }}</span>
                            <span class="text-brand font-mono text-[8px] animate-pulse">// OFFLINE RUNTIME</span>
                        </div>
                        
                        <div class="bg-[#0e0e0d] border border-border/60 rounded-xl p-4 h-[340px] overflow-y-auto font-mono text-[10px] text-text-muted space-y-2 select-none shadow-inner">
                            <div v-for="(log, idx) in privacyLogs" :key="idx" class="leading-relaxed animate-fadeIn">
                                <span class="text-brand mr-1.5">[local-engine]</span>
                                <span class="text-[#e5e5e5]">{{ log }}</span>
                            </div>
                            <div v-if="privacyStep === 'active'" class="flex items-center gap-1.5 text-brand animate-pulse mt-2">
                                <span class="animate-spin inline-block w-2.5 h-2.5 border-2 border-brand border-t-transparent rounded-full"></span>
                                <span>{{ $t('features.privacyModal.statusScanning') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Network Sockets Monitor -->
                    <div class="w-full md:w-[420px] p-6 bg-[#161615]/30 flex flex-col justify-between overflow-y-auto font-sans">
                        <div class="space-y-6">
                            
                            <div class="space-y-3">
                                <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider border-b border-border/40 pb-1.5 flex justify-between items-center">
                                    <span>{{ $t('features.privacyModal.networkTitle') }}</span>
                                    <span v-if="privacyStep === 'done'" class="text-green-400 font-mono text-[8px] animate-pulse">✓ {{ $t('features.privacyModal.statusChecked') }}</span>
                                </div>
                                
                                <div class="space-y-3">
                                    <!-- Network state widget -->
                                    <div class="p-4 rounded-xl border border-border/80 flex items-center justify-between transition-all font-sans"
                                         :class="privacyStep === 'done' ? 'bg-green-500/10 border-green-500/30' : 'bg-brand/5 border-brand/20'">
                                        <div class="flex items-center gap-3">
                                            <div class="w-2.5 h-2.5 rounded-full"
                                                 :class="privacyStep === 'done' ? 'bg-green-500 animate-pulse' : 'bg-brand animate-ping'"></div>
                                            <div>
                                                <div class="text-xs font-mono text-[#e5e5e5] font-bold">
                                                    {{ privacyStep === 'done' ? 'Network State: Sandbox Secured' : 'Network Audit: Analyzing connections' }}
                                                </div>
                                                <div class="text-[9px] font-mono text-text-muted mt-0.5">
                                                    Outbound Sockets: 0 active
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Monitored list -->
                                    <div class="space-y-2.5 font-mono text-xs">
                                        <!-- Google check -->
                                        <div class="flex justify-between items-center p-2.5 bg-[#0a0a0a] border border-border/40 rounded-lg">
                                            <span class="text-text-muted">google.com (Outbound)</span>
                                            <span class="text-[10px] uppercase font-bold"
                                                  :class="privacyStep === 'done' ? 'text-red-400' : 'text-text-muted'">
                                                {{ privacyStep === 'done' ? '⚠️ BLOCKED' : 'MONITORING' }}
                                            </span>
                                        </div>

                                        <!-- Telemetry check -->
                                        <div class="flex justify-between items-center p-2.5 bg-[#0a0a0a] border border-border/40 rounded-lg">
                                            <span class="text-text-muted">telemetry.recapture.ai</span>
                                            <span class="text-[10px] uppercase font-bold"
                                                  :class="privacyStep === 'done' ? 'text-red-400' : 'text-text-muted'">
                                                {{ privacyStep === 'done' ? '⚠️ DISCONNECTED' : 'MONITORING' }}
                                            </span>
                                        </div>

                                        <!-- Cloud OCR check -->
                                        <div class="flex justify-between items-center p-2.5 bg-[#0a0a0a] border border-border/40 rounded-lg">
                                            <span class="text-text-muted">cloud-ocr-api.services</span>
                                            <span class="text-[10px] uppercase font-bold"
                                                  :class="privacyStep === 'done' ? 'text-red-400' : 'text-text-muted'">
                                                {{ privacyStep === 'done' ? '⚠️ NOT LOADED' : 'MONITORING' }}
                                            </span>
                                        </div>

                                        <!-- Local Database write -->
                                        <div class="flex justify-between items-center p-2.5 bg-[#0a0a0a] border border-border/40 rounded-lg">
                                            <span class="text-text-muted">local_sqlite.db (Local disk)</span>
                                            <span class="text-[10px] uppercase font-bold"
                                                  :class="privacyStep === 'done' ? 'text-green-400' : 'text-text-muted'">
                                                {{ privacyStep === 'done' ? '✓ READ_WRITE' : 'MONITORING' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Final confirmation badge -->
                            <div v-if="privacyStep === 'done'" class="p-4 bg-green-500/10 border border-green-500/30 rounded-xl text-xs text-green-400 leading-relaxed font-mono animate-fadeIn">
                                🔒 <strong>{{ $t('features.privacyModal.statusPrivate') }}</strong>. All calculations remain inside your secure CPU boundary. No remote telemetry or cloud databases have been engaged.
                            </div>

                        </div>

                        <!-- Actions Buttons -->
                        <div class="pt-6 border-t border-border/40 flex items-center justify-between gap-4 mt-6">
                            <button @click="runPrivacyAudit" :disabled="privacyStep === 'active'" class="flex-1 py-3 px-4 bg-brand hover:bg-brand-hover disabled:bg-brand/50 text-[#0a0a0a] font-serif font-bold text-sm rounded-lg transition-colors select-none text-center">
                                {{ privacyStep === 'active' ? 'Analyzing Sockets...' : 'Re-Run Security Audit' }}
                            </button>
                            <button @click="closePrivacyModal" class="py-2.5 px-4 border border-border hover:border-brand/40 text-text-muted hover:text-[#e5e5e5] text-xs font-mono rounded-lg transition-colors select-none">
                                {{ $t('features.privacyModal.closeBtn') }}
                            </button>
                        </div>
                    </div>

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
            modalOpen: false,
            reportStep: 'idle', // 'idle', 'generating', 'done'
            progress: 0,
            logs: [],
            selectedReceipt: null,
            receipts: [
                { date: '2025-01-01', vendor: 'banque-scotia', amount: '$13,291.95', tax: '$1,727.95', file: 'invoice_scotia_jan.pdf' },
                { date: '2025-01-02', vendor: 'canac', amount: '$417.21', tax: '$54.24', file: 'canac_0102.pdf' },
                { date: '2025-01-19', vendor: 'bell', amount: '$63.32', tax: '$8.23', file: 'bell_internet.pdf' },
                { date: '2025-01-20', vendor: 'coopsco', amount: '$23.95', tax: '$3.11', file: 'coopsco_books.pdf' }
            ],
            
            // Batch modal state
            batchModalOpen: false,
            batchStep: 'idle', // 'idle', 'active', 'done'
            batchGlobalProgress: 0,
            batchFiles: [
                { name: 'facture_hydro_quebec_2026_06.pdf', size: '420 KB', status: 'pending', progress: 0 },
                { name: 'bell_internet_2026_05.pdf', size: '1.2 MB', status: 'pending', progress: 0 },
                { name: 'videotron_mobile_2026_06.pdf', size: '850 KB', status: 'pending', progress: 0 },
                { name: 'amazon_aws_invoice_2991.pdf', size: '340 KB', status: 'pending', progress: 0 },
                { name: 'provigo_epicerie_2026.pdf', size: '180 KB', status: 'pending', progress: 0 }
            ],

            // Settings modal state
            settingsModalOpen: false,
            selectedModelSize: 'Tiny (0.5B - ~140 MB)',
            testingModel: false,
            testResult: '',

            // Fuzzy match modal state
            matchModalOpen: false,
            matchStep: 'idle', // 'idle', 'scanning', 'done'

            // Privacy audit modal state
            privacyModalOpen: false,
            privacyStep: 'idle', // 'idle', 'active', 'done'
            privacyLogs: []
        };
    },
    methods: {
        openModal() {
            this.modalOpen = true;
            this.reportStep = 'idle';
            this.progress = 0;
            this.logs = [];
            this.selectedReceipt = null;
            document.body.style.overflow = 'hidden';
        },
        closeModal() {
            this.modalOpen = false;
            document.body.style.overflow = '';
        },
        startGeneration() {
            this.reportStep = 'generating';
            this.progress = 0;
            this.logs = [];
            this.selectedReceipt = null;
            
            const logSteps = [
                { time: 100, text: '📂 Indexing source directory: /Dropbox/Factures/Facture 2025...' },
                { time: 300, text: '🔍 Scanning 152 PDFs and receipt images locally...' },
                { time: 600, text: '🧠 Executing local AI OCR data extraction (totals & dates)...' },
                { time: 1000, text: '📋 Generating tabular Reconciliation Register...' },
                { time: 1400, text: '🖼️ Attaching visual receipt proofs at report end...' },
                { time: 1800, text: '💾 Compiling unified PDF & HTML document...' }
            ];

            logSteps.forEach(step => {
                setTimeout(() => {
                    if (this.reportStep === 'generating' && this.modalOpen) {
                        this.logs.push(step.text);
                    }
                }, step.time);
            });

            const interval = setInterval(() => {
                if (!this.modalOpen || this.reportStep !== 'generating') {
                    clearInterval(interval);
                    return;
                }
                if (this.progress < 100) {
                    this.progress += 5;
                } else {
                    clearInterval(interval);
                    setTimeout(() => {
                        this.reportStep = 'done';
                        this.selectedReceipt = this.receipts[0];
                    }, 400);
                }
            }, 100);
        },
        selectReceipt(receipt) {
            this.selectedReceipt = receipt;
        },

        // Batch modal methods
        openBatchModal() {
            this.batchModalOpen = true;
            this.resetBatchQueue();
            document.body.style.overflow = 'hidden';
        },
        closeBatchModal() {
            this.batchModalOpen = false;
            document.body.style.overflow = '';
        },
        resetBatchQueue() {
            this.batchStep = 'idle';
            this.batchGlobalProgress = 0;
            this.batchFiles.forEach(file => {
                file.status = 'pending';
                file.progress = 0;
            });
        },
        startBatchProcessing() {
            this.batchStep = 'active';
            this.batchGlobalProgress = 0;
            this.batchFiles.forEach(f => {
                f.status = 'pending';
                f.progress = 0;
            });

            let elapsed = 0;
            const interval = setInterval(() => {
                if (!this.batchModalOpen || this.batchStep !== 'active') {
                    clearInterval(interval);
                    return;
                }
                elapsed += 100;

                // File 1 (Hydro Quebec)
                if (elapsed <= 1200) {
                    this.batchFiles[0].status = 'active';
                    this.batchFiles[0].progress = Math.min(100, Math.floor((elapsed / 1200) * 100));
                } else {
                    this.batchFiles[0].status = 'done';
                    this.batchFiles[0].progress = 100;
                }

                // File 2 (Bell Internet)
                if (elapsed <= 1800) {
                    this.batchFiles[1].status = 'active';
                    this.batchFiles[1].progress = Math.min(100, Math.floor((elapsed / 1800) * 100));
                } else {
                    this.batchFiles[1].status = 'done';
                    this.batchFiles[1].progress = 100;
                }

                // File 3 (Videotron Mobile) starts at 500ms
                if (elapsed >= 500) {
                    if (elapsed <= 2500) {
                        this.batchFiles[2].status = 'active';
                        this.batchFiles[2].progress = Math.min(100, Math.floor(((elapsed - 500) / 2000) * 100));
                    } else {
                        this.batchFiles[2].status = 'done';
                        this.batchFiles[2].progress = 100;
                    }
                }

                // File 4 (Amazon) starts at 1200ms
                if (elapsed >= 1200) {
                    if (elapsed <= 3000) {
                        this.batchFiles[3].status = 'active';
                        this.batchFiles[3].progress = Math.min(100, Math.floor(((elapsed - 1200) / 1800) * 100));
                    } else {
                        this.batchFiles[3].status = 'done';
                        this.batchFiles[3].progress = 100;
                    }
                }

                // File 5 (Provigo) starts at 1800ms
                if (elapsed >= 1800) {
                    if (elapsed <= 3500) {
                        this.batchFiles[4].status = 'active';
                        this.batchFiles[4].progress = Math.min(100, Math.floor(((elapsed - 1800) / 1700) * 100));
                    } else {
                        this.batchFiles[4].status = 'done';
                        this.batchFiles[4].progress = 100;
                    }
                }

                // Calculate global progress
                const totalProgress = this.batchFiles.reduce((acc, f) => acc + f.progress, 0);
                this.batchGlobalProgress = Math.min(100, Math.floor(totalProgress / 5));

                if (this.batchGlobalProgress >= 100) {
                    this.batchStep = 'done';
                    clearInterval(interval);
                }
            }, 100);
        },

        // Settings modal methods
        openSettingsModal() {
            this.settingsModalOpen = true;
            this.testingModel = false;
            this.testResult = '';
            document.body.style.overflow = 'hidden';
        },
        closeSettingsModal() {
            this.settingsModalOpen = false;
            document.body.style.overflow = '';
        },
        toggleModelSize() {
            const sizes = [
                'Tiny (0.5B - ~140 MB)',
                'Smol (1.5B - ~350 MB)',
                'Base (3.0B - ~700 MB)'
            ];
            const idx = sizes.indexOf(this.selectedModelSize);
            this.selectedModelSize = sizes[(idx + 1) % sizes.length];
        },
        testModelConnection() {
            this.testingModel = true;
            this.testResult = '';
            setTimeout(() => {
                if (this.settingsModalOpen) {
                    this.testingModel = false;
                    this.testResult = '✓ Local GGUF Model successfully validated & initialized on CPU threads. System state: READY';
                }
            }, 1200);
        },
        resetSettingsResult() {
            this.selectedModelSize = 'Tiny (0.5B - ~140 MB)';
            this.testResult = '';
        },

        // Fuzzy match modal methods
        openMatchModal() {
            this.matchModalOpen = true;
            this.matchStep = 'idle';
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                this.runFuzzyMatchingScan();
            }, 400);
        },
        closeMatchModal() {
            this.matchModalOpen = false;
            document.body.style.overflow = '';
        },
        runFuzzyMatchingScan() {
            this.matchStep = 'scanning';
            setTimeout(() => {
                if (this.matchModalOpen && this.matchStep === 'scanning') {
                    this.matchStep = 'done';
                }
            }, 1500);
        },

        // Privacy audit modal methods
        openPrivacyModal() {
            this.privacyModalOpen = true;
            this.privacyStep = 'idle';
            this.privacyLogs = [];
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                this.runPrivacyAudit();
            }, 400);
        },
        closePrivacyModal() {
            this.privacyModalOpen = false;
            document.body.style.overflow = '';
        },
        runPrivacyAudit() {
            this.privacyStep = 'active';
            this.privacyLogs = [];
            
            const traceSteps = [
                'Initializing network socket interceptor sandbox...',
                'Opening local database data/databases/ocr_receipts.db...',
                'Loading NuExtract-1.5-tiny.Q4_K_M.gguf onto local CPU memory...',
                'Validating offline vocabularies and weights...',
                'Receipt parsing active: localhost loopback socket only.',
                'Intercepting network requests outbound: google.com BLOCKED.',
                'Intercepting network requests outbound: telemetry.recapture.ai BLOCKED.',
                'Audit success: Zero remote bytes transferred.'
            ];

            traceSteps.forEach((step, idx) => {
                setTimeout(() => {
                    if (this.privacyModalOpen && this.privacyStep === 'active') {
                        this.privacyLogs.push(step);
                        if (idx === traceSteps.length - 1) {
                            this.privacyStep = 'done';
                        }
                    }
                }, (idx + 1) * 300);
            });
        }
    },
    beforeUnmount() {
        document.body.style.overflow = '';
    }
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
