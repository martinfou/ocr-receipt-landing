<template>
    <section class="relative overflow-hidden py-24 lg:py-32 min-h-screen flex items-center justify-center">
        <!-- Background Video -->
        <video 
            class="absolute inset-0 w-full h-full object-cover z-0 opacity-40" 
            autoplay 
            muted 
            playsinline 
            :src="'/bg-video.mp4'">
        </video>
        
        <!-- Overlays -->
        <div class="absolute inset-0 bg-surface/75 z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(96,165,250,0.1),transparent_50%)] z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(96,165,250,0.05),transparent_50%)] z-0"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 w-full">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: Copy & CTAs -->
                <div class="lg:col-span-6 text-left flex flex-col items-start bg-[#161615]/80 border border-border/60 p-8 lg:p-10 rounded-2xl backdrop-blur-md shadow-2xl relative z-10 transition-all duration-300 hover:border-border/80">
                    <div class="w-12 h-12 rounded-xl bg-brand/10 border border-brand/20 flex items-center justify-center mb-6 select-none shadow-[0_0_15px_rgba(96,165,250,0.1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-brand fill-none" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1-2-1z"></path>
                            <path d="M16 8H8"></path>
                            <path d="M16 12H8"></path>
                            <path d="M16 16H8"></path>
                        </svg>
                    </div>
                    
                    <div class="text-[11px] font-mono text-brand mb-4 tracking-wider uppercase" v-html="$t('hero.subtitle')">
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-semibold leading-[1.15] mb-6 tracking-[-0.02em] text-wrap-balance text-[#e5e5e5]" v-html="$t('hero.title')">
                    </h1>

                    <div class="flex flex-wrap items-center gap-4 w-full sm:w-auto mb-10">
                        <a href="#download" class="btn-brand text-sm px-7 py-3.5 w-full sm:w-auto shadow-lg shadow-brand-dark/20 hover:shadow-brand/35 transition-all duration-300 text-center cursor-pointer">
                            {{ $t('hero.cta1') }}
                        </a>
                    </div>

                    <div class="border-t border-border/30 pt-6 w-full max-w-lg">
                        <p class="text-xs text-text-muted leading-relaxed mb-4">
                            {{ $t('hero.designedFor') }}
                        </p>
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-border/80 text-[10px] text-text-muted bg-surface-light/50 font-mono select-none">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500 inline-block shadow-[0_0_8px_rgba(59,130,246,0.6)] animate-pulse"></span>
                            {{ $t('hero.badges') }}
                        </div>
                    </div>
                </div>

                <!-- Right Column: Recapture OCR App Carousel Simulator -->
                <div class="lg:col-span-6 w-full max-w-2xl mx-auto lg:mx-0 relative z-10">
                    <div class="border border-border bg-[#161615]/95 backdrop-blur-md rounded-xl overflow-hidden shadow-2xl relative font-sans text-xs">
                        
                        <!-- Carousel Top Header bar (OS Window style + Tab bar) -->
                        <div class="bg-surface/60 border-b border-border/60">
                            <!-- Window dots & title -->
                            <div class="flex items-center justify-between px-4 py-3.5 border-b border-border/40">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#27c93f]"></span>
                                    <span class="font-mono text-[9px] text-text-muted uppercase tracking-wider ml-1.5">// DESKTOP SIMULATOR</span>
                                </div>
                                <div class="text-[8px] text-brand font-mono font-bold animate-pulse uppercase">
                                    ● LOCAL_INFRASTRUCTURE
                                </div>
                            </div>
                            
                            <!-- Carousel Navigation Tabs -->
                            <div class="flex overflow-x-auto scrollbar-none font-mono text-[8px] uppercase tracking-wider text-text-muted select-none">
                                <button v-for="(tabName, idx) in tabNames" :key="idx"
                                        @click="selectTab(idx)"
                                        class="flex-1 min-w-[75px] py-3 px-1 text-center border-r border-border/30 hover:text-[#e5e5e5] transition-all relative font-bold"
                                        :class="idx === activeTab ? 'bg-[#0a0a0a]/50 text-brand font-bold' : ''">
                                    <span>{{ tabName }}</span>
                                    <span v-if="idx === activeTab" class="absolute bottom-0 left-0 right-0 h-[2px] bg-brand shadow-[0_0_8px_#60A5FA]"></span>
                                </button>
                            </div>
                        </div>

                        <!-- Active Simulation Panes -->
                        <div class="p-5 bg-[#0a0a0a]/20 min-h-[350px] flex flex-col justify-between">
                            
                            <!-- Tab 0: Parser (Original interactive OCR receipt simulator) -->
                            <div v-if="activeTab === 0" class="grid sm:grid-cols-12 gap-4 animate-fadeIn">
                                <!-- Left column: Mock PDF viewer representation -->
                                <div class="sm:col-span-5 space-y-2">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider border-b border-border/30 pb-1">// PDF Viewer</div>
                                    <div class="relative bg-white text-[#111111] p-3 rounded-lg border border-border/60 shadow-lg h-[240px] flex flex-col justify-between overflow-hidden">
                                        <!-- Laser scanning line -->
                                        <div v-show="parserStep === 1" class="absolute left-0 right-0 h-[2px] bg-brand animate-scan-laser shadow-[0_0_12px_#3B82F6] z-20"></div>
                                        
                                        <!-- Document representation -->
                                        <div class="space-y-1.5 relative z-10 text-[7px] font-sans">
                                            <div class="flex items-center justify-between border-b border-[#cccccc] pb-1.5 mb-2">
                                                <div class="w-7 h-7 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center font-bold text-brand text-[8px]">ACME</div>
                                                <div class="text-right">
                                                    <div class="font-bold text-[8px] uppercase tracking-wider">ACME COPIER SERVICES</div>
                                                    <div class="text-[6px] text-[#555555]">St-Jean-sur-Richelieu</div>
                                                </div>
                                            </div>
                                            <div class="font-bold border-b border-[#dddddd] pb-1">FACTURE N° 1700</div>
                                            <div class="flex justify-between font-bold text-[7px] border-b border-[#dddddd] pb-1">
                                                <span>Maintenance Copieur</span>
                                                <span>$120.00</span>
                                            </div>
                                            <div class="flex justify-between font-bold text-[7px] border-b border-[#dddddd] pb-1">
                                                <span>Papier Lettre</span>
                                                <span>$10.00</span>
                                            </div>
                                            <div class="flex justify-between font-bold text-[7px]">
                                                <span>Taxes (TPS/TVQ)</span>
                                                <span>$19.50</span>
                                            </div>
                                        </div>

                                        <div class="flex items-center justify-between border-t border-[#cccccc] pt-2 text-[8px] font-mono text-text-muted relative z-10 bg-white">
                                            <span>ACME_COPIER.PDF</span>
                                            <span>PAGE 1 OF 1</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right column: Extracted fields & rename preview -->
                                <div class="sm:col-span-7 flex flex-col justify-between space-y-4">
                                    
                                    <!-- Document Fields -->
                                    <div class="space-y-2.5">
                                        <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider border-b border-border/30 pb-1.5 mb-1.5 flex items-center justify-between">
                                            <span>{{ $t('hero.simulator.fields') }}</span>
                                            <span class="text-[#27c93f] font-mono text-[8px]" v-if="parserStep >= 2">{{ $t('hero.simulator.matchConfirmed') }}</span>
                                        </div>
                                        
                                        <!-- Vendor Field -->
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Vendor:</span>
                                            <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden">
                                                <span class="font-mono text-[10px] text-[#e5e5e5] transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                    acme-copier
                                                </span>
                                                <span v-if="parserStep >= 2" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                    95% Match
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Date Field -->
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Date:</span>
                                            <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden">
                                                <span class="font-mono text-[10px] text-[#e5e5e5] transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                    2026-06-19
                                                </span>
                                                <span v-if="parserStep >= 2" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                    95% Match
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Taxes Field -->
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Taxes ($):</span>
                                            <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden">
                                                <span class="font-mono text-[10px] text-[#e5e5e5] transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                    19.50
                                                </span>
                                                <span v-if="parserStep >= 2" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                    95% Match
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Total Field -->
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Total ($):</span>
                                            <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden">
                                                <span class="font-mono text-[10px] text-[#e5e5e5] transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                    149.50
                                                </span>
                                                <span v-if="parserStep >= 2" class="text-[8px] bg-green-500/10 text-[#27c93f] border border-green-500/20 px-1 rounded font-mono font-medium scale-90">
                                                    95% Match
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- File Naming Preview -->
                                    <div class="bg-surface/60 border border-border/50 rounded-lg p-3 space-y-1">
                                        <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider">{{ $t('hero.simulator.preview') }}</div>
                                        <div class="font-mono text-[9px] text-[#60A5FA] break-all h-6 overflow-hidden flex items-center">
                                            <span class="transition-opacity duration-300" :class="parserStep >= 3 ? 'opacity-100' : 'opacity-0'">
                                                acme-copier_facture_2026-06-19_149.50.pdf
                                            </span>
                                        </div>
                                        <div class="text-[8px] text-[#27c93f] font-mono transition-opacity duration-300" :class="parserStep >= 3 ? 'opacity-100' : 'opacity-0'">
                                            {{ $t('hero.simulator.validFilename') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tab 1: Local Settings Configuration -->
                            <div v-if="activeTab === 1" class="space-y-4 animate-fadeIn">
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <!-- Left half: Model config -->
                                    <div class="space-y-3 p-3.5 bg-[#0a0a0a]/60 border border-border/60 rounded-xl">
                                        <div class="text-[8px] font-mono text-brand uppercase tracking-wider border-b border-border/30 pb-1 mb-1">// LLM MODEL CONFIGURATION</div>
                                        <div class="space-y-2">
                                            <div class="space-y-1">
                                                <label class="text-[8px] font-mono text-text-muted uppercase">Preferred Model</label>
                                                <div class="px-2.5 py-1.5 bg-[#0a0a0a] border border-border/80 rounded text-[10px] text-[#e5e5e5] font-mono">Local GGUF Model (Offline)</div>
                                            </div>
                                            <div class="space-y-1">
                                                <label class="text-[8px] font-mono text-text-muted uppercase">Model Size</label>
                                                <select v-model="selectedModelSize" class="w-full bg-[#0a0a0a] border border-border/80 rounded px-2 py-1 text-[10px] text-[#e5e5e5] outline-none focus:border-brand">
                                                    <option>Tiny (0.5B - ~140 MB)</option>
                                                    <option>Smol (1.5B - ~450 MB)</option>
                                                    <option>Base (7B - ~2.2 GB)</option>
                                                </select>
                                            </div>
                                            <div class="space-y-1">
                                                <label class="text-[8px] font-mono text-text-muted uppercase">Model Directory</label>
                                                <div class="px-2 py-1 bg-[#0a0a0a] border border-border/80 rounded text-[9px] text-text-muted font-mono truncate select-none">/Volumes/T7/ai-models/</div>
                                            </div>
                                        </div>
                                        <div class="pt-1.5 flex justify-between items-center text-[8px] font-mono">
                                            <span class="text-green-400 font-bold">✓ Model Ready: NuExtract-1.5-tiny.gguf</span>
                                        </div>
                                    </div>

                                    <!-- Right half: DB & OCR config -->
                                    <div class="space-y-3 p-3.5 bg-[#0a0a0a]/60 border border-border/60 rounded-xl">
                                        <div class="text-[8px] font-mono text-brand uppercase tracking-wider border-b border-border/30 pb-1 mb-1">// DATA STORAGE CONFIG</div>
                                        <div class="space-y-2">
                                            <div class="space-y-1">
                                                <label class="text-[8px] font-mono text-text-muted uppercase">Database Path</label>
                                                <div class="px-2 py-1 bg-[#0a0a0a] border border-border/80 rounded text-[9px] text-[#e5e5e5] font-mono truncate">data/databases/ocr_receipts.db</div>
                                            </div>
                                            <div class="space-y-1">
                                                <label class="text-[8px] font-mono text-text-muted uppercase">OCR Confidence Threshold</label>
                                                <div class="px-2 py-1 bg-[#0a0a0a] border border-border/80 rounded text-[10px] text-[#e5e5e5] font-mono">80%</div>
                                            </div>
                                        </div>
                                        <div class="pt-2 flex gap-1">
                                            <button @click="testModelConnection" :disabled="testingModel" class="flex-1 py-1.5 px-2 bg-brand/10 hover:bg-brand/20 border border-brand/40 text-brand font-mono text-[9px] rounded transition-all">
                                                {{ testingModel ? 'Testing CPU...' : 'Test Connection' }}
                                            </button>
                                        </div>
                                        <div v-if="testResult" class="text-[8px] font-mono text-center transition-all duration-200" :class="testResult.includes('Success') ? 'text-green-400' : 'text-red-400'">
                                            {{ testResult }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 2: AI Clean (OCR correction) -->
                            <div v-if="activeTab === 2" class="grid sm:grid-cols-12 gap-4 animate-fadeIn">
                                <!-- Left column: raw ocr text -->
                                <div class="sm:col-span-5 space-y-2">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider border-b border-border/30 pb-1">// Raw OCR Stream (Typos)</div>
                                    <div class="bg-[#0e0e0d] border border-border/40 rounded-lg p-3 h-[250px] overflow-y-auto font-mono text-[9px] text-text-muted space-y-2 select-none leading-relaxed">
                                        <div><span class="text-[#e5e5e5] font-bold">ACME COPIER 5ERVICE5 INC.</span> <span class="text-red-400 text-[8px] font-bold">[typo: 5/S]</span></div>
                                        <div>St-Jean-sur-Richelieu, Qc</div>
                                        <div class="border-t border-border/10 pt-1">
                                            <div>FACT: <span class="text-red-400 bg-red-500/5 px-1 rounded">17O0</span> <span class="text-red-400">[typo: O/0]</span></div>
                                            <div>DATE: 19/O6/2O26 <span class="text-red-400">[typo: O/0]</span></div>
                                        </div>
                                        <div class="border-t border-border/10 pt-1 space-y-1">
                                            <div>- Maintenance... <span class="text-red-400 font-bold">$12O.O0</span></div>
                                            <div>- Papier Lettre... $10.00</div>
                                        </div>
                                        <div class="border-t border-border/10 pt-1">
                                            <div>TAX: <span class="text-red-400 font-bold">19.5O</span></div>
                                            <div class="font-bold">TOTAL: <span class="text-red-400 font-bold">149.5O</span></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right column: parsed output -->
                                <div class="sm:col-span-7 space-y-3 flex flex-col justify-between min-h-[250px]">
                                    <div class="text-[8px] font-mono text-brand uppercase tracking-wider border-b border-border/30 pb-1 flex justify-between items-center">
                                        <span>// AI Structured Output</span>
                                        <span v-if="aiStep === 'done'" class="text-[#27c93f] font-mono text-[8px]">✓ Done</span>
                                    </div>
                                    
                                    <div v-if="aiStep === 'processing'" class="p-4 bg-brand/5 border border-brand/20 rounded-xl flex items-center justify-center gap-2 animate-pulse h-40">
                                        <span class="animate-spin inline-block w-3 h-3 border-2 border-brand border-t-transparent rounded-full"></span>
                                        <span class="text-brand font-mono text-[9px] font-bold">Parsing local weights...</span>
                                    </div>

                                    <div v-if="aiStep === 'done'" class="space-y-2.5 animate-fadeIn">
                                        <!-- Vendor match -->
                                        <div class="p-2 bg-[#0a0a0a]/50 border border-border/80 rounded-lg flex justify-between items-center font-mono">
                                            <span class="text-text-muted">Vendor Matched:</span>
                                            <span class="text-[#e5e5e5] font-serif font-bold">ACME Copier Services Inc.</span>
                                        </div>
                                        <!-- Line items table representation -->
                                        <div class="space-y-1 font-mono text-[9px]">
                                            <div class="flex justify-between border-b border-border/20 text-text-muted text-[8px] font-bold pb-0.5">
                                                <span>EXTRACTED ITEMS</span>
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="flex justify-between text-[#e5e5e5]">
                                                <span class="truncate max-w-[160px]">Maintenance Copieur</span>
                                                <span class="text-brand">$120.00</span>
                                            </div>
                                            <div class="flex justify-between text-[#e5e5e5]">
                                                <span class="truncate max-w-[160px]">Papier Lettre</span>
                                                <span class="text-brand">$10.00</span>
                                            </div>
                                        </div>
                                        <!-- Tax & Total details -->
                                        <div class="pt-2 border-t border-border/40 space-y-1 font-mono text-[9px]">
                                            <div class="flex justify-between text-text-muted">
                                                <span>TPS/TVQ Tax (14.975%)</span>
                                                <span class="text-[#27c93f]">$19.50</span>
                                            </div>
                                            <div class="flex justify-between text-[#e5e5e5] font-bold text-xs">
                                                <span>Cleaned Total CAD</span>
                                                <span>$149.50</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="aiStep === 'idle'" class="p-8 text-center text-text-muted font-mono text-[10px] border border-dashed border-border/40 rounded-lg flex-1 flex items-center justify-center">
                                        Ready. Click run to simulate offline parsing.
                                    </div>

                                    <div class="flex gap-2 pt-2">
                                        <button @click="runAiCorrection" :disabled="aiStep === 'processing'" class="flex-1 py-2 bg-[#27c93f] text-[#0a0a0a] hover:bg-[#22a835] font-serif font-bold text-xs rounded transition-colors">
                                            {{ aiStep === 'processing' ? 'Processing...' : 'Run AI Correction' }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 3: Parallel Batch Scan -->
                            <div v-if="activeTab === 3" class="space-y-4 animate-fadeIn">
                                <div class="text-[8px] font-mono text-brand uppercase tracking-wider border-b border-border/30 pb-1 flex justify-between items-center">
                                    <span>// Parallel Batch Processor</span>
                                    <span v-if="batchStep === 'done'" class="text-green-400 font-mono text-[8px]">✓ Done</span>
                                </div>

                                <div class="bg-[#0e0e0d]/50 border border-border/60 rounded-xl overflow-hidden shadow-inner h-[230px] overflow-y-auto">
                                    <table class="w-full border-collapse text-[10px] font-mono">
                                        <thead>
                                            <tr class="bg-surface/50 text-[8px] text-text-muted uppercase text-left border-b border-border/30">
                                                <th class="p-2 border-none">Filename</th>
                                                <th class="p-2 border-none text-right">Size</th>
                                                <th class="p-2 border-none text-center">Status</th>
                                                <th class="p-2 border-none">Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="file in batchFiles" :key="file.name" class="border-b border-border/20 text-[9px] hover:bg-white/[0.01]">
                                                <td class="p-2 border-none text-[#e5e5e5] truncate max-w-[120px]">{{ file.name }}</td>
                                                <td class="p-2 border-none text-right text-text-muted">{{ file.size }}</td>
                                                <td class="p-2 border-none text-center">
                                                    <span class="px-1.5 py-0.5 rounded text-[8px] font-bold"
                                                          :class="{
                                                              'bg-white/5 text-text-muted border border-border/20': file.status === 'pending',
                                                              'bg-brand/10 text-brand border border-brand/20 animate-pulse': file.status === 'active',
                                                              'bg-green-500/10 text-green-400 border border-green-500/20': file.status === 'done'
                                                          }">
                                                        {{ file.status }}
                                                    </span>
                                                </td>
                                                <td class="p-2 border-none">
                                                    <div class="w-full bg-[#0a0a0a] rounded-full h-1 overflow-hidden border border-border/30">
                                                        <div class="h-full transition-all duration-100 ease-out"
                                                             :class="file.status === 'done' ? 'bg-green-400' : 'bg-brand'"
                                                             :style="{ width: file.progress + '%' }"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="flex items-center gap-3">
                                    <button @click="runBatchScan" :disabled="batchStep === 'active'" class="flex-1 py-2 bg-[#27c93f] text-[#0a0a0a] hover:bg-[#22a835] font-serif font-bold text-xs rounded transition-colors">
                                        {{ batchStep === 'active' ? 'Processing Batch...' : 'Start Batch Scan' }}
                                    </button>
                                </div>
                            </div>

                            <!-- Tab 4: Fuzzy Matching -->
                            <div v-if="activeTab === 4" class="grid sm:grid-cols-12 gap-4 animate-fadeIn">
                                <!-- Mock invoice page (Left column) -->
                                <div class="sm:col-span-5 space-y-2">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider border-b border-border/30 pb-1">// PDF Viewer (Input)</div>
                                    <div class="relative bg-white text-[#111111] p-3 rounded-lg border border-border/60 shadow-lg h-[240px] flex flex-col justify-between">
                                        <!-- Scanning laser -->
                                        <div v-show="matchStep === 'scanning'" class="absolute left-0 right-0 h-[2px] bg-brand animate-scan-laser shadow-[0_0_12px_#3B82F6] z-20"></div>
                                        
                                        <div class="space-y-1.5 relative z-10 text-[7px] font-sans">
                                            <div class="flex items-center justify-between border-b border-[#cccccc] pb-1.5 mb-2">
                                                <div class="w-7 h-7 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center font-bold text-brand text-[8px]">ACME</div>
                                                <div class="text-right">
                                                    <div class="font-bold text-[8px] uppercase tracking-wider">ACME COPIER SERVICES</div>
                                                    <div class="text-[6px] text-[#555555]">St-Jean-sur-Richelieu</div>
                                                </div>
                                            </div>
                                            <div class="font-bold border-b border-[#dddddd] pb-1">FACTURE N° 1700</div>
                                            <div class="flex justify-between font-bold text-[7px] border-b border-[#dddddd] pb-1">
                                                <span>Maintenance Copieur</span>
                                                <span>$120.00</span>
                                            </div>
                                            <div class="flex justify-between font-bold text-[7px]">
                                                <span>Papier Lettre</span>
                                                <span>$10.00</span>
                                            </div>
                                        </div>

                                        <div class="border-t border-[#cccccc] pt-1 text-[7px] text-[#555555] font-mono flex justify-between items-center relative z-10 bg-white">
                                            <span>acme_copier_invoice.pdf</span>
                                            <span>PAGE 1 OF 1</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Match details (Right column) -->
                                <div class="sm:col-span-7 flex flex-col justify-between min-h-[250px]">
                                    <div class="text-[8px] font-mono text-brand uppercase tracking-wider border-b border-border/30 pb-1 flex justify-between items-center">
                                        <span>// Fuzzy Matcher & Form</span>
                                        <span v-if="matchStep === 'done'" class="text-[#27c93f] font-mono text-[8px]">✓ Matched</span>
                                    </div>

                                    <div class="space-y-2.5">
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Project:</span>
                                            <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1 text-[10px] text-[#e5e5e5] font-mono flex justify-between items-center">
                                                <span>office</span>
                                                <span class="text-[8px]">▼</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Destination:</span>
                                            <div class="flex-1 bg-[#0a0a0a]/50 border border-border/60 rounded px-2.5 py-1 text-[9px] text-[#e5e5e5] font-mono truncate select-none">
                                                📁 /Dropbox/Factures/Office/
                                            </div>
                                        </div>

                                        <div class="p-2.5 bg-surface/40 border border-border/60 rounded-xl space-y-1">
                                            <div class="text-[8px] font-mono text-text-muted uppercase">File Naming Template Preview</div>
                                            <div class="font-mono text-[10px] text-brand break-all min-h-5 flex items-center">
                                                <span class="transition-opacity duration-300" :class="matchStep === 'done' ? 'opacity-100' : 'opacity-0'">
                                                    office_facture_2026-06-19_acme-copier_149.50.pdf
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex gap-2 pt-2">
                                        <button @click="runFuzzyMatchingScan" :disabled="matchStep === 'scanning'" class="flex-1 py-2 bg-[#27c93f] text-[#0a0a0a] hover:bg-[#22a835] font-serif font-bold text-xs rounded transition-colors">
                                            {{ matchStep === 'scanning' ? 'Scanning...' : 'Verify Match' }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 5: PDF Report Builder -->
                            <div v-if="activeTab === 5" class="grid sm:grid-cols-12 gap-4 animate-fadeIn">
                                <!-- Build logs (Left column) -->
                                <div class="sm:col-span-5 space-y-2">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider border-b border-border/30 pb-1">// Build logs</div>
                                    <div class="bg-[#0e0e0d] border border-border/60 rounded-lg p-3 h-[250px] overflow-y-auto font-mono text-[9px] text-text-muted space-y-2 select-none shadow-inner">
                                        <div v-for="(log, idx) in logs" :key="idx" class="leading-relaxed animate-fadeIn">
                                            <span class="text-brand mr-1">[builder]</span>
                                            <span class="text-[#e5e5e5]">{{ log }}</span>
                                        </div>
                                        <div v-if="reportStep === 'generating'" class="flex items-center gap-1.5 text-brand animate-pulse mt-1">
                                            <span class="animate-spin inline-block w-2 h-2 border border-brand border-t-transparent rounded-full"></span>
                                            <span>Compiling files...</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Compiled expense log index (Right column) -->
                                <div class="sm:col-span-7 flex flex-col justify-between min-h-[250px]">
                                    <div class="text-[8px] font-mono text-brand uppercase tracking-wider border-b border-border/30 pb-1 flex justify-between items-center">
                                        <span>// Compiled Reconciliation Sheet</span>
                                        <span v-if="reportStep === 'done'" class="text-[#27c93f] font-mono text-[8px]">✓ Index Built</span>
                                    </div>

                                    <div v-if="reportStep === 'done'" class="bg-[#0a0a0a]/50 border border-border/80 rounded-xl overflow-hidden select-none font-mono text-[8px] space-y-1 h-[210px] overflow-y-auto">
                                        <table class="w-full text-left">
                                            <thead>
                                                <tr class="bg-surface/50 border-b border-border/30 font-bold text-text-muted">
                                                    <th class="p-1.5">Date</th>
                                                    <th class="p-1.5">Supplier</th>
                                                    <th class="p-1.5 text-right">Taxes</th>
                                                    <th class="p-1.5 text-right">Total</th>
                                                    <th class="p-1.5 text-center">Receipt</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="receipt in receipts" :key="receipt.file" class="border-b border-border/10 text-[9px] hover:bg-white/[0.01]">
                                                    <td class="p-1.5 text-[#e5e5e5]">{{ receipt.date }}</td>
                                                    <td class="p-1.5 text-text-muted truncate max-w-[80px]">{{ receipt.vendor }}</td>
                                                    <td class="p-1.5 text-right text-[#e5e5e5]">{{ receipt.tax }}</td>
                                                    <td class="p-1.5 text-right text-brand font-bold">{{ receipt.amount }}</td>
                                                    <td class="p-1.5 text-center text-blue-400 underline cursor-pointer hover:text-blue-300">📄 view</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div v-if="reportStep === 'idle'" class="p-8 text-center text-text-muted font-mono text-[10px] border border-dashed border-border/40 rounded-lg flex-1 flex items-center justify-center">
                                        Click build to compile files into PDF reports.
                                    </div>

                                    <div class="flex gap-2 pt-2">
                                        <button @click="startGeneration" :disabled="reportStep === 'generating'" class="flex-1 py-2 bg-[#27c93f] text-[#0a0a0a] hover:bg-[#22a835] font-serif font-bold text-xs rounded transition-colors">
                                            {{ reportStep === 'generating' ? 'Compiling Report...' : 'Build HTML Report' }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Footer Control & Status bar (Only shown for Parser Tab 0) -->
                        <div v-if="activeTab === 0" class="bg-surface/40 px-4 py-3 border-t border-border/40 flex items-center justify-between gap-4">
                            <div class="text-[10px] font-mono text-text-muted">
                                Status: <span :class="parserSteps[parserStep].statusColor" class="font-semibold">{{ $t('hero.simulator.status.' + parserSteps[parserStep].statusKey) }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="btn-outline text-[9px] font-mono px-3.5 py-1.5 h-7">{{ $t('hero.simulator.discard') }}</button>
                                <button class="btn-brand text-[9px] font-mono px-3.5 py-1.5 h-7 flex items-center gap-1 bg-[#27c93f] hover:bg-[#22a835]"
                                        :class="{'opacity-50 cursor-not-allowed': parserStep < 4}">
                                    {{ $t('hero.simulator.save') }}
                                </button>
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
    name: 'HeroSection',
    props: {
        activeTab: {
            type: Number,
            default: 0
        }
    },
    data() {
        return {
            selectedModelSize: 'Tiny (0.5B - ~140 MB)',
            testingModel: false,
            testResult: '',

            parserStep: 0,
            parserSteps: [
                { key: 'load', statusKey: 'ready', statusColor: 'text-text-muted' },
                { key: 'ocr', statusKey: 'ocr', statusColor: 'text-[#60A5FA]' },
                { key: 'extract', statusKey: 'extract', statusColor: 'text-[#60A5FA]' },
                { key: 'rename', statusKey: 'rename', statusColor: 'text-[#60A5FA]' },
                { key: 'saveStep', statusKey: 'save', statusColor: 'text-[#27c93f]' }
            ],
            parserIntervalId: null,

            aiStep: 'idle',
            batchStep: 'idle',
            batchFiles: [
                { name: 'invoice_utility_2026_06.pdf', size: '420 KB', status: 'pending', progress: 0 },
                { name: 'invoice_telecom_2026_05.pdf', size: '1.2 MB', status: 'pending', progress: 0 },
                { name: 'invoice_mobile_2026_06.pdf', size: '850 KB', status: 'pending', progress: 0 },
                { name: 'invoice_cloud_2026_04.pdf', size: '340 KB', status: 'pending', progress: 0 },
                { name: 'invoice_office_supplies_2026.pdf', size: '180 KB', status: 'pending', progress: 0 }
            ],

            matchStep: 'idle',

            reportStep: 'idle',
            progress: 0,
            logs: [],
            receipts: [
                { date: '2025-01-01', vendor: 'office-depot', amount: '$149.50', tax: '$19.50', file: 'acme_copier_jan.pdf' },
                { date: '2025-01-02', vendor: 'hardware-store', amount: '$417.21', tax: '$54.24', file: 'hardware_0102.pdf' },
                { date: '2025-01-19', vendor: 'telecom-local', amount: '$63.32', tax: '$8.23', file: 'telecom_internet.pdf' },
                { date: '2025-01-20', vendor: 'bookstore', amount: '$23.95', tax: '$3.11', file: 'office_books.pdf' }
            ],
            intervalId: null
        };
    },
    computed: {
        tabNames() {
            return this.$t('hero.carouselTabs') || ['Parser', 'Settings', 'AI Clean', 'Batch Scan', 'Fuzzy Match', 'Reports'];
        }
    },
    watch: {
        activeTab(newTab) {
            this.handleTabActivation(newTab);
        }
    },
    mounted() {
        this.handleTabActivation(this.activeTab);
    },
    beforeUnmount() {
        this.clearAllSimulationIntervals();
    },
    methods: {
        selectTab(idx) {
            this.$emit('tab-changed', idx);
        },
        clearAllSimulationIntervals() {
            if (this.parserIntervalId) {
                clearInterval(this.parserIntervalId);
                this.parserIntervalId = null;
            }
            if (this.intervalId) {
                clearInterval(this.intervalId);
                this.intervalId = null;
            }
        },
        handleTabActivation(tabIdx) {
            this.clearAllSimulationIntervals();

            if (tabIdx === 0) {
                this.parserStep = 0;
                this.runParserSimulation();
                this.parserIntervalId = setInterval(this.runParserSimulation, 10000);
            } else if (tabIdx === 1) {
                this.testResult = '';
                this.testingModel = false;
            } else if (tabIdx === 2) {
                this.aiStep = 'idle';
                setTimeout(() => {
                    this.runAiCorrection();
                }, 300);
            } else if (tabIdx === 3) {
                this.batchStep = 'idle';
                this.batchFiles.forEach(f => {
                    f.status = 'pending';
                    f.progress = 0;
                });
                setTimeout(() => {
                    this.runBatchScan();
                }, 300);
            } else if (tabIdx === 4) {
                this.matchStep = 'idle';
                setTimeout(() => {
                    this.runFuzzyMatchingScan();
                }, 300);
            } else if (tabIdx === 5) {
                this.reportStep = 'idle';
                this.logs = [];
                setTimeout(() => {
                    this.startGeneration();
                }, 300);
            }
        },
        runParserSimulation() {
            this.parserStep = 0;

            setTimeout(() => {
                if (this.activeTab === 0) {
                    this.parserStep = 1; // OCR Scan
                }
            }, 1500);

            setTimeout(() => {
                if (this.activeTab === 0) {
                    this.parserStep = 2; // Extract
                }
            }, 3500);

            setTimeout(() => {
                if (this.activeTab === 0) {
                    this.parserStep = 3; // Rename
                }
            }, 5500);

            setTimeout(() => {
                if (this.activeTab === 0) {
                    this.parserStep = 4; // Save
                }
            }, 7500);
        },
        testModelConnection() {
            this.testingModel = true;
            this.testResult = '';
            setTimeout(() => {
                this.testingModel = false;
                this.testResult = 'Success (4 CPU threads active)';
            }, 1000);
        },
        runAiCorrection() {
            this.aiStep = 'processing';
            setTimeout(() => {
                if (this.activeTab === 2 && this.aiStep === 'processing') {
                    this.aiStep = 'done';
                }
            }, 1500);
        },
        runBatchScan() {
            this.batchStep = 'active';
            this.batchFiles.forEach(f => {
                f.status = 'pending';
                f.progress = 0;
            });

            let elapsed = 0;
            this.intervalId = setInterval(() => {
                if (this.activeTab !== 3 || this.batchStep !== 'active') {
                    clearInterval(this.intervalId);
                    this.intervalId = null;
                    return;
                }
                elapsed += 100;

                // File 1
                if (elapsed <= 1000) {
                    this.batchFiles[0].status = 'active';
                    this.batchFiles[0].progress = Math.min(100, Math.floor((elapsed / 1000) * 100));
                } else {
                    this.batchFiles[0].status = 'done';
                    this.batchFiles[0].progress = 100;
                }

                // File 2
                if (elapsed <= 1500) {
                    this.batchFiles[1].status = 'active';
                    this.batchFiles[1].progress = Math.min(100, Math.floor((elapsed / 1500) * 100));
                } else {
                    this.batchFiles[1].status = 'done';
                    this.batchFiles[1].progress = 100;
                }

                // File 3
                if (elapsed >= 300) {
                    if (elapsed <= 2000) {
                        this.batchFiles[2].status = 'active';
                        this.batchFiles[2].progress = Math.min(100, Math.floor(((elapsed - 300) / 1700) * 100));
                    } else {
                        this.batchFiles[2].status = 'done';
                        this.batchFiles[2].progress = 100;
                    }
                }

                // File 4
                if (elapsed >= 600) {
                    if (elapsed <= 2200) {
                        this.batchFiles[3].status = 'active';
                        this.batchFiles[3].progress = Math.min(100, Math.floor(((elapsed - 600) / 1600) * 100));
                    } else {
                        this.batchFiles[3].status = 'done';
                        this.batchFiles[3].progress = 100;
                    }
                }

                // File 5
                if (elapsed >= 900) {
                    if (elapsed <= 2500) {
                        this.batchFiles[4].status = 'active';
                        this.batchFiles[4].progress = Math.min(100, Math.floor(((elapsed - 900) / 1600) * 100));
                    } else {
                        this.batchFiles[4].status = 'done';
                        this.batchFiles[4].progress = 100;
                        this.batchStep = 'done';
                        clearInterval(this.intervalId);
                        this.intervalId = null;
                    }
                }
            }, 100);
        },
        runFuzzyMatchingScan() {
            this.matchStep = 'scanning';
            setTimeout(() => {
                if (this.activeTab === 4 && this.matchStep === 'scanning') {
                    this.matchStep = 'done';
                }
            }, 1500);
        },
        startGeneration() {
            this.reportStep = 'generating';
            this.logs = [];

            const logSteps = [
                '📂 Indexing source directory: /Dropbox/Factures/Office 2025...',
                '🔍 Scanning 152 PDFs and receipt images locally...',
                '🧠 Executing local AI OCR data extraction...',
                '📋 Generating tabular Reconciliation Register...',
                '🖼️ Attaching visual receipt proofs at report end...',
                '💾 Compiling unified PDF & HTML document...'
            ];

            logSteps.forEach((step, idx) => {
                setTimeout(() => {
                    if (this.activeTab === 5 && this.reportStep === 'generating') {
                        this.logs.push(step);
                        if (idx === logSteps.length - 1) {
                            this.reportStep = 'done';
                        }
                    }
                }, (idx + 1) * 300);
            });
        }
    }
};
</script>

<style scoped>
@keyframes scan {
    0% { top: 0%; }
    50% { top: 100%; }
    100% { top: 0%; }
}
.animate-scan-laser {
    animation: scan 3s infinite linear;
}
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.98); }
    to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
    animation: fadeIn 0.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
</style>
