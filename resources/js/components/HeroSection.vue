<template>
    <section class="relative overflow-hidden py-16 lg:py-20 min-h-screen flex items-center justify-center">
        <!-- Background Image -->
        <img 
            class="absolute inset-0 w-full h-full object-cover z-0" 
            :src="'/images/desk_bg.png'" alt="Clean desk with greenery">
        
        <!-- Subtle Overlay -->
        <div class="absolute inset-0 bg-surface-light/30 backdrop-blur-sm z-0"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
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
                        <a href="#download" class="btn-brand text-sm px-7 py-3.5 w-full sm:w-auto shadow-lg hover:shadow-xl transition-all duration-300 text-center cursor-pointer flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/>
                            </svg>
                            <span>{{ $t('hero.cta1') }}</span>
                        </a>
                        <a href="#problem" class="text-xs font-mono text-text-muted hover:text-brand transition-colors duration-200 flex items-center gap-1.5 py-2.5 cursor-pointer">
                            <span>{{ $lang.lang === 'fr' ? 'Découvrir comment ça marche' : 'Discover how it works' }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 stroke-current fill-none animate-bounce" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <polyline points="19 12 12 19 5 12"></polyline>
                            </svg>
                        </a>
                    </div>

                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-border text-[10px] text-text-muted bg-surface/85 backdrop-blur-sm font-mono select-none">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-dark inline-block animate-pulse"></span>
                        {{ $t('hero.badges') }}
                    </div>
                </div>
                <!-- Right Column: Interactive Desktop App Replica (2/3 Width) -->
                <div class="lg:col-span-8 w-full mx-auto lg:mx-0 relative z-10 flex flex-col items-center justify-center gap-4">

                    <!-- Native-looking application window (always dark, like the real PyQt6 app) -->
                    <div class="w-full max-w-4xl rounded-xl overflow-hidden shadow-2xl border border-[#2a2e2a] bg-[#0d0f0d] text-[#f4f4f5] font-sans flex h-[540px] lg:h-[560px] relative select-none">

                        <!-- ===== Sidebar ===== -->
                        <aside class="w-12 sm:w-40 shrink-0 bg-[#121512] border-r border-[#232723] flex flex-col">
                            <!-- macOS traffic lights -->
                            <div class="hidden sm:flex items-center gap-1.5 px-3.5 pt-3">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#27c93f]"></span>
                            </div>
                            <!-- Logo -->
                            <div class="flex items-center justify-center sm:justify-start gap-2 px-2 sm:px-3.5 pt-3 sm:pt-3 pb-3">
                                <svg class="w-4 h-4 shrink-0 stroke-[#22c55e] fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1-2-1z"/><path d="M16 8H8"/><path d="M16 12H8"/><path d="M10 16H8"/>
                                </svg>
                                <span class="hidden sm:block text-[10px] font-bold truncate">Recapture OCR</span>
                            </div>

                            <!-- Navigation -->
                            <nav class="flex-1 px-1.5 sm:px-2 space-y-1">
                                <component :is="item.tab !== null ? 'button' : 'div'"
                                           v-for="item in navItems" :key="item.key"
                                           @click="item.tab !== null && selectTab(item.tab)"
                                           class="w-full flex items-center justify-center sm:justify-start gap-2 px-2 sm:px-3 py-2 rounded-full text-[10px] text-left transition-colors"
                                           :class="[
                                               item.tab === activeTab ? 'bg-[#262b26] text-white font-semibold' : 'text-[#9a9a96]',
                                               item.tab !== null ? 'cursor-pointer hover:text-white' : 'cursor-default'
                                           ]">
                                    <svg class="w-3.5 h-3.5 shrink-0 fill-none" :class="item.tab === activeTab ? 'stroke-[#22c55e]' : 'stroke-current'" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" v-html="item.icon"></svg>
                                    <span class="hidden sm:block truncate">{{ ui[item.key] }}</span>
                                </component>
                            </nav>

                            <!-- User pill -->
                            <div class="m-2 flex items-center justify-center sm:justify-start gap-2 rounded-full bg-[#1c211c] px-1.5 sm:px-2 py-1.5">
                                <span class="w-4 h-4 rounded-full bg-[#22c55e] text-[#052e16] text-[7px] font-bold flex items-center justify-center shrink-0">JS</span>
                                <span class="hidden sm:block text-[9px] truncate">Julia Smith</span>
                            </div>
                        </aside>

                        <!-- ===== Main area ===== -->
                        <main class="flex-1 min-w-0 flex flex-col">

                            <!-- Page header -->
                            <header class="px-5 pt-4 pb-2.5 border-b border-[#232723]">
                                <h2 class="font-sans text-base font-bold leading-tight text-white">{{ pageTitle }}</h2>
                                <p class="text-[10px] text-[#8e8d88] mt-0.5 truncate">{{ pageSubtitle }}</p>
                            </header>

                            <!-- ============ Page 0: PDF Unique ============ -->
                            <div v-if="activeTab === 0" class="flex-1 min-h-0 flex flex-col px-4 pt-3 pb-2 gap-2.5 animate-fadeIn">
                                <!-- Stepper -->
                                <div class="relative px-2">
                                    <div class="absolute top-[6px] left-[10%] right-[10%] h-px bg-[#2d312c]"></div>
                                    <div class="relative flex justify-between">
                                        <div v-for="(st, idx) in parserSteps" :key="st.key" class="flex flex-col items-center gap-1 w-1/5">
                                            <span class="w-3 h-3 rounded-full flex items-center justify-center transition-colors duration-300"
                                                  :class="idx < parserStep ? 'bg-[#22c55e]' : (idx === parserStep ? 'border-2 border-[#22c55e] bg-[#0d0f0d] ring-2 ring-[#22c55e]/30' : 'bg-[#2d312c]')">
                                                <span v-if="idx === parserStep" class="w-1 h-1 rounded-full bg-[#22c55e]"></span>
                                            </span>
                                            <span class="text-[8px] whitespace-nowrap" :class="idx === parserStep ? 'text-white font-semibold' : 'text-[#8e8d88]'">{{ $t('hero.simulator.steps.' + st.key) }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-1 min-h-0 grid grid-cols-12 gap-3">
                                    <!-- PDF viewer -->
                                    <div class="col-span-5 sm:col-span-6 flex flex-col border border-[#3a3f3a] rounded bg-[#262826] overflow-hidden min-h-0">
                                        <div class="flex items-center gap-2 px-2 py-1.5 bg-[#111311] border-b border-[#2d312c] text-[8px] text-[#d4d4d0] whitespace-nowrap overflow-hidden">
                                            <span>←</span>
                                            <span>{{ ui.page }} {{ parserStep >= 1 ? '1/1' : '-/-' }}</span>
                                            <span class="hidden sm:inline">→</span>
                                            <span class="ml-1">−</span>
                                            <span class="w-8 h-1 rounded bg-[#444] relative"><span class="absolute left-1/3 -top-[3px] w-2 h-2 rounded-full bg-[#3b82f6]"></span></span>
                                            <span>+</span>
                                            <span class="hidden md:inline ml-1">{{ ui.fit }}</span>
                                        </div>
                                        <div class="relative flex-1 min-h-0 flex items-center justify-center overflow-hidden">
                                            <!-- Empty state -->
                                            <div v-if="parserStep === 0" class="text-center px-3">
                                                <svg class="w-8 h-8 mx-auto stroke-[#8a8a86] fill-none" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                                                <div class="mt-2 text-[10px] font-bold text-[#eeeeea]">{{ ui.noDoc }}</div>
                                                <div class="mt-1 text-[8px] text-[#8e8d88] leading-snug">{{ ui.noDocHint }}</div>
                                            </div>
                                            <!-- Scanned receipt -->
                                            <div v-else class="relative bg-[#fdfbf7] text-[#111111] p-3 shadow-xl w-[150px] sm:w-[170px] h-[92%] flex flex-col font-mono text-[7px] overflow-hidden">
                                                <div v-show="parserStep === 1" class="absolute left-0 right-0 h-[2px] bg-[#22c55e] animate-scan-laser shadow-[0_0_8px_#4ade80] z-20 opacity-80"></div>
                                                <div class="space-y-1.5 relative z-10 flex-1 opacity-85">
                                                    <div class="text-center pb-2 border-b border-dashed border-[#cccccc] mb-2">
                                                        <div class="font-bold text-[9px] uppercase tracking-wider">MOM &amp; POP CAFE</div>
                                                        <div class="text-[6px]">123 Main Street</div>
                                                        <div class="text-[6px]">City, Province</div>
                                                    </div>
                                                    <div class="text-center font-bold pb-1">RECEIPT #4209</div>
                                                    <div class="text-[6px] text-center mb-2">2026-06-19 08:45 AM</div>
                                                    <div class="flex justify-between font-bold border-b border-dashed border-[#cccccc] pb-1"><span>Espresso</span><span>$3.50</span></div>
                                                    <div class="flex justify-between font-bold border-b border-dashed border-[#cccccc] pb-1"><span>Almond Croissant</span><span>$4.25</span></div>
                                                    <div class="flex justify-between font-bold mt-2"><span>Subtotal</span><span>$7.75</span></div>
                                                    <div class="flex justify-between font-bold"><span>Tax (5%)</span><span>$0.39</span></div>
                                                    <div class="flex justify-between font-bold text-[9px] mt-1 border-t border-[#999] pt-1"><span>TOTAL</span><span>$8.14</span></div>
                                                    <div class="text-center mt-3 text-[5px]">Thank you for your visit!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form panel -->
                                    <div class="col-span-7 sm:col-span-6 flex flex-col min-h-0 gap-2 overflow-hidden">
                                        <!-- Project settings -->
                                        <fieldset class="relative border border-[#2d312c] rounded-lg px-2.5 pt-3 pb-2 mt-1.5 space-y-1.5">
                                            <legend class="absolute -top-2 left-2.5 bg-[#0d0f0d] px-1.5 text-[9px] font-semibold text-[#22c55e]">{{ ui.projectSettings }}</legend>
                                            <div class="flex items-center gap-2 text-[9px]">
                                                <span class="w-[4.5rem] shrink-0 text-[#d4d4d0]">{{ ui.project }}</span>
                                                <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between">
                                                    <span class="text-[9px] transition-opacity duration-300" :class="parserStep >= 2 ? 'opacity-100' : 'opacity-0'">Café</span>
                                                    <span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2 text-[9px]">
                                                <span class="w-[4.5rem] shrink-0 text-[#d4d4d0]">{{ ui.docType }}</span>
                                                <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between">
                                                    <span>{{ ui.invoice }}</span><span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2 text-[9px]">
                                                <span class="w-[4.5rem] shrink-0 text-[#d4d4d0]">{{ ui.template }}</span>
                                                <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between">
                                                    <span>{{ ui.defaultTemplate }}</span><span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Document fields -->
                                        <fieldset class="relative border border-[#2d312c] rounded-lg px-2.5 pt-3 pb-2 mt-1.5 space-y-1.5">
                                            <legend class="absolute -top-2 left-2.5 bg-[#0d0f0d] px-1.5 text-[9px] font-semibold text-[#22c55e] flex items-center gap-2">
                                                {{ $t('hero.simulator.fields') }}
                                                <span v-if="parserStep >= 2" class="font-mono text-[7px] text-[#4ade80] font-normal">{{ $t('hero.simulator.matchConfirmed') }}</span>
                                            </legend>
                                            <div v-for="f in parserFields" :key="f.label" class="flex items-center gap-2 text-[9px]">
                                                <span class="w-[4.5rem] shrink-0 text-[#d4d4d0]">{{ f.label }}</span>
                                                <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between overflow-hidden">
                                                    <span class="transition-opacity duration-300" :class="[parserStep >= 2 ? 'opacity-100 text-white' : 'opacity-100 text-[#55584f]']">{{ parserStep >= 2 ? f.value : f.placeholder }}</span>
                                                    <span v-if="parserStep >= 2 && f.match" class="text-[7px] bg-[#22c55e]/20 text-[#4ade80] border border-[#22c55e]/40 px-1 rounded font-mono">{{ f.match }}</span>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Filename preview -->
                                        <div class="rounded-lg border border-[#2d312c] bg-[#111311] px-2.5 py-1.5">
                                            <div class="text-[8px] text-[#8e8d88]">{{ $t('hero.simulator.preview') }}</div>
                                            <div class="font-mono text-[9px] text-[#4ade80] truncate h-4 flex items-center">
                                                <span class="transition-opacity duration-300" :class="parserStep >= 3 ? 'opacity-100' : 'opacity-0'">mom-pop-cafe_2026-06-19_8.14.pdf</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action bar -->
                                <div class="flex items-center gap-2">
                                    <button class="flex-1 h-7 rounded text-[10px] font-semibold text-white bg-[#16a34a] transition-opacity" :class="parserStep < 4 ? 'opacity-60 cursor-not-allowed' : 'hover:bg-[#22c55e]'">Rename &amp; Save</button>
                                    <button class="h-7 px-4 rounded text-[10px] border border-[#2d312c] bg-[#141714] text-[#e4e4e0]">Discard</button>
                                </div>
                                <div class="text-[8px] italic text-[#8e8d88] -mt-1">
                                    <span :class="parserSteps[parserStep].statusColor === 'text-green-600' ? 'text-[#4ade80]' : ''">{{ $t('hero.simulator.status.' + parserSteps[parserStep].statusKey) }}</span>
                                </div>
                            </div>

                            <!-- ============ Page 1: Lots (batch processing) ============ -->
                            <div v-if="activeTab === 1" class="flex-1 min-h-0 grid grid-cols-12 gap-3 px-4 py-3 animate-fadeIn">
                                <!-- Left: dropzone + options -->
                                <div class="col-span-5 flex flex-col gap-2.5 min-h-0">
                                    <div class="rounded-lg border-2 border-dashed border-[#22c55e] bg-[#111311] py-5 text-center">
                                        <svg class="w-6 h-6 mx-auto stroke-[#9a9a96] fill-none" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                                        <div class="mt-2 text-[9px] font-bold">{{ ui.dropPdfs }}</div>
                                        <div class="text-[8px] text-[#8e8d88]">{{ ui.orClick }}</div>
                                    </div>
                                    <div class="text-[9px] font-semibold">{{ ui.batchOptions }}</div>
                                    <div class="h-6 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between text-[9px] text-[#d4d4d0]">{{ ui.targetProject }}<span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span></div>
                                    <div class="h-6 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between text-[9px] text-[#d4d4d0]">{{ ui.defaultCategory }}<span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span></div>
                                    <div class="flex-1"></div>
                                    <button class="h-7 rounded text-[10px] font-semibold text-white bg-[#22c55e]">{{ ui.startBatch }}</button>
                                    <button class="h-7 rounded text-[10px] border border-[#2d312c] bg-[#141714] text-[#e4e4e0]">{{ ui.clearQueue }}</button>
                                </div>
                                <!-- Right: queue -->
                                <div class="col-span-7 flex flex-col min-h-0 gap-2">
                                    <div class="flex items-center gap-3 text-[9px]">
                                        <span class="flex-1 truncate">{{ ui.queue }}</span>
                                        <div class="w-24 h-4 rounded border border-[#2d312c] bg-[#141714] relative overflow-hidden">
                                            <div class="absolute inset-y-0 left-0 bg-[#22c55e] transition-all duration-200" :style="{ width: batchTotal + '%' }"></div>
                                            <span class="relative z-10 flex h-full items-center justify-center text-[8px] font-semibold">{{ batchTotal }}%</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-h-0 border border-[#2d312c] rounded bg-[#111311] overflow-hidden">
                                        <table class="w-full text-[9px] text-left">
                                            <thead>
                                                <tr class="border-b border-[#2d312c] text-[#8e8d88] text-center text-[8px]">
                                                    <th class="py-1.5 px-2 font-semibold">{{ ui.fileName }}</th>
                                                    <th class="py-1.5 px-1 font-semibold hidden sm:table-cell">{{ ui.size }}</th>
                                                    <th class="py-1.5 px-1 font-semibold">{{ ui.status }}</th>
                                                    <th class="py-1.5 px-2 font-semibold w-16">{{ ui.progress }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="row in batchRows" :key="row.name" class="border-b border-[#2d312c]">
                                                    <td class="py-1.5 px-2 truncate max-w-[110px]">{{ row.name }}</td>
                                                    <td class="py-1.5 px-1 text-center hidden sm:table-cell">{{ row.size }}</td>
                                                    <td class="py-1.5 px-1 text-center">{{ row.progress >= 100 ? ui.done : (row.progress > 0 ? ui.running : ui.waiting) }}</td>
                                                    <td class="py-1.5 px-2">
                                                        <div class="h-2.5 rounded-full border border-[#2d312c] bg-[#141714] overflow-hidden">
                                                            <div class="h-full rounded-full bg-[#16a34a] transition-all duration-200" :style="{ width: row.progress + '%' }"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- ============ Page 2: Bibliothèque (search) ============ -->
                            <div v-if="activeTab === 2" class="flex-1 min-h-0 flex flex-col px-4 py-3 gap-2.5 animate-fadeIn">
                                <div class="h-7 rounded border border-[#2d312c] bg-[#141714] px-2.5 flex items-center text-[10px]">
                                    <span v-if="!searchQuery" class="text-[#7a7a76]">{{ ui.searchPlaceholder }}</span>
                                    <span v-else class="text-white">{{ searchQuery }}</span><span class="animate-pulse text-[#22c55e] ml-px">|</span>
                                </div>
                                <div class="flex-1 min-h-0 border border-[#2d312c] rounded bg-[#111311] overflow-hidden">
                                    <table class="w-full text-[9px] text-left">
                                        <thead>
                                            <tr class="border-b border-[#2d312c] text-[#8e8d88] text-[8px]">
                                                <th class="py-1.5 px-1.5 w-5 bg-[#0d0f0d]"></th>
                                                <th class="py-1.5 px-2 font-semibold text-center">{{ ui.company }}</th>
                                                <th class="py-1.5 px-2 font-semibold text-center">{{ ui.date }}</th>
                                                <th class="py-1.5 px-2 font-semibold text-center">{{ ui.total }}</th>
                                                <th class="py-1.5 px-2 font-semibold text-center hidden md:table-cell">{{ ui.project.replace(/[ :]+$/, '') }}</th>
                                                <th class="py-1.5 px-2 font-semibold text-center hidden md:table-cell">{{ ui.category2 }}</th>
                                                <th class="py-1.5 px-2 font-semibold text-center">{{ ui.fileNameCol }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(r, i) in filteredReceipts" :key="r.file" class="border-b border-[#2d312c]">
                                                <td class="py-1.5 px-1.5 text-center text-[#8e8d88] bg-[#0d0f0d]">{{ i + 1 }}</td>
                                                <td class="py-1.5 px-2 truncate max-w-[90px]">{{ r.vendor }}</td>
                                                <td class="py-1.5 px-2">{{ r.date }}</td>
                                                <td class="py-1.5 px-2">{{ r.amount.replace('$', '') }}</td>
                                                <td class="py-1.5 px-2 hidden md:table-cell">{{ r.project }}</td>
                                                <td class="py-1.5 px-2 hidden md:table-cell">{{ r.category }}</td>
                                                <td class="py-1.5 px-2 truncate max-w-[110px]">{{ r.file }}</td>
                                            </tr>
                                            <tr v-if="filteredReceipts.length === 0">
                                                <td colspan="7" class="py-8 text-center text-[#8e8d88]">{{ ui.noResults }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="h-6 px-3 rounded text-[9px] border border-[#2d312c] bg-[#141714] text-[#e4e4e0]">{{ ui.showInFolder }}</button>
                                    <button class="h-6 px-3 rounded text-[9px] border border-[#2d312c] bg-[#141714] text-[#e4e4e0]">{{ ui.refresh }}</button>
                                    <span class="ml-auto text-[8px] text-[#8e8d88]">{{ filteredReceipts.length }} / {{ receipts.length }} · SQLite · 0.8 ms</span>
                                </div>
                            </div>

                            <!-- ============ Page 3: Rapports (report builder) ============ -->
                            <div v-if="activeTab === 3" class="flex-1 min-h-0 grid grid-cols-12 gap-3 px-4 py-3 animate-fadeIn">
                                <!-- Left: filters -->
                                <div class="col-span-5 flex flex-col gap-2 min-h-0 overflow-hidden">
                                    <fieldset class="relative border border-[#2d312c] rounded-lg px-2.5 pt-3 pb-2 mt-1.5 space-y-1.5">
                                        <legend class="absolute -top-2 left-2.5 bg-[#0d0f0d] px-1.5 text-[9px] font-semibold text-[#22c55e]">Source Scope</legend>
                                        <div class="flex items-center gap-2 text-[9px]">
                                            <span class="w-[4.5rem] shrink-0">{{ ui.sourceFolder }}</span>
                                            <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center truncate text-[8px] text-[#d4d4d0]">/Dropbox/Factures/Office</div>
                                        </div>
                                        <div class="flex items-center gap-2 text-[9px]">
                                            <span class="w-[4.5rem] shrink-0">{{ ui.project }}</span>
                                            <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between"><span></span><span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span></div>
                                        </div>
                                        <div class="flex items-center gap-2 text-[9px]">
                                            <span class="w-[4.5rem] shrink-0">{{ ui.docType }}</span>
                                            <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between"><span></span><span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span></div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="relative border border-[#2d312c] rounded-lg px-2.5 pt-3 pb-2 mt-1.5 space-y-1.5">
                                        <legend class="absolute -top-2 left-2.5 bg-[#0d0f0d] px-1.5 text-[9px] font-semibold text-[#22c55e]">Date Filter</legend>
                                        <div class="flex items-center gap-2 text-[9px]">
                                            <span class="w-[4.5rem] shrink-0">Date Mode:</span>
                                            <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between"><span>Year</span><span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span></div>
                                        </div>
                                        <div class="flex items-center gap-2 text-[9px]">
                                            <span class="w-[4.5rem] shrink-0">Year:</span>
                                            <div class="flex-1 h-5 rounded border border-[#3b82f6] bg-[#141714] px-2 flex items-center">2026</div>
                                        </div>
                                    </fieldset>
                                    <div class="flex-1"></div>
                                    <button @click="startGeneration" :disabled="reportStep === 'generating'" class="h-7 rounded text-[10px] font-semibold text-white bg-[#16a34a] hover:bg-[#22c55e] transition-colors disabled:opacity-60">
                                        {{ reportStep === 'generating' ? ui.generating : ui.generate }}
                                    </button>
                                </div>

                                <!-- Right: register -->
                                <div class="col-span-7 flex flex-col gap-2 min-h-0">
                                    <div class="flex items-center gap-1.5">
                                        <span class="h-6 px-2 rounded text-[9px] border border-[#2d312c] bg-[#141714] flex items-center">{{ ui.selectAll }}</span>
                                        <span class="h-6 px-2 rounded text-[9px] border border-[#2d312c] bg-[#141714] flex items-center">{{ ui.clearAll }}</span>
                                        <span class="ml-auto text-[8px] text-[#8e8d88]">{{ reportStep === 'done' ? receipts.length + ' / ' + receipts.length : '0 / 0' }}</span>
                                    </div>
                                    <div class="flex-1 min-h-0 border border-[#2d312c] rounded bg-[#111311] overflow-hidden relative">
                                        <table class="w-full text-[9px] text-left">
                                            <thead>
                                                <tr class="border-b border-[#2d312c] text-[#8e8d88] text-[8px]">
                                                    <th class="py-1.5 px-2 font-semibold w-10">{{ ui.include }}</th>
                                                    <th class="py-1.5 px-2 font-semibold">{{ ui.date }}</th>
                                                    <th class="py-1.5 px-2 font-semibold">{{ ui.company }}</th>
                                                    <th class="py-1.5 px-2 font-semibold text-right">{{ ui.taxes }}</th>
                                                    <th class="py-1.5 px-2 font-semibold text-right">{{ ui.total }}</th>
                                                </tr>
                                            </thead>
                                            <tbody v-if="reportStep === 'done'">
                                                <tr v-for="r in receipts" :key="r.file" class="border-b border-[#2d312c]">
                                                    <td class="py-1.5 px-2"><span class="inline-flex w-2.5 h-2.5 rounded-sm bg-white text-[#052e16] text-[7px] leading-none items-center justify-center font-bold">✓</span></td>
                                                    <td class="py-1.5 px-2">{{ r.date }}</td>
                                                    <td class="py-1.5 px-2 truncate max-w-[80px]">{{ r.vendor }}</td>
                                                    <td class="py-1.5 px-2 text-right">{{ r.tax }}</td>
                                                    <td class="py-1.5 px-2 text-right font-semibold text-[#4ade80]">{{ r.amount }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div v-if="reportStep === 'generating'" class="absolute inset-0 top-6 flex items-center justify-center gap-2 text-[9px] text-[#4ade80]">
                                            <span class="animate-spin inline-block w-3 h-3 border-2 border-[#22c55e] border-t-transparent rounded-full"></span>{{ ui.scanning }}
                                        </div>
                                        <div v-if="reportStep === 'idle'" class="absolute inset-0 top-6 flex items-center justify-center text-[9px] text-[#8e8d88]">{{ ui.emptyRegister }}</div>
                                    </div>
                                    <!-- Summary metrics -->
                                    <fieldset class="relative border border-[#2d312c] rounded-lg px-2.5 pt-3 pb-1.5 mt-1.5">
                                        <legend class="absolute -top-2 left-2.5 bg-[#0d0f0d] px-1.5 text-[9px] font-semibold text-[#22c55e]">Summary Metrics</legend>
                                        <div class="grid grid-cols-3 gap-x-2 text-[8px] text-[#d4d4d0]">
                                            <span>Matched Files: {{ reportStep === 'done' ? receipts.length : 0 }}</span>
                                            <span>Included Rows: {{ reportStep === 'done' ? receipts.length : 0 }}</span>
                                            <span>Failed: 0</span>
                                        </div>
                                    </fieldset>
                                    <a v-if="reportStep === 'done'" href="#problem" class="text-center text-[9px] text-[#4ade80] hover:underline cursor-pointer no-underline">
                                        📊 {{ $lang.lang === 'fr' ? 'Prêt pour les impôts ? Calculez votre temps perdu ⬇️' : 'Ready for taxes? Calculate your lost time ⬇️' }}
                                    </a>
                                </div>
                            </div>

                        </main>
                    </div>

                    <!-- Simulator Feature Overview List -->
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 border-t border-border pt-8">
                        <div v-for="(feature, idx) in $t('hero.simulator.features')" :key="idx" class="flex items-center gap-3 text-sm font-sans font-medium text-text select-none">
                            <!-- Feature 1: AI (Brain/Intelligence) -->
                            <svg v-if="idx === 0" class="w-5 h-5 text-brand flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 113.536 0V21h-2v-4z" />
                            </svg>
                            <!-- Feature 2: Rename (Folder) -->
                            <svg v-if="idx === 1" class="w-5 h-5 text-brand flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            <!-- Feature 3: Search (Search glass) -->
                            <svg v-if="idx === 2" class="w-5 h-5 text-brand flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <!-- Feature 4: Reports (Sheet chart) -->
                            <svg v-if="idx === 3" class="w-5 h-5 text-brand flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>{{ feature }}</span>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center select-none">
                        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand/10 border border-brand/20 text-xs font-mono font-medium text-brand-dark shadow-[0_4px_20px_-4px_rgba(34,197,94,0.12)]">
                            <!-- Padlock SVG -->
                            <svg class="w-3.5 h-3.5 text-brand-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <rect x="5" y="11" width="14" height="11" rx="2" ry="2" />
                                <path d="M12 2A5 5 0 007 7v4h10V7a5 5 0 00-5-5z" />
                            </svg>
                            {{ $t('hero.simulator.tagline') }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Perforated Receipt Tape Separator (Continuous Line) -->
            <div class="absolute right-8 top-0 bottom-0 w-px border-r border-dashed border-brand/50 pointer-events-none hidden lg:flex flex-col justify-between py-12 select-none text-[8px] font-mono text-text-muted z-20">
                <span>[FLOW_01]</span>
                <div class="flex flex-col items-center gap-1.5 animate-pulse text-brand-dark">
                    <span class="uppercase tracking-widest text-[7px]" style="writing-mode: vertical-rl; transform: rotate(180deg);">SCROLL</span>
                    <span>↓</span>
                </div>
                <span>[DEB_02]</span>
            </div>
        </div>
    </section>
</template>

<script>
const NAV_ICONS = {
    dashboard: '<rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/>',
    single: '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/>',
    batch: '<path d="M4 22V4c0-.5.2-1 .6-1.4C5 2.2 5.5 2 6 2h12c.5 0 1 .2 1.4.6.4.4.6.9.6 1.4v18l-3-1.5-3 1.5-3-1.5-3 1.5-3-1.5-3 1.5z"/>',
    library: '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"/>',
    vendors: '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><line x1="9" y1="22" x2="9" y2="16"/><line x1="15" y1="22" x2="15" y2="16"/><line x1="9" y1="16" x2="15" y2="16"/>',
    reports: '<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>',
    settings: '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>'
};

const UI_LABELS = {
    fr: {
        dashboard: 'Dashboard', single: 'PDF Unique', batch: 'Lots', library: 'Bibliothèque',
        vendors: 'Fournisseurs', reports: 'Rapports', settings: 'Paramètres',
        titles: {
            0: ['PDF Unique', "Traiter un reçu individuel pour l'extraction de données et le renommage."],
            1: ['Traitement par Lot', 'Glissez-déposez plusieurs fichiers pour effectuer l\'extraction de données et le renommage simultanés.'],
            2: ['Bibliothèque', 'Consultez, recherchez et gérez tous vos reçus archivés.'],
            3: ['Générateur de Rapports', 'Sélectionnez le dossier source, filtrez par projet/type de document, puis générez le rapport.']
        },
        page: 'Page', fit: 'Largeur Hauteur',
        noDoc: 'Aucun document chargé', noDocHint: 'Glissez-déposez un reçu ici ou cliquez sur Parcourir pour commencer.',
        projectSettings: 'Project Settings', project: 'Projet :', docType: 'Type de doc. :', template: 'Gabarit :',
        invoice: 'Facture', defaultTemplate: 'Default Template',
        vendor: 'Fournisseur :', category: 'Catégorie :', date: 'Date', total: 'Total', taxes: 'Taxes',
        vendorPh: 'Nom du fournisseur', categoryPh: 'Catégorie', datePh: 'AAAA-MM-JJ', totalPh: '0.00', taxesPh: '0.00',
        dropPdfs: 'Glisser & Déposer des PDFs ici', orClick: 'ou cliquer pour parcourir',
        batchOptions: 'Options du Lot', targetProject: 'Projet cible...', defaultCategory: 'Catégorie par défaut...',
        startBatch: 'Démarrer le Traitement', clearQueue: 'Vider la File', queue: 'File d\'attente des documents',
        fileName: 'Nom du Fichier', size: 'Taille', status: 'Statut', progress: 'Progression',
        done: 'Terminé', running: 'En cours', waiting: 'En attente',
        searchPlaceholder: 'Rechercher des reçus par entreprise, projet, catégorie ou nom...',
        company: 'Entreprise', category2: 'Catégorie', fileNameCol: 'Nom de fichier',
        noResults: 'Aucun reçu correspondant.', showInFolder: 'Afficher dans le dossier', refresh: 'Actualiser',
        sourceFolder: 'Dossier :', generate: 'Générer le rapport', generating: 'Génération...',
        selectAll: 'Tout sélectionner', clearAll: 'Tout effacer', include: 'Inclure',
        scanning: 'Analyse des PDF locaux...', emptyRegister: 'Cliquez sur Générer pour compiler le registre.'
    },
    en: {
        dashboard: 'Dashboard', single: 'Single PDF', batch: 'Batches', library: 'Library',
        vendors: 'Vendors', reports: 'Reports', settings: 'Settings',
        titles: {
            0: ['Single PDF', 'Process an individual receipt for data extraction and renaming.'],
            1: ['Batch Processing', 'Drag and drop several files to extract data and rename them all at once.'],
            2: ['Library', 'Browse, search and manage all your archived receipts.'],
            3: ['Report Builder', 'Select the source folder, filter by project/document type, then generate the report.']
        },
        page: 'Page', fit: 'Fit Width Height',
        noDoc: 'No document loaded', noDocHint: 'Drag and drop a receipt here or click Browse to get started.',
        projectSettings: 'Project Settings', project: 'Project:', docType: 'Document Type:', template: 'Template:',
        invoice: 'Invoice', defaultTemplate: 'Default Template',
        vendor: 'Vendor:', category: 'Category:', date: 'Date', total: 'Total', taxes: 'Taxes',
        vendorPh: 'Vendor name', categoryPh: 'Category', datePh: 'YYYY-MM-DD', totalPh: '0.00', taxesPh: '0.00',
        dropPdfs: 'Drag & Drop PDFs here', orClick: 'or click to browse',
        batchOptions: 'Batch Options', targetProject: 'Target project...', defaultCategory: 'Default category...',
        startBatch: 'Start Processing', clearQueue: 'Clear Queue', queue: 'Document queue',
        fileName: 'File Name', size: 'Size', status: 'Status', progress: 'Progress',
        done: 'Done', running: 'Running', waiting: 'Waiting',
        searchPlaceholder: 'Search receipts by company, project, category or file name...',
        company: 'Company', category2: 'Category', fileNameCol: 'File name',
        noResults: 'No matching receipts.', showInFolder: 'Show in folder', refresh: 'Refresh',
        sourceFolder: 'Folder:', generate: 'Generate report', generating: 'Generating...',
        selectAll: 'Select All', clearAll: 'Clear All', include: 'Include',
        scanning: 'Scanning local PDFs...', emptyRegister: 'Click Generate to compile the register.'
    }
};

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
            parserStep: 0,
            parserSteps: [
                { key: 'load', statusKey: 'ready', statusColor: 'text-text-muted' },
                { key: 'ocr', statusKey: 'ocr', statusColor: 'text-brand-dark' },
                { key: 'extract', statusKey: 'extract', statusColor: 'text-brand-dark' },
                { key: 'rename', statusKey: 'rename', statusColor: 'text-brand-dark' },
                { key: 'saveStep', statusKey: 'save', statusColor: 'text-green-600' }
            ],
            parserIntervalId: null,
            parserTimeouts: [],

            navItems: [
                { key: 'dashboard', icon: NAV_ICONS.dashboard, tab: null },
                { key: 'single', icon: NAV_ICONS.single, tab: 0 },
                { key: 'batch', icon: NAV_ICONS.batch, tab: 1 },
                { key: 'library', icon: NAV_ICONS.library, tab: 2 },
                { key: 'vendors', icon: NAV_ICONS.vendors, tab: null },
                { key: 'reports', icon: NAV_ICONS.reports, tab: 3 },
                { key: 'settings', icon: NAV_ICONS.settings, tab: null }
            ],

            batchRows: [],
            batchIntervalId: null,

            searchQuery: '',
            searchIntervalId: null,

            reportStep: 'idle',
            reportTimeoutId: null,
            receipts: [
                { date: '2026-06-19', vendor: 'ACME Copier', amount: '$149.50', tax: '$19.50', project: 'Bureau', category: 'Office', file: 'office_invoice_2026-06-19_acme-copier_149.50.pdf' },
                { date: '2026-06-19', vendor: 'Mom & Pop Cafe', amount: '$8.14', tax: '$0.39', project: 'Café', category: 'Meals', file: 'mom-pop-cafe_2026-06-19_8.14.pdf' },
                { date: '2026-06-05', vendor: 'Shell Gas', amount: '$65.00', tax: '$8.23', project: 'Déplacements', category: 'Travel', file: 'travel_gas_2026-06-05_shell_65.00.pdf' },
                { date: '2026-05-12', vendor: 'Starbucks', amount: '$14.20', tax: '$1.50', project: 'Café', category: 'Meals', file: 'coffee_starbucks_2026-05-12_14.20.pdf' }
            ]
        };
    },
    computed: {
        ui() {
            const l = this.$lang && this.$lang.lang === 'en' ? 'en' : 'fr';
            return UI_LABELS[l];
        },
        pageTitle() {
            return this.ui.titles[this.activeTab][0];
        },
        pageSubtitle() {
            return this.ui.titles[this.activeTab][1];
        },
        parserFields() {
            const u = this.ui;
            return [
                { label: u.vendor, value: 'mom-pop-cafe', placeholder: u.vendorPh, match: '98%' },
                { label: u.category, value: 'Meals', placeholder: u.categoryPh, match: '95%' },
                { label: u.date + ' :', value: '2026-06-19', placeholder: u.datePh, match: '100%' },
                { label: u.taxes + ' ($) :', value: '0.39', placeholder: u.taxesPh, match: '99%' },
                { label: u.total + ' ($) :', value: '8.14', placeholder: u.totalPh, match: '100%' }
            ];
        },
        batchTotal() {
            if (!this.batchRows.length) return 0;
            const sum = this.batchRows.reduce((acc, r) => acc + r.progress, 0);
            return Math.round(sum / this.batchRows.length);
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
            this.parserTimeouts.forEach(t => clearTimeout(t));
            this.parserTimeouts = [];
            if (this.batchIntervalId) {
                clearInterval(this.batchIntervalId);
                this.batchIntervalId = null;
            }
            if (this.searchIntervalId) {
                clearInterval(this.searchIntervalId);
                clearTimeout(this.searchIntervalId);
                this.searchIntervalId = null;
            }
            if (this.reportTimeoutId) {
                clearTimeout(this.reportTimeoutId);
                this.reportTimeoutId = null;
            }
        },
        handleTabActivation(tabIdx) {
            this.clearAllSimulationIntervals();

            if (tabIdx === 0) {
                this.parserStep = 0;
                this.runParserSimulation();
                this.parserIntervalId = setInterval(this.runParserSimulation, 10000);
            } else if (tabIdx === 1) {
                this.runBatchSimulation();
            } else if (tabIdx === 2) {
                this.runSearchSimulation();
            } else if (tabIdx === 3) {
                this.reportStep = 'idle';
                this.reportTimeoutId = setTimeout(() => this.startGeneration(), 400);
            }
        },
        runParserSimulation() {
            this.parserTimeouts.forEach(t => clearTimeout(t));
            this.parserTimeouts = [];
            this.parserStep = 0;

            [1500, 3500, 5500, 7500].forEach((delay, i) => {
                this.parserTimeouts.push(setTimeout(() => {
                    if (this.activeTab === 0) {
                        this.parserStep = i + 1;
                    }
                }, delay));
            });
        },
        runBatchSimulation() {
            this.batchRows = [
                { name: 'facture_hydro_quebec_2026_06.pdf', size: '420 KB', progress: 100 },
                { name: 'bell_internet_2026_05.pdf', size: '1.2 MB', progress: 100 },
                { name: 'videotron_mobile_2026_06.pdf', size: '850 KB', progress: 40 },
                { name: 'amazon_aws_invoice_2991.pdf', size: '340 KB', progress: 0 },
                { name: 'provigo_epicerie_2026.pdf', size: '180 KB', progress: 0 }
            ];

            this.batchIntervalId = setInterval(() => {
                if (this.activeTab !== 1) {
                    clearInterval(this.batchIntervalId);
                    this.batchIntervalId = null;
                    return;
                }
                const row = this.batchRows.find(r => r.progress < 100);
                if (!row) {
                    clearInterval(this.batchIntervalId);
                    this.batchIntervalId = setTimeout(() => {
                        if (this.activeTab === 1) this.runBatchSimulation();
                    }, 3500);
                    return;
                }
                row.progress = Math.min(100, row.progress + 6);
            }, 120);
        },
        runSearchSimulation() {
            this.searchQuery = '';
            const typingText = 'acme';
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
            if (this.reportTimeoutId) clearTimeout(this.reportTimeoutId);
            this.reportTimeoutId = setTimeout(() => {
                if (this.activeTab === 3) {
                    this.reportStep = 'done';
                }
            }, 1200);
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
    from { opacity: 0; transform: scale(0.99); }
    to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
    animation: fadeIn 0.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
</style>
