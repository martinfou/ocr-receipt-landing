<template>
    <section class="relative overflow-hidden py-16 lg:py-20 min-h-screen flex items-center justify-center">
        <!-- Background Image -->
        <img 
            class="absolute inset-0 w-full h-full object-cover z-0" 
            :src="'/images/desk_bg.png'" alt="Clean desk with greenery">
        
        <!-- Subtle Overlay -->
        <div class="absolute inset-0 bg-surface-light/30 backdrop-blur-sm z-0"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Column: Copy & CTAs (1/3 Width) -->
                <div class="lg:col-span-4 text-left flex flex-col items-start bg-surface-light border border-border p-8 lg:p-10 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative z-10 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-brand/10 border border-brand/20 flex items-center justify-center mb-6 select-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-brand-dark fill-none" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1-2-1z"></path>
                            <path d="M16 8H8"></path>
                            <path d="M16 12H8"></path>
                            <path d="M16 16H8"></path>
                        </svg>
                    </div>
                    
                    <div class="text-[11px] font-mono text-brand-dark mb-4 tracking-wider uppercase" v-html="$t('hero.subtitle')">
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-5xl font-serif font-medium leading-[1.15] mb-4 tracking-[-0.02em] text-wrap-balance text-text" v-html="$t('hero.title')">
                    </h1>

                    <p class="text-sm text-text-muted mb-8 leading-relaxed max-w-sm" v-html="$t('hero.description')">
                    </p>

                    <div class="flex flex-wrap items-center gap-4 w-full sm:w-auto mb-8">
                        <a href="#download" class="btn-brand text-sm px-7 py-3.5 w-full sm:w-auto shadow-lg hover:shadow-xl transition-all duration-300 text-center cursor-pointer">
                            {{ $t('hero.cta1') }}
                        </a>
                    </div>

                    <ul class="space-y-3 mb-8 w-full">
                        <li v-for="(bullet, index) in $t('hero.bullets')" :key="index" class="flex items-start gap-2.5 text-sm text-text-muted">
                            <span class="flex-shrink-0 w-5 h-5 rounded-full bg-brand/10 flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-brand-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="leading-relaxed">{{ bullet }}</span>
                        </li>
                    </ul>


                    <div class="border-t border-border pt-6 w-full max-w-lg">
                        <p class="text-xs text-text-muted leading-relaxed mb-4">
                            {{ $t('hero.designedFor') }}
                        </p>
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-border text-[10px] text-text-muted bg-surface/80 font-mono select-none">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-dark inline-block animate-pulse"></span>
                            {{ $t('hero.badges') }}
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Receipt Demo (2/3 Width) -->
                <div class="lg:col-span-8 w-full mx-auto lg:mx-0 relative z-10 flex flex-col items-center justify-center gap-4">
                    <div class="w-full max-w-3xl border border-border bg-surface-light/95 backdrop-blur-md rounded-xl overflow-hidden shadow-2xl relative font-sans text-xs">
                        
                        <!-- Carousel Top Header bar (OS Window style + Tab bar) -->
                        <div class="border-b border-border">
                            <!-- Window dots & title -->
                            <div class="flex items-center justify-between px-4 py-3 border-b border-border bg-surface-light z-10">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-brand-dark"></span>
                                    <span class="font-mono text-[10px] text-text-muted uppercase tracking-wider ml-1.5 font-medium">Desktop Simulator</span>
                                </div>
                                <div class="text-[9px] text-brand-dark font-mono font-bold uppercase tracking-wider bg-brand/10 px-2 py-0.5 rounded border border-brand/20">
                                    Offline Mode
                                </div>
                            </div>
                            
                            <!-- Carousel Navigation Tabs -->
                            <div class="flex overflow-x-auto scrollbar-none font-mono text-[10px] uppercase tracking-wider text-text-muted select-none bg-surface border-b border-border">
                                <button v-for="(tabName, idx) in tabNames" :key="idx"
                                        @click="selectTab(idx)"
                                        class="flex-1 min-w-[75px] py-4 px-2 text-center border-r border-border hover:bg-surface-light hover:text-brand-dark transition-all relative font-medium"
                                        :class="idx === activeTab ? 'bg-surface-light text-brand-dark font-bold' : ''">
                                    <span>{{ tabName }}</span>
                                    <span v-if="idx === activeTab" class="absolute bottom-0 left-0 right-0 h-[2px] bg-brand-dark"></span>
                                </button>
                            </div>
                        </div>

                        <!-- Active Simulation Panes -->
                        <!-- Active Simulation Panes -->
                        <div class="p-5 bg-surface/40 min-h-[350px] flex flex-col justify-between">
                            
                            <!-- Tab 0: Parser (Original interactive OCR receipt simulator) -->
                            <div v-if="activeTab === 0" class="grid sm:grid-cols-12 gap-4 animate-fadeIn">
                                <!-- Left column: Mock Receipt representation -->
                                <div class="sm:col-span-5 space-y-2 flex flex-col items-center">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider border-b border-border pb-1 w-full text-center">// Scanned Receipt</div>
                                    <div class="relative bg-[#fdfbf7] text-[#111111] p-3 shadow-md w-[180px] min-h-[260px] flex flex-col font-mono text-[7px] border-l border-r border-[#e5e5e5] drop-shadow-xl" style="clip-path: polygon(0 0, 100% 0, 100% calc(100% - 4px), 95% 100%, 90% calc(100% - 4px), 85% 100%, 80% calc(100% - 4px), 75% 100%, 70% calc(100% - 4px), 65% 100%, 60% calc(100% - 4px), 55% 100%, 50% calc(100% - 4px), 45% 100%, 40% calc(100% - 4px), 35% 100%, 30% calc(100% - 4px), 25% 100%, 20% calc(100% - 4px), 15% 100%, 10% calc(100% - 4px), 5% 100%, 0 calc(100% - 4px));">
                                        <!-- Laser scanning line -->
                                        <div v-show="parserStep === 1" class="absolute left-0 right-0 h-[2px] bg-brand animate-scan-laser shadow-[0_0_8px_#4ade80] z-20 opacity-75"></div>
                                        
                                        <!-- Document representation -->
                                        <div class="space-y-1.5 relative z-10 flex-1 opacity-80 mix-blend-multiply">
                                            <div class="text-center pb-2 border-b border-dashed border-[#cccccc] mb-2">
                                                <div class="font-bold text-[9px] uppercase tracking-wider">MOM & POP CAFE</div>
                                                <div class="text-[6px]">123 Main Street</div>
                                                <div class="text-[6px]">City, Province</div>
                                            </div>
                                            <div class="text-center font-bold pb-1">RECEIPT #4209</div>
                                            <div class="text-[6px] text-center mb-2">2026-06-19 08:45 AM</div>
                                            <div class="flex justify-between font-bold text-[7px] border-b border-dashed border-[#cccccc] pb-1">
                                                <span>Espresso</span>
                                                <span>$3.50</span>
                                            </div>
                                            <div class="flex justify-between font-bold text-[7px] border-b border-dashed border-[#cccccc] pb-1">
                                                <span>Almond Croissant</span>
                                                <span>$4.25</span>
                                            </div>
                                            <div class="flex justify-between font-bold text-[7px] mt-2">
                                                <span>Subtotal</span>
                                                <span>$7.75</span>
                                            </div>
                                            <div class="flex justify-between font-bold text-[7px]">
                                                <span>Tax (5%)</span>
                                                <span>$0.39</span>
                                            </div>
                                            <div class="flex justify-between font-bold text-[9px] mt-1 border-t border-border pt-1">
                                                <span>TOTAL</span>
                                                <span>$8.14</span>
                                            </div>
                                            <div class="text-center mt-3 text-[5px]">Thank you for your visit!</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right column: Extracted fields & rename preview -->
                                <div class="sm:col-span-7 flex flex-col justify-between space-y-4">
                                    
                                    <!-- Document Fields -->
                                    <div class="space-y-2.5">
                                        <div class="text-[9px] font-mono text-text-muted uppercase tracking-wider border-b border-border pb-1.5 mb-1.5 flex items-center justify-between">
                                            <span>{{ $t('hero.simulator.fields') }}</span>
                                            <span class="text-brand-deep font-mono text-[8px]" v-if="parserStep >= 2">{{ $t('hero.simulator.matchConfirmed') }}</span>
                                        </div>
                                        
                                        <!-- Vendor Field -->
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Vendor:</span>
                                            <div class="flex-1 bg-surface-light border border-border rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden shadow-sm">
                                                <span class="font-mono text-[10px] text-text transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                    mom-pop-cafe
                                                </span>
                                                <span v-if="parserStep >= 2" class="text-[8px] bg-brand/20 text-brand-deep border border-brand/40 px-1 rounded font-mono font-medium scale-90">
                                                    98% Match
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Date Field -->
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Date:</span>
                                            <div class="flex-1 bg-surface-light border border-border rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden shadow-sm">
                                                <span class="font-mono text-[10px] text-text transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                    2026-06-19
                                                </span>
                                                <span v-if="parserStep >= 2" class="text-[8px] bg-brand/20 text-brand-deep border border-brand/40 px-1 rounded font-mono font-medium scale-90">
                                                    100% Match
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Taxes Field -->
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Taxes ($):</span>
                                            <div class="flex-1 bg-surface-light border border-border rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden shadow-sm">
                                                <span class="font-mono text-[10px] text-text transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                    0.39
                                                </span>
                                                <span v-if="parserStep >= 2" class="text-[8px] bg-brand/20 text-brand-deep border border-brand/40 px-1 rounded font-mono font-medium scale-90">
                                                    99% Match
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Total Field -->
                                        <div class="flex items-center gap-2">
                                            <span class="w-16 text-text-muted text-[10px]">Total ($):</span>
                                            <div class="flex-1 bg-surface-light border border-border rounded px-2.5 py-1.5 h-6 flex items-center justify-between overflow-hidden shadow-sm">
                                                <span class="font-mono text-[10px] text-text transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">
                                                    8.14
                                                </span>
                                                <span v-if="parserStep >= 2" class="text-[8px] bg-brand/20 text-brand-deep border border-brand/40 px-1 rounded font-mono font-medium scale-90">
                                                    100% Match
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- File Naming Preview -->
                                    <div class="bg-surface border border-border rounded-lg p-3 space-y-1 shadow-sm">
                                        <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider">{{ $t('hero.simulator.preview') }}</div>
                                        <div class="font-mono text-[9px] text-brand-dark break-all h-6 overflow-hidden flex items-center">
                                            <span class="transition-opacity duration-300" :class="parserStep >= 3 ? 'opacity-100' : 'opacity-0'">
                                                mom-pop-cafe_2026-06-19_8.14.pdf
                                            </span>
                                        </div>
                                        <div class="text-[8px] text-brand-deep font-mono transition-opacity duration-300" :class="parserStep >= 3 ? 'opacity-100' : 'opacity-0'">
                                            {{ $t('hero.simulator.validFilename') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!-- Tab 1: Local AI & Rename -->
                            <div v-if="activeTab === 1" class="grid sm:grid-cols-12 gap-4 animate-fadeIn">
                                <!-- Left column: raw ocr text -->
                                <div class="sm:col-span-5 space-y-2">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider border-b border-border pb-1">// Raw OCR Stream (with Typos)</div>
                                    <div class="bg-surface border border-border rounded-lg p-3 h-[250px] overflow-y-auto font-mono text-[9px] text-text-muted space-y-2 select-none leading-relaxed">
                                        <div><span class="text-text font-bold">ACME COPIER 5ERVICE5 INC.</span> <span class="text-red-400 text-[8px] font-bold">[typo: 5/S]</span></div>
                                        <div>St-Jean-sur-Richelieu, Qc</div>
                                        <div class="border-t border-border/20 pt-1">
                                            <div>FACT: <span class="text-red-400 bg-red-500/5 px-1 rounded">17O0</span> <span class="text-red-400">[typo: O/0]</span></div>
                                            <div>DATE: 19/O6/2O26 <span class="text-red-400">[typo: O/0]</span></div>
                                        </div>
                                        <div class="border-t border-border/20 pt-1 space-y-1">
                                            <div>- Maintenance... <span class="text-red-400 font-bold">$12O.O0</span></div>
                                            <div>- Papier Lettre... $10.00</div>
                                        </div>
                                        <div class="border-t border-border/20 pt-1">
                                            <div>TAX: <span class="text-red-400 font-bold">19.5O</span></div>
                                            <div class="font-bold">TOTAL: <span class="text-red-400 font-bold">149.5O</span></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right column: parsed output -->
                                <div class="sm:col-span-7 space-y-3 flex flex-col justify-between min-h-[250px]">
                                    <div class="text-[8px] font-mono text-brand-dark uppercase tracking-wider border-b border-border pb-1 flex justify-between items-center">
                                        <span>// AI Structured Output & Rename</span>
                                        <span v-if="aiStep === 'done'" class="text-green-600 font-mono text-[8px]">✓ Extracted & Renamed</span>
                                    </div>
                                    
                                    <div v-if="aiStep === 'processing'" class="p-4 bg-brand/5 border border-brand/20 rounded-xl flex items-center justify-center gap-2 animate-pulse h-40">
                                        <span class="animate-spin inline-block w-3 h-3 border-2 border-brand border-t-transparent rounded-full"></span>
                                        <span class="text-brand font-mono text-[9px] font-bold">Parsing local weights...</span>
                                    </div>

                                    <div v-if="aiStep === 'done'" class="space-y-2.5 animate-fadeIn">
                                        <!-- Vendor match -->
                                        <div class="p-2 bg-surface border border-border rounded-lg flex justify-between items-center font-mono">
                                            <span class="text-text-muted">Vendor Matched:</span>
                                            <span class="text-text font-serif font-bold">ACME Copier Services Inc.</span>
                                        </div>
                                        <!-- Line items table representation -->
                                        <div class="space-y-1 font-mono text-[9px]">
                                            <div class="flex justify-between border-b border-border/20 text-text-muted text-[8px] font-bold pb-0.5">
                                                <span>EXTRACTED ITEMS</span>
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="flex justify-between text-text">
                                                <span class="truncate max-w-[160px]">Maintenance Copieur</span>
                                                <span class="text-brand">$120.00</span>
                                            </div>
                                            <div class="flex justify-between text-text">
                                                <span class="truncate max-w-[160px]">Papier Lettre</span>
                                                <span class="text-brand">$10.00</span>
                                            </div>
                                        </div>
                                        <!-- Tax & Total details -->
                                        <div class="pt-2 border-t border-border space-y-1 font-mono text-[9px]">
                                            <div class="flex justify-between text-text-muted">
                                                <span>TPS/TVQ Tax (14.975%)</span>
                                                <span class="text-green-600">$19.50</span>
                                            </div>
                                            <div class="flex justify-between text-text font-bold text-xs">
                                                <span>Cleaned Total CAD</span>
                                                <span>$149.50</span>
                                            </div>
                                        </div>
                                        <!-- Auto Rename Preview -->
                                        <div class="bg-surface border border-border rounded-lg p-2.5 space-y-1 shadow-sm mt-1">
                                            <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider">File Naming Template Preview</div>
                                            <div class="font-mono text-[9px] text-brand-dark flex items-center">
                                                office_invoice_2026-06-19_acme-copier_149.50.pdf
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="aiStep === 'idle'" class="p-8 text-center text-text-muted font-mono text-[10px] border border-dashed border-border rounded-lg flex-1 flex items-center justify-center">
                                        Ready. Click run to simulate offline parsing & renaming.
                                    </div>

                                    <div class="flex gap-2 pt-2">
                                        <button @click="runAiCorrection" :disabled="aiStep === 'processing'" class="flex-1 py-2 bg-brand-dark text-white hover:bg-brand-deep font-serif font-bold text-xs rounded transition-colors">
                                            {{ aiStep === 'processing' ? 'Processing...' : 'Run AI Extraction & Rename' }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 2: Advanced Search (Searchable database) -->
                            <div v-if="activeTab === 2" class="grid sm:grid-cols-12 gap-4 animate-fadeIn">
                                <!-- Left column: Search Control -->
                                <div class="sm:col-span-5 space-y-3">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider border-b border-border pb-1">// SQLite Database Search</div>
                                    
                                    <div class="bg-surface border border-border rounded-lg p-3.5 space-y-3 shadow-sm">
                                        <div class="space-y-1">
                                            <label class="text-[8px] font-mono text-text-muted uppercase">Search Query</label>
                                            <div class="relative bg-surface-light border border-border rounded px-2.5 py-1.5 h-7 flex items-center gap-1.5 shadow-inner">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 stroke-text-muted fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                </svg>
                                                <span class="font-mono text-[10px] text-text min-w-[5px]">
                                                    {{ searchQuery }}<span class="animate-pulse text-brand">|</span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="pt-2 border-t border-border space-y-2 text-[8px] font-mono text-text-muted">
                                            <div class="flex justify-between">
                                                <span>Local Index:</span>
                                                <span class="text-text font-bold">152 receipts</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Index Size:</span>
                                                <span class="text-text font-bold">2.4 MB</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search Speed:</span>
                                                <span class="text-green-600 font-bold">0.8 ms (Local SQLite)</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3 bg-brand/5 border border-brand/20 rounded-lg text-[9px] leading-relaxed text-text-muted font-mono">
                                        🔑 Search results are queried instantly from the local database on your hard drive, completely offline.
                                    </div>
                                </div>

                                <!-- Right column: query results -->
                                <div class="sm:col-span-7 flex flex-col justify-between min-h-[250px]">
                                    <div class="text-[8px] font-mono text-brand-dark uppercase tracking-wider border-b border-border pb-1 flex justify-between items-center">
                                        <span>// SQL Search Results</span>
                                        <span class="text-brand-dark font-mono text-[8px] font-bold">{{ filteredReceipts.length }} found</span>
                                    </div>

                                    <div class="bg-surface border border-border rounded-xl overflow-hidden shadow-inner h-[210px] overflow-y-auto mt-2">
                                        <table class="w-full text-left font-mono text-[8px]">
                                            <thead>
                                                <tr class="bg-surface/50 border-b border-border font-bold text-text-muted">
                                                    <th class="p-1.5">Date</th>
                                                    <th class="p-1.5">Supplier</th>
                                                    <th class="p-1.5 text-right">Total</th>
                                                    <th class="p-1.5">Renamed File</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="receipt in filteredReceipts" :key="receipt.file" class="border-b border-border/20 text-[9px] hover:bg-surface-light/[0.01]">
                                                    <td class="p-1.5 text-text-muted">{{ receipt.date }}</td>
                                                    <td class="p-1.5 text-text font-bold">{{ receipt.vendor }}</td>
                                                    <td class="p-1.5 text-right text-brand font-bold">{{ receipt.amount }}</td>
                                                    <td class="p-1.5 text-text-muted truncate max-w-[120px]">{{ receipt.file }}</td>
                                                </tr>
                                                <tr v-if="filteredReceipts.length === 0">
                                                    <td colspan="4" class="p-8 text-center text-text-muted">No matching local receipts found.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 3: Reports (Formerly Tab 5) -->
                            <div v-if="activeTab === 3" class="grid sm:grid-cols-12 gap-4 animate-fadeIn">
                                <!-- Build logs (Left column) -->
                                <div class="sm:col-span-5 space-y-2">
                                    <div class="text-[8px] font-mono text-text-muted uppercase tracking-wider border-b border-border pb-1">// Build logs</div>
                                    <div class="bg-surface border border-border rounded-lg p-3 h-[250px] overflow-y-auto font-mono text-[9px] text-text-muted space-y-2 select-none shadow-inner">
                                        <div v-for="(log, idx) in logs" :key="idx" class="leading-relaxed animate-fadeIn">
                                            <span class="text-brand mr-1">[builder]</span>
                                            <span class="text-text">{{ log }}</span>
                                        </div>
                                        <div v-if="reportStep === 'generating'" class="flex items-center gap-1.5 text-brand animate-pulse mt-1">
                                            <span class="animate-spin inline-block w-2 h-2 border border-brand border-t-transparent rounded-full"></span>
                                            <span>Compiling files...</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Compiled expense log index (Right column) -->
                                <div class="sm:col-span-7 flex flex-col justify-between min-h-[250px]">
                                    <div class="text-[8px] font-mono text-brand uppercase tracking-wider border-b border-border pb-1 flex justify-between items-center">
                                        <span>// Compiled Reconciliation Sheet</span>
                                        <span v-if="reportStep === 'done'" class="text-green-600 font-mono text-[8px]">✓ Index Built</span>
                                    </div>

                                    <div v-if="reportStep === 'done'" class="bg-surface border border-border rounded-xl overflow-hidden select-none font-mono text-[8px] space-y-1 h-[210px] overflow-y-auto">
                                        <table class="w-full text-left">
                                            <thead>
                                                <tr class="bg-surface/50 border-b border-border font-bold text-text-muted">
                                                    <th class="p-1.5">Date</th>
                                                    <th class="p-1.5">Supplier</th>
                                                    <th class="p-1.5 text-right">Taxes</th>
                                                    <th class="p-1.5 text-right">Total</th>
                                                    <th class="p-1.5 text-center">Receipt</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="receipt in receipts" :key="receipt.file" class="border-b border-border/20 text-[9px] hover:bg-surface-light/[0.01]">
                                                    <td class="p-1.5 text-text">{{ receipt.date }}</td>
                                                    <td class="p-1.5 text-text-muted truncate max-w-[80px]">{{ receipt.vendor }}</td>
                                                    <td class="p-1.5 text-right text-text">{{ receipt.tax }}</td>
                                                    <td class="p-1.5 text-right text-brand font-bold">{{ receipt.amount }}</td>
                                                    <td class="p-1.5 text-center text-blue-400 underline cursor-pointer hover:text-blue-300">📄 view</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div v-if="reportStep === 'idle'" class="p-8 text-center text-text-muted font-mono text-[10px] border border-dashed border-border rounded-lg flex-1 flex items-center justify-center">
                                        Click build to compile files into PDF reports.
                                    </div>

                                    <div class="flex gap-2 pt-2">
                                        <button @click="startGeneration" :disabled="reportStep === 'generating'" class="flex-1 py-2 bg-brand-dark text-white hover:bg-brand-deep font-serif font-bold text-xs rounded transition-colors">
                                            {{ reportStep === 'generating' ? 'Compiling Report...' : 'Build HTML Report' }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Control & Status bar (Only shown for Parser Tab 0) -->
                        <div v-if="activeTab === 0" class="bg-surface/40 px-4 py-3 border-t border-border flex items-center justify-between gap-4">
                            <div class="text-[10px] font-mono text-text-muted">
                                Status: <span :class="parserSteps[parserStep].statusColor" class="font-semibold">{{ $t('hero.simulator.status.' + parserSteps[parserStep].statusKey) }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="btn-outline text-[9px] font-mono px-3.5 py-1.5 h-7">{{ $t('hero.simulator.discard') }}</button>
                                <button class="btn-brand text-[9px] font-mono px-3.5 py-1.5 h-7 flex items-center gap-1 bg-brand-dark hover:bg-brand-deep"
                                        :class="{'opacity-50 cursor-not-allowed': parserStep < 4}">
                                    {{ $t('hero.simulator.save') }}
                                </button>
                            </div>
                        </div>

                    </div>

                    <!-- Scroll Down Indicator -->
                    <a href="#problem" class="flex flex-col items-center gap-1.5 cursor-pointer z-20 group select-none text-text-muted hover:text-text mt-2">
                        <span class="text-[9px] font-mono uppercase tracking-widest transition-colors duration-200">
                            {{ $lang.lang === 'fr' ? 'Découvrir' : 'Scroll Down' }}
                        </span>
                        <div class="w-6 h-9 rounded-full border border-border flex items-start justify-center p-1 bg-surface-light/80 backdrop-blur-sm group-hover:border-brand-dark transition-colors duration-300">
                            <div class="w-1 h-2 rounded-full bg-brand-dark animate-bounce mt-1"></div>
                        </div>
                    </a>
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
                { key: 'saveStep', statusKey: 'save', statusColor: 'text-green-600' }
            ],
            parserIntervalId: null,

            aiStep: 'idle',
            searchQuery: '',
            searchIntervalId: null,

            reportStep: 'idle',
            progress: 0,
            logs: [],
            receipts: [
                { date: '2026-06-19', vendor: 'ACME Copier', amount: '$149.50', tax: '$19.50', file: 'office_invoice_2026-06-19_acme-copier_149.50.pdf' },
                { date: '2026-06-19', vendor: 'Mom & Pop Cafe', amount: '$8.14', tax: '$0.39', file: 'mom-pop-cafe_2026-06-19_8.14.pdf' },
                { date: '2026-06-05', vendor: 'Shell Gas', amount: '$65.00', tax: '$8.23', file: 'travel_gas_2026-06-05_shell_65.00.pdf' },
                { date: '2026-05-12', vendor: 'Starbucks', amount: '$14.20', tax: '$1.50', file: 'coffee_starbucks_2026-05-12_14.20.pdf' }
            ],
            intervalId: null
        };
    },
    computed: {
        tabNames() {
            return this.$t('hero.carouselTabs') || ['Import', 'Local AI', 'Search', 'Reports'];
        },
        filteredReceipts() {
            if (!this.searchQuery) {
                return this.receipts;
            }
            const q = this.searchQuery.toLowerCase();
            return this.receipts.filter(r => 
                r.vendor.toLowerCase().includes(q) || 
                r.date.includes(q) || 
                r.amount.includes(q) || 
                r.file.toLowerCase().includes(q)
            );
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
            if (this.searchIntervalId) {
                clearInterval(this.searchIntervalId);
                this.searchIntervalId = null;
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
                this.aiStep = 'idle';
                setTimeout(() => {
                    this.runAiCorrection();
                }, 300);
            } else if (tabIdx === 2) {
                this.runSearchSimulation();
            } else if (tabIdx === 3) {
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
        runAiCorrection() {
            this.aiStep = 'processing';
            setTimeout(() => {
                if (this.activeTab === 1 && this.aiStep === 'processing') {
                    this.aiStep = 'done';
                }
            }, 1500);
        },
        runSearchSimulation() {
            this.searchQuery = '';
            let typingText = 'acme';
            let index = 0;

            if (this.searchIntervalId) {
                clearInterval(this.searchIntervalId);
            }

            this.searchIntervalId = setInterval(() => {
                if (this.activeTab !== 2) {
                    clearInterval(this.searchIntervalId);
                    this.searchIntervalId = null;
                    return;
                }

                if (index < typingText.length) {
                    this.searchQuery += typingText[index];
                    index++;
                } else {
                    clearInterval(this.searchIntervalId);
                    this.searchIntervalId = setTimeout(() => {
                        if (this.activeTab === 2) {
                            this.runSearchSimulation();
                        }
                    }, 4000);
                }
            }, 500);
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
                    if (this.activeTab === 3 && this.reportStep === 'generating') {
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
