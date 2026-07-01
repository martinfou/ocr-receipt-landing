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
            ]
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
