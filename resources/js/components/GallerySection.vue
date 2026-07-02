<template>
    <section id="gallery" class="py-24 lg:py-32 bg-surface/30 relative border-t border-b border-border/40">
        <!-- Background decorative blur -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand/5 rounded-full blur-[120px] pointer-events-none z-0"></div>
        
        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-text">
                    {{ isFr ? "Découvrez l'Application en Action" : "Explore the Desktop App" }}
                </h2>
                <p class="text-text-muted max-w-xl mx-auto text-sm">
                    {{ isFr ? "Découvrez l'interface native et les puissantes fonctionnalités de notre outil de bureau 100% hors ligne." : "Take a tour of the native user interface and powerful offline-first features running directly on your machine." }}
                </p>
            </div>

            <!-- Mode selector: Walkthrough Video vs Screenshots -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex rounded-full bg-surface border border-border p-1">
                    <button 
                        @click="viewMode = 'screenshots'"
                        :class="[viewMode === 'screenshots' ? 'bg-brand-dark text-white shadow-sm' : 'text-text-muted hover:text-text']"
                        class="px-6 py-2 rounded-full text-xs font-mono uppercase tracking-wider transition-all duration-300 cursor-pointer">
                        {{ isFr ? 'Captures d\'écran' : 'Screenshots' }}
                    </button>
                    <button 
                        @click="viewMode = 'walkthrough'"
                        :class="[viewMode === 'walkthrough' ? 'bg-brand-dark text-white shadow-sm' : 'text-text-muted hover:text-text']"
                        class="px-6 py-2 rounded-full text-xs font-mono uppercase tracking-wider transition-all duration-300 cursor-pointer flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                        {{ isFr ? 'Démo Vidéo' : 'Video Tour' }}
                    </button>
                </div>
            </div>

            <!-- Walkthrough Mode -->
            <div v-if="viewMode === 'walkthrough'" class="max-w-4xl mx-auto animate-fadeIn">
                <!-- MacOS window wrapper -->
                <div class="border border-border/80 bg-surface-light rounded-2xl overflow-hidden shadow-2xl relative font-sans text-xs">
                    <!-- Window Header bar -->
                    <div class="flex items-center justify-between px-4 py-3 border-b border-border/50 bg-surface-light">
                        <div class="flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-[#27c93f]"></span>
                            <span class="font-mono text-[10px] text-text-muted uppercase tracking-wider ml-1.5 font-medium">app_walkthrough.mp4</span>
                        </div>
                        <div class="text-[9px] text-brand-dark font-mono font-bold uppercase tracking-wider bg-brand/10 px-2 py-0.5 rounded border border-brand/20">
                            {{ isFr ? '100% Local' : 'Local Sandbox' }}
                        </div>
                    </div>
                    <!-- Walkthrough GIF player -->
                    <div class="relative bg-black flex justify-center items-center overflow-hidden aspect-[1200/800]">
                        <img 
                            :src="'/screenshots/app_walkthrough.gif'" 
                            :alt="isFr ? 'Démonstration vidéo de l\'application' : 'Application video walkthrough'"
                            class="w-full h-full object-contain"
                        />
                    </div>
                </div>
            </div>

            <!-- Screenshots Mode -->
            <div v-else class="grid lg:grid-cols-12 gap-8 items-start animate-fadeIn">
                <!-- Left Sidebar: Tab selection list -->
                <!-- Desktop Sidebar (Hidden on mobile/tablet) -->
                <div class="hidden lg:block lg:col-span-4 space-y-2 lg:sticky lg:top-24">
                    <button 
                        v-for="(tab, idx) in tabs" 
                        :key="idx"
                        @click="activeTabIdx = idx"
                        :class="[idx === activeTabIdx ? 'border-brand bg-brand/5 text-text border-l-4 font-semibold' : 'border-border/30 hover:border-brand/40 hover:bg-surface-light text-text-muted']"
                        class="w-full text-left p-4 rounded-xl border transition-all duration-300 flex flex-col gap-1 cursor-pointer">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-serif">{{ tab.title }}</span>
                        </div>
                        <span class="text-xs text-text-muted font-normal leading-relaxed leading-normal">{{ tab.desc }}</span>
                    </button>
                </div>

                <!-- Mobile Switcher (Visible only on mobile/tablet) -->
                <div class="lg:hidden w-full flex overflow-x-auto gap-2 pb-4 mb-6 scrollbar-none snap-x snap-mandatory">
                    <button 
                        v-for="(tab, idx) in tabs" 
                        :key="idx"
                        @click="activeTabIdx = idx"
                        :class="[idx === activeTabIdx ? 'bg-brand text-white border-brand' : 'bg-surface-light border-border text-text-muted']"
                        class="snap-center shrink-0 px-4 py-2.5 rounded-full border text-xs font-medium cursor-pointer transition-all duration-200">
                        {{ tab.title }}
                    </button>
                </div>

                <!-- Right Area: Window shell containing the active tab screenshot -->
                <div class="lg:col-span-8 w-full">
                    <div class="border border-border/80 bg-surface-light rounded-2xl overflow-hidden shadow-2xl relative font-sans text-xs flex flex-col">
                        <!-- OS Window header bar -->
                        <div class="flex items-center justify-between px-4 py-3 border-b border-border/50 bg-surface-light">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#27c93f]"></span>
                                <span class="font-mono text-[10px] text-text-muted uppercase tracking-wider ml-1.5 font-medium">{{ tabs[activeTabIdx].fileName }}</span>
                            </div>
                            <div class="text-[9px] text-text-muted font-mono tracking-wider">
                                {{ isFr ? 'Mode de bureau' : 'Desktop Mode' }}
                            </div>
                        </div>

                        <!-- Active Image display -->
                        <div class="relative bg-surface/50 overflow-hidden aspect-[1200/800] border-t border-border/20 transition-all duration-300">
                            <img 
                                :src="'/screenshots/' + tabs[activeTabIdx].image" 
                                :alt="tabs[activeTabIdx].title" 
                                class="w-full h-full object-cover select-none transition-transform duration-500 hover:scale-[1.02]"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'GallerySection',
    data() {
        return {
            viewMode: 'screenshots',
            activeTabIdx: 0
        };
    },
    computed: {
        isFr() {
            return this.$lang && this.$lang.lang === 'fr';
        },
        tabs() {
            if (this.isFr) {
                return [
                    {
                        title: "📊 Tableau de Bord",
                        desc: "Suivez vos dépenses et l'état de votre bibliothèque en temps réel avec des graphiques locaux.",
                        image: "screenshot_dashboard.png",
                        fileName: "ocr_receipt_dashboard.png"
                    },
                    {
                        title: "📄 Saisie Individuelle",
                        desc: "Analysez vos reçus un par un avec surlignage des zones lues et validation manuelle simple.",
                        image: "screenshot_single_pdf.png",
                        fileName: "ocr_receipt_parser.png"
                    },
                    {
                        title: "🗂️ Traitement par Lots",
                        desc: "Scannez des dossiers entiers de factures en arrière-plan et renommez-les par gabarit.",
                        image: "screenshot_batches.png",
                        fileName: "ocr_receipt_batch.png"
                    },
                    {
                        title: "🗃️ Grille de Bibliothèque",
                        desc: "Recherchez et filtrez vos documents archivés instantanément via une base SQL locale.",
                        image: "screenshot_library.png",
                        fileName: "ocr_receipt_library.png"
                    },
                    {
                        title: "🏢 Données de Référence",
                        desc: "Gérez vos fournisseurs, catégories, projets et clés de correspondance automatiques.",
                        image: "screenshot_reference_data.png",
                        fileName: "ocr_receipt_references.png"
                    },
                    {
                        title: "📈 Générateur de Rapports",
                        desc: "Exportez vos relevés en format CSV ou compilez des rapports de dépenses HTML pour vos impôts.",
                        image: "screenshot_report_builder.png",
                        fileName: "ocr_receipt_reports.png"
                    },
                    {
                        title: "⚙️ Configuration Générale",
                        desc: "Basculez de langue, configurez l'OCR local ou la localisation de sauvegarde physique.",
                        image: "screenshot_settings.png",
                        fileName: "ocr_receipt_settings.png"
                    }
                ];
            } else {
                return [
                    {
                        title: "📊 Dashboard",
                        desc: "Track your spending and library status in real-time with local visual graphs.",
                        image: "screenshot_dashboard.png",
                        fileName: "ocr_receipt_dashboard.png"
                    },
                    {
                        title: "📄 Single PDF Parser",
                        desc: "Extract individual receipts with manual validation and field highlighting.",
                        image: "screenshot_single_pdf.png",
                        fileName: "ocr_receipt_parser.png"
                    },
                    {
                        title: "🗂️ Batch Processing",
                        desc: "Scan entire directories of receipts and automatically rename them in bulk.",
                        image: "screenshot_batches.png",
                        fileName: "ocr_receipt_batch.png"
                    },
                    {
                        title: "🗃️ Library Grid",
                        desc: "Search and filter archived documents instantly via a local SQL database.",
                        image: "screenshot_library.png",
                        fileName: "ocr_receipt_library.png"
                    },
                    {
                        title: "🏢 Reference Data",
                        desc: "Manage your suppliers, categories, projects, and keyword matching rules.",
                        image: "screenshot_reference_data.png",
                        fileName: "ocr_receipt_references.png"
                    },
                    {
                        title: "📈 Report Builder",
                        desc: "Export expense statements to CSV or compile beautiful HTML summaries.",
                        image: "screenshot_report_builder.png",
                        fileName: "ocr_receipt_reports.png"
                    },
                    {
                        title: "⚙️ General Settings",
                        desc: "Switch UI languages, configure local OCR engine, or database directories.",
                        image: "screenshot_settings.png",
                        fileName: "ocr_receipt_settings.png"
                    }
                ];
            }
        }
    }
};
</script>

<style scoped>
.animate-fadeIn {
    animation: fadeIn 0.4s ease-out forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
