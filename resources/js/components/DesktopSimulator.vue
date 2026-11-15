<template>
    <div ref="root" aria-hidden="true" inert class="w-full rounded-xl overflow-hidden bg-[#0d0f0d] text-[#f4f4f5] font-sans flex h-[540px] lg:h-[560px] relative select-none">

        <!-- ===== Sidebar ===== -->
        <div class="w-12 sm:w-40 shrink-0 bg-[#121512] border-r border-[#232723] flex flex-col">
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
                <span class="hidden sm:block text-[10px] font-bold truncate">ocr-receipt</span>
            </div>

            <!-- Navigation -->
            <div class="flex-1 px-1.5 sm:px-2 space-y-1">
                <div
                           v-for="item in navItems" :key="item.key"
                           class="w-full flex items-center justify-center sm:justify-start gap-2 px-2 sm:px-3 py-2 rounded-full text-[10px] text-left transition-colors"
                           :class="item.tab === activeTab ? 'bg-[#262b26] text-white font-semibold' : 'text-[#9a9a96]'">
                    <svg class="w-3.5 h-3.5 shrink-0 fill-none" :class="item.tab === activeTab ? 'stroke-[#22c55e]' : 'stroke-current'" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" v-html="item.icon"></svg>
                    <span class="hidden sm:block truncate">{{ ui[item.key] }}</span>
                </div>
            </div>

            <!-- User pill -->
            <div class="m-2 flex items-center justify-center sm:justify-start gap-2 rounded-full bg-[#1c211c] px-1.5 sm:px-2 py-1.5">
                <span class="w-4 h-4 rounded-full bg-[#22c55e] text-[#052e16] text-[7px] font-bold flex items-center justify-center shrink-0">JS</span>
                <span class="hidden sm:block text-[9px] truncate">Julia Smith</span>
            </div>
        </div>

        <!-- ===== Main area ===== -->
        <div class="flex-1 min-w-0 flex flex-col">

            <!-- Page header -->
            <div class="px-5 pt-4 pb-2.5 border-b border-[#232723]">
                <div class="font-sans text-base font-bold leading-tight text-white">{{ pageTitle }}</div>
                <p class="text-[10px] text-[#8e8d88] mt-0.5 truncate">{{ pageSubtitle }}</p>
            </div>

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
                                        <div class="text-[6px]">{{ ui.rcptStreet }}</div>
                                        <div class="text-[6px]">{{ ui.rcptCity }}</div>
                                    </div>
                                    <div class="text-center font-bold pb-1">{{ ui.rcptNumber }}</div>
                                    <div class="text-[6px] text-center mb-2">2026-06-19 08:45 AM</div>
                                    <div class="flex justify-between font-bold border-b border-dashed border-[#cccccc] pb-1"><span>{{ ui.rcptItem1 }}</span><span>$3.50</span></div>
                                    <div class="flex justify-between font-bold border-b border-dashed border-[#cccccc] pb-1"><span>{{ ui.rcptItem2 }}</span><span>$4.25</span></div>
                                    <div class="flex justify-between font-bold mt-2"><span>{{ ui.rcptSubtotal }}</span><span>$7.75</span></div>
                                    <div class="flex justify-between font-bold"><span>{{ ui.rcptTax }}</span><span>$0.39</span></div>
                                    <div class="flex justify-between font-bold text-[9px] mt-1 border-t border-[#999] pt-1"><span>TOTAL</span><span>$8.14</span></div>
                                    <div class="text-center mt-3 text-[5px]">{{ ui.rcptThanks }}</div>
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
                    <div class="flex items-center justify-center flex-1 h-7 rounded text-[10px] font-semibold text-white bg-[#16a34a] transition-opacity" :class="parserStep < 4 ? 'opacity-60' : ''">{{ ui.renameSave }}</div>
                    <div class="flex items-center justify-center h-7 px-4 rounded text-[10px] border border-[#2d312c] bg-[#141714] text-[#e4e4e0]">{{ ui.discard }}</div>
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
                    <div class="flex items-center justify-center h-7 rounded text-[10px] font-semibold text-white bg-[#22c55e]">{{ ui.startBatch }}</div>
                    <div class="flex items-center justify-center h-7 rounded text-[10px] border border-[#2d312c] bg-[#141714] text-[#e4e4e0]">{{ ui.clearQueue }}</div>
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
                    <span v-else class="text-white">{{ searchQuery }}</span><span class="text-[#22c55e] ml-px" :class="playing ? 'animate-pulse' : ''">|</span>
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
                                <td class="py-1.5 px-2 hidden md:table-cell">{{ ui.categories[r.category] }}</td>
                                <td class="py-1.5 px-2 truncate max-w-[110px]">{{ r.file }}</td>
                            </tr>
                            <tr v-if="filteredReceipts.length === 0">
                                <td colspan="7" class="py-8 text-center text-[#8e8d88]">{{ ui.noResults }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center justify-center h-6 px-3 rounded text-[9px] border border-[#2d312c] bg-[#141714] text-[#e4e4e0]">{{ ui.showInFolder }}</div>
                    <div class="flex items-center justify-center h-6 px-3 rounded text-[9px] border border-[#2d312c] bg-[#141714] text-[#e4e4e0]">{{ ui.refresh }}</div>
                    <span class="ml-auto text-[8px] text-[#8e8d88]">{{ filteredReceipts.length }} / {{ receipts.length }} · SQLite · 0.8 ms</span>
                </div>
            </div>

            <!-- ============ Page 3: Rapports (report builder) ============ -->
            <div v-if="activeTab === 3" class="flex-1 min-h-0 grid grid-cols-12 gap-3 px-4 py-3 animate-fadeIn">
                <!-- Left: filters -->
                <div class="col-span-5 flex flex-col gap-2 min-h-0 overflow-hidden">
                    <fieldset class="relative border border-[#2d312c] rounded-lg px-2.5 pt-3 pb-2 mt-1.5 space-y-1.5">
                        <legend class="absolute -top-2 left-2.5 bg-[#0d0f0d] px-1.5 text-[9px] font-semibold text-[#22c55e]">{{ ui.sourceScope }}</legend>
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
                        <legend class="absolute -top-2 left-2.5 bg-[#0d0f0d] px-1.5 text-[9px] font-semibold text-[#22c55e]">{{ ui.dateFilter }}</legend>
                        <div class="flex items-center gap-2 text-[9px]">
                            <span class="w-[4.5rem] shrink-0">{{ ui.dateMode }}</span>
                            <div class="flex-1 h-5 rounded border border-[#2d312c] bg-[#141714] px-2 flex items-center justify-between"><span>{{ ui.year }}</span><span class="w-2 h-[3px] bg-[#9a9a96] rounded-sm"></span></div>
                        </div>
                        <div class="flex items-center gap-2 text-[9px]">
                            <span class="w-[4.5rem] shrink-0">{{ ui.yearLabel }}</span>
                            <div class="flex-1 h-5 rounded border border-[#3b82f6] bg-[#141714] px-2 flex items-center">2026</div>
                        </div>
                    </fieldset>
                    <div class="flex-1"></div>
                    <div class="flex items-center justify-center h-7 rounded text-[10px] font-semibold text-white bg-[#16a34a]" :class="reportStep === 'generating' ? 'opacity-60' : ''">
                        {{ reportStep === 'generating' ? ui.generating : ui.generate }}
                    </div>
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
                        <legend class="absolute -top-2 left-2.5 bg-[#0d0f0d] px-1.5 text-[9px] font-semibold text-[#22c55e]">{{ ui.summaryMetrics }}</legend>
                        <div class="grid grid-cols-3 gap-x-2 text-[8px] text-[#d4d4d0]">
                            <span>{{ ui.matchedFiles }} {{ reportStep === 'done' ? receipts.length : 0 }}</span>
                            <span>{{ ui.includedRows }} {{ reportStep === 'done' ? receipts.length : 0 }}</span>
                            <span>{{ ui.failed }} 0</span>
                        </div>
                    </fieldset>
                </div>
            </div>

        </div>
    </div>
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
        dashboard: 'Tableau de bord', single: 'PDF Unique', batch: 'Lots', library: 'Bibliothèque',
        vendors: 'Fournisseurs', reports: 'Rapports', settings: 'Paramètres',
        titles: {
            0: ['PDF Unique', "Traiter un reçu individuel pour l'extraction de données et le renommage."],
            1: ['Traitement par Lot', 'Glissez-déposez plusieurs fichiers pour effectuer l\'extraction de données et le renommage simultanés.'],
            2: ['Bibliothèque', 'Consultez, recherchez et gérez tous vos reçus archivés.'],
            3: ['Générateur de Rapports', 'Sélectionnez le dossier source, filtrez par projet/type de document, puis générez le rapport.']
        },
        page: 'Page', fit: 'Largeur Hauteur',
        noDoc: 'Aucun document chargé', noDocHint: 'Glissez-déposez un reçu ici ou cliquez sur Parcourir pour commencer.',
        projectSettings: 'Paramètres du projet', project: 'Projet :', docType: 'Type de doc. :', template: 'Gabarit :',
        invoice: 'Facture', defaultTemplate: 'Gabarit par défaut',
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
        renameSave: 'Renommer et enregistrer', discard: 'Ignorer',
        sourceScope: 'Source', dateFilter: 'Filtre de date', dateMode: 'Mode :', year: 'Année', yearLabel: 'Année :',
        summaryMetrics: 'Sommaire', matchedFiles: 'Fichiers trouvés :', includedRows: 'Lignes incluses :', failed: 'Échecs :',
        categories: { Meals: 'Repas', Office: 'Bureau', Travel: 'Déplacements' },
        rcptStreet: '123, rue Principale', rcptCity: 'Ville, Province', rcptNumber: 'REÇU #4209',
        rcptItem1: 'Espresso', rcptItem2: 'Croissant aux amandes', rcptSubtotal: 'Sous-total', rcptTax: 'TPS (5 %)',
        rcptThanks: 'Merci de votre visite!',
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
        renameSave: 'Rename & Save', discard: 'Discard',
        sourceScope: 'Source Scope', dateFilter: 'Date Filter', dateMode: 'Date Mode:', year: 'Year', yearLabel: 'Year:',
        summaryMetrics: 'Summary Metrics', matchedFiles: 'Matched Files:', includedRows: 'Included Rows:', failed: 'Failed:',
        categories: { Meals: 'Meals', Office: 'Office', Travel: 'Travel' },
        rcptStreet: '123 Main Street', rcptCity: 'City, Province', rcptNumber: 'RECEIPT #4209',
        rcptItem1: 'Espresso', rcptItem2: 'Almond Croissant', rcptSubtotal: 'Subtotal', rcptTax: 'Tax (5%)',
        rcptThanks: 'Thank you for your visit!',
        scanning: 'Scanning local PDFs...', emptyRegister: 'Click Generate to compile the register.'
    }
};

// Decorative replica of the PyQt6 desktop app, shown in the guided tour on desktop.
// It is aria-hidden and inert: the tour's step text carries the meaning.
// Each page plays one short scripted sequence (under 5 s) when it becomes visible,
// then stops. Timers stop when the frame leaves the viewport, and nothing runs
// under prefers-reduced-motion: the final frame is rendered instead.
const RECEIPTS = [
    { date: '2026-06-19', vendor: 'ACME Copier', amount: '$149.50', tax: '$19.50', project: 'Bureau', category: 'Office', file: 'office_invoice_2026-06-19_acme-copier_149.50.pdf' },
    { date: '2026-06-19', vendor: 'Mom & Pop Cafe', amount: '$8.14', tax: '$0.39', project: 'Café', category: 'Meals', file: 'mom-pop-cafe_2026-06-19_8.14.pdf' },
    { date: '2026-06-05', vendor: 'Shell Gas', amount: '$65.00', tax: '$8.23', project: 'Déplacements', category: 'Travel', file: 'travel_gas_2026-06-05_shell_65.00.pdf' },
    { date: '2026-05-12', vendor: 'Starbucks', amount: '$14.20', tax: '$1.50', project: 'Café', category: 'Meals', file: 'coffee_starbucks_2026-05-12_14.20.pdf' }
];

const BATCH_START = [
    { name: 'facture_hydro_quebec_2026_06.pdf', size: '420 KB', progress: 100 },
    { name: 'bell_internet_2026_05.pdf', size: '1.2 MB', progress: 100 },
    { name: 'videotron_mobile_2026_06.pdf', size: '850 KB', progress: 40 },
    { name: 'amazon_aws_invoice_2991.pdf', size: '340 KB', progress: 0 },
    { name: 'provigo_epicerie_2026.pdf', size: '180 KB', progress: 0 }
];

const SEARCH_TEXT = 'acme';

export default {
    name: 'DesktopSimulator',
    props: {
        // 0 Single PDF, 1 Batches, 2 Library, 3 Reports
        activeTab: { type: Number, default: 0 }
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
            searchQuery: '',
            reportStep: 'idle',
            receipts: RECEIPTS,
            playing: false,
            pendingPlay: false,
            visible: false,
            reducedMotion: false
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
                { label: u.category, value: u.categories.Meals, placeholder: u.categoryPh, match: '95%' },
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
            if (!this.searchQuery) return this.receipts;
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
        activeTab(tab) {
            this.activate(tab);
        }
    },
    created() {
        this.timers = [];
    },
    mounted() {
        this.motionQuery = window.matchMedia ? window.matchMedia('(prefers-reduced-motion: reduce)') : null;
        this.reducedMotion = !!(this.motionQuery && this.motionQuery.matches);
        this.onMotionChange = (e) => {
            this.reducedMotion = e.matches;
            if (e.matches) this.finish();
        };
        if (this.motionQuery && this.motionQuery.addEventListener) {
            this.motionQuery.addEventListener('change', this.onMotionChange);
        }

        if ('IntersectionObserver' in window) {
            this.observer = new IntersectionObserver((entries) => {
                const entry = entries[entries.length - 1];
                this.visible = entry.isIntersecting;
                if (this.visible && this.pendingPlay) {
                    this.play(this.activeTab);
                } else if (!this.visible && this.playing) {
                    this.finish();
                }
            }, { threshold: 0.25 });
            this.observer.observe(this.$refs.root);
        } else {
            this.visible = true;
        }
        this.activate(this.activeTab);
    },
    beforeUnmount() {
        this.clearTimers();
        if (this.observer) this.observer.disconnect();
        if (this.motionQuery && this.motionQuery.removeEventListener) {
            this.motionQuery.removeEventListener('change', this.onMotionChange);
        }
    },
    methods: {
        later(fn, delay) {
            this.timers.push(setTimeout(fn, delay));
        },
        clearTimers() {
            this.timers.forEach(t => { clearTimeout(t); clearInterval(t); });
            this.timers = [];
            this.playing = false;
        },
        activate(tab) {
            this.clearTimers();
            if (this.reducedMotion) {
                this.pendingPlay = false;
                this.renderFinal(tab);
                return;
            }
            this.renderStart(tab);
            this.pendingPlay = true;
            if (this.visible) this.play(tab);
        },
        // Stop the sequence and jump to its final frame.
        finish() {
            this.clearTimers();
            this.pendingPlay = false;
            this.renderFinal(this.activeTab);
        },
        renderStart(tab) {
            if (tab === 0) this.parserStep = 0;
            if (tab === 1) this.batchRows = BATCH_START.map(r => ({ ...r }));
            if (tab === 2) this.searchQuery = '';
            if (tab === 3) this.reportStep = 'idle';
        },
        renderFinal(tab) {
            if (tab === 0) this.parserStep = 4;
            if (tab === 1) this.batchRows = BATCH_START.map(r => ({ ...r, progress: 100 }));
            if (tab === 2) this.searchQuery = SEARCH_TEXT;
            if (tab === 3) this.reportStep = 'done';
        },
        play(tab) {
            this.clearTimers();
            this.pendingPlay = false;
            this.renderStart(tab);
            this.playing = true;
            const done = () => { this.playing = false; };

            if (tab === 0) {
                [600, 1600, 2600, 3600].forEach((delay, i) => {
                    this.later(() => {
                        this.parserStep = i + 1;
                        if (i === 3) done();
                    }, delay);
                });
            } else if (tab === 1) {
                const id = setInterval(() => {
                    const row = this.batchRows.find(r => r.progress < 100);
                    if (!row) {
                        clearInterval(id);
                        done();
                        return;
                    }
                    row.progress = Math.min(100, row.progress + 8);
                }, 100);
                this.timers.push(id);
            } else if (tab === 2) {
                SEARCH_TEXT.split('').forEach((ch, i) => {
                    this.later(() => {
                        this.searchQuery += ch;
                        if (i === SEARCH_TEXT.length - 1) done();
                    }, 400 * (i + 1));
                });
            } else if (tab === 3) {
                this.later(() => { this.reportStep = 'generating'; }, 400);
                this.later(() => { this.reportStep = 'done'; done(); }, 1600);
            }
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
