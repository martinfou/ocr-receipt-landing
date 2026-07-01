export const locales = {
    fr: {
        nav: {
            workflow: "Optimisation",
            features: "Fonctionnalités",
            pricing: "Tarifs",
            contact: "Contact",
            cta: "Télécharger"
        },
        hero: {
            subtitle: "IA Locale · Zéro Cloud · <span class='text-[#e5e5e5]'>Zéro Abonnement</span>",
            title: "Vos factures et reçus classés. <span class='text-[#60A5FA]'>100% localement.</span>",
            cta1: "⬇️ Télécharger l'application",
            designedFor: "Pour freelances et PME soucieux de leur confidentialité.",
            badges: "IA locale & cloud · Zéro abonnement · Licence perpétuelle",
            carouselTabs: ['Paramètres', 'Correcteur IA', 'Par Lots', 'Fuzzy Match', 'Rapports'],
            simulator: {
                title: "PDF Unique",
                subtitle: "Traiter un reçu individuel pour l'extraction de données et le renommage",
                discard: "Ignorer",
                save: "Renommer & Enregistrer",
                fields: "Champs du document",
                matchConfirmed: "✓ Correspondance confirmée",
                preview: "Aperçu du nom de fichier",
                validFilename: "✓ Nom de fichier local valide.",
                steps: {
                    load: "Charger",
                    ocr: "Numérisation",
                    extract: "Extraction",
                    rename: "Renommer",
                    saveStep: "Enregistrer"
                },
                status: {
                    ready: "Prêt",
                    ocr: "Extraction locale du texte...",
                    extract: "Analyse de l'IA locale...",
                    rename: "Formatage du nom de fichier...",
                    save: "Prêt à renommer et enregistrer."
                }
            }
        },
        problem: {
            title: "La corvée des factures manuelles",
            item1: "Ouvrir le PDF → Trouver le total → Recopier dans Excel → Classer le fichier",
            item2: "Répéter ce rituel 100 fois chaque fin de mois",
            item3: "Rechercher et corriger les fautes de frappe manuellement",
            item4: "Organiser péniblement les répertoires et les pièces jointes",
            sheetTitle: "RAPPORT DE TEMPS PERDU",
            sheetSubtitle: "ADMIN NON FACTURABLE",
            rateLabel: "1 Reçu / Facture",
            rateValue: "≈ 90 sec",
            monthLabel: "100 Reçus / Mois",
            monthValue: "≈ 2,5 Heures",
            yearLabel: "Perte Annuelle Totale",
            yearValue: "30 Heures / An",
            summary3: "30 heures par an gâchées à jamais."
        },
        howItWorks: {
            title: "Automatisé en 5 secondes.",
            step1: {
                title: "1. Glissez vos PDF",
                desc: "Importez vos documents d'un coup."
            },
            step2: {
                title: "2. Inférence locale",
                desc: "L'IA extrait les données et corrige le texte."
            },
            step3: {
                title: "3. Exports CSV & PDF",
                desc: "Téléchargez vos données en CSV, ou générez un rapport PDF d'audit complet listant vos dépenses et incluant une copie de chaque reçu à la fin."
            }
        },
        features: {
            title: "Gérez vos reçus sans effort",
            subtitle: "Du fichier brut aux données structurées en quelques secondes. Pas d'internet requis. Pas d'abonnement.",
            ai: {
                title: "Correction par IA",
                desc: "Nettoyage automatique des erreurs OCR, association intelligente des fournisseurs et extraction complète des taxes et articles de ligne."
            },
            batch: {
                title: "Traitement par Lots",
                desc: "Glissez 50 reçus à la fois. L'application les traite en arrière-plan en arrière-plan sans ralentissement."
            },
            privacy: {
                title: "Confidentialité Totale",
                desc: "Le modèle d'IA et vos données de facturation sont 100% locaux. L'inférence s'effectue sur le CPU de votre machine et les reçus restent sur votre disque dur."
            },
            match: {
                title: "Fuzzy Matching",
                desc: "Association intelligente des fournisseurs habituels sans configuration requise."
            },
            export: {
                title: "Rapports PDF & Exports CSV",
                desc: "Générez des rapports PDF d'audit complets avec une copie de chaque reçu intégrée, ou exportez en un clic vers un fichier CSV compatible Excel et QuickBooks."
            },
            desktop: {
                title: "Application Native",
                desc: "App rapide pour Windows, macOS, Linux. Pas d'abonnement mensuel, licence perpétuelle."
            },
            demoBadge: "Aperçu Interactif",
            clickToOpen: "Lancer la démo du rapport",
            modal: {
                title: "Générateur de Rapports (Simulation)",
                generate: "Générer le rapport",
                generating: "Génération en cours...",
                emptyState: "Prêt à compiler les reçus. Cliquez sur Générer pour simuler le processus local.",
                viewReceipt: "Voir la pièce jointe",
                receiptImage: "Copie du Reçu Original"
            },
            batchBadge: "Aperçu Interactif",
            batchClickToOpen: "Lancer la démo du traitement",
            batchModal: {
                title: "Traitement par Lot (Simulation)",
                desc: "Glissez-déposez plusieurs fichiers pour effectuer l'extraction de données et le renommage simultanés.",
                dropzone: "Glisser & Déposer des PDFs ici ou cliquer pour parcourir",
                options: "Options du Lot",
                project: "Projet cible...",
                category: "Catégorie par défaut...",
                start: "Démarrer le Traitement",
                clear: "Vider la File",
                queueTitle: "File d'attente des documents",
                colName: "Nom du Fichier",
                colSize: "Taille",
                colStatus: "Statut",
                colProgress: "Progression",
                statusPending: "En attente",
                statusActive: "En cours",
                statusDone: "Terminé"
            },
            settingsBadge: "Aperçu Interactif",
            settingsClickToOpen: "Ouvrir le panneau de configuration",
            settingsModal: {
                title: "Configuration & Modèles Locaux (Simulation)",
                desc: "Configurez les préférences de l'application et les modèles LLM locaux hors ligne.",
                langTitle: "Paramètres de Langue",
                guiTitle: "Paramètres GUI",
                llmTitle: "Configuration du modèle LLM",
                dbTitle: "Paramètres Base de Données",
                ocrTitle: "Paramètres OCR",
                modelStatus: "Modèle disponible : NuExtract-1.5-tiny.Q4_K_M.gguf",
                testBtn: "Tester le modèle",
                saveBtn: "Enregistrer",
                applyBtn: "Appliquer",
                resetBtn: "Réinitialiser"
            },
            matchBadge: "Aperçu Interactif",
            matchClickToOpen: "Lancer la démo de correspondance",
            matchModal: {
                title: "Fuzzy Matching & IA (Simulation)",
                project: "Projet",
                docType: "Type de document",
                template: "Gabarit",
                fields: "Champs du document",
                lineItems: "Lignes d'articles (9)",
                namingPreview: "Aperçu du nom de fichier",
                saveBtn: "Renommer & Enregistrer",
                discardBtn: "Ignorer",
                statusScanning: "Scan en cours...",
                statusMatched: "Correspondance confirmée"
            },
            privacyBadge: "Modèle & Données Locaux",
            privacyClickToOpen: "Ouvrir les paramètres locaux",
            aiBadge: "IA Locale",
            aiClickToOpen: "Lancer le correcteur d'IA",
            aiModal: {
                title: "Correcteur IA & Extraction Structurée (Simulation)",
                rawOcr: "Texte OCR Brut (Avec Erreurs)",
                structuredData: "Données IA Structurées (Propres)",
                vendorMatched: "Fournisseur Associé",
                taxes: "Taxes Extraites",
                runBtn: "Lancer la correction par IA",
                closeBtn: "Fermer",
                statusIdle: "En attente de traitement",
                statusProcessing: "Nettoyage OCR et parsing local...",
                statusDone: "Correction & Structuration terminées"
            }
        },
        pricing: {
            title: "Des tarifs simples. <span class='text-[#60A5FA]'>Pas d'abonnement.</span>",
            subtitle: "Commencez gratuitement. Ne payez que pour ce dont vous avez besoin.",
            period: "achat unique",
            watermark: "avec filigrane",
            noWatermark: "sans filigrane",
            seats: {
                one: "1 poste",
                two: "2 postes (PC + Laptop)",
                five: "Pack de 5 licences (volume + sur demande)"
            },
            limitedBatch: "Batch import (limité à 1)",
            unlimitedBatch: "Traitement par lots illimité",
            localTiny: "Inférence IA local (tiny)",
            localAdvanced: "Modèles avancés (smol/base)",
            freeLite: {
                name: "GRATUIT (Free Lite)",
                desc: "Usage personnel ou léger",
                btn: "⬇️ Télécharger gratuit",
                features: [
                    "Reçus illimités",
                    "OCR simple (10 IA/mois)",
                    "Export CSV",
                    "Rapport PDF (avec filigrane)",
                    "10 renommages auto/mois",
                    "Multi-projets",
                    "Centres de coût (Cost-centers)",
                    "Multi-workspaces (Bases DB)",
                    "1 poste"
                ],
                disabled: [
                    "Inférence IA locale (GGUF)",
                    "Option IA Cloud (BYOK)",
                    "Batch import / traitement"
                ]
            },
            solo: {
                name: "SOLO",
                desc: "Pour les freelances",
                btn: "💳 Acheter Solo",
                features: [
                    "Reçus illimités",
                    "OCR + IA local (NuExtract)",
                    "Export CSV & Excel",
                    "PDF Pro (sans filigrane)",
                    "Renommage auto illimité",
                    "Inférence IA local (tiny)",
                    "Option IA Cloud (BYOK)",
                    "Multi-projets",
                    "Centres de coût",
                    "Multi-workspaces",
                    "1 poste"
                ],
                disabled: [
                    "Batch import (limité à 1)"
                ]
            },
            pro: {
                name: "PRO",
                desc: "Professionnels exigeants",
                btn: "💳 Acheter Pro",
                features: [
                    "Reçus illimités",
                    "OCR + IA local (NuExtract)",
                    "Export CSV & Excel",
                    "PDF Premium (sans filigrane)",
                    "Renommage auto illimité",
                    "Modèles avancés (smol/base)",
                    "Option IA Cloud (BYOK)",
                    "Traitement par lots illimité",
                    "Multi-projets",
                    "Centres de coût",
                    "Multi-workspaces",
                    "2 postes (PC + Laptop)"
                ],
                disabled: []
            },
            comptable: {
                name: "COMPTABLE",
                desc: "Cabinets et PME",
                btn: "💳 Acheter Comptable",
                features: [
                    "Reçus illimités",
                    "OCR + IA local (NuExtract)",
                    "Export CSV & Excel",
                    "PDF Premium (sans filigrane)",
                    "Renommage auto illimité",
                    "Modèles avancés (smol/base)",
                    "Option IA Cloud (BYOK)",
                    "Traitement par lots illimité",
                    "Multi-projets",
                    "Centres de coût",
                    "Multi-workspaces",
                    "Pack de 5 licences (volume + sur demande)"
                ],
                disabled: []
            }
        },
        beta: {
            title: "Rejoindre l'accès anticipé",
            subtitle: "Inscrivez-vous pour le lancement privé :",
            bullet1: "Accès prioritaire à la bêta fermée",
            bullet2: "Licence à vie offerte pour les bêta-testeurs",
            bullet3: "Notifications de mise à jour en temps réel",
            bullet4: "Tarif de lancement de 149$ au lieu de 199$",
            firstname: "Prénom",
            email: "Adresse email",
            profession: "Profession (Freelance, PME, CPA...)",
            btn: "Je veux l'accès anticipé",
            success: "Merci ! Vous êtes inscrit à l'accès anticipé 🎉"
        },
        about: {
            title: "Martin Fournier",
            location: "Québec, Canada",
            bio: "Développeur et entrepreneur. J'ai créé OCR Receipt pour automatiser la gestion des dépenses professionnelles tout en conservant une confidentialité absolue."
        },
        faq: {
            title: "Questions Fréquentes",
            items: [
                {
                    q: "Mes données sont-elles envoyées sur un serveur ?",
                    a: "Non. L'OCR et l'IA locale s'exécutent entièrement sur votre machine. Pour les versions payantes (Solo+), une option d'extraction via IA Cloud (BYOK) est activable si vous souhaitez maximiser la précision, en utilisant votre propre clé API (OpenAI/Anthropic/etc.)."
                },
                {
                    q: "Puis-je essayer avant d'acheter ?",
                    a: "Oui. La version gratuite (Free Lite) vous donne des reçus illimités avec OCR simple, 10 extractions IA/mois, 10 auto-renommages/mois et exports CSV/PDF standard. Pas de carte de crédit requise."
                },
                {
                    q: "Quels formats de fichiers sont supportés ?",
                    a: "PDF et images (PNG, JPG). Uniquement les factures et reçus."
                },
                {
                    q: "Est-ce que ça marche avec mes fournisseurs ?",
                    a: "Oui. L'IA s'adapte automatiquement. Si un fournisseur n'est pas reconnu, vous l'ajoutez une fois et il est mémorisé."
                },
                {
                    q: "Puis-je exporter vers QuickBooks/Xero ?",
                    a: "Export CSV pour l'instant. L'intégration directe est en développement."
                },
                {
                    q: "Y a-t-il une version Mac/Linux ?",
                    a: "Oui. OCR Receipt est une app PyQt6 multiplateforme. Windows, macOS et Linux sont supportés."
                }
            ]
        },
        footer: {
            developedBy: "Développé par Martin Fournier — Québec, Canada 🇨🇦",
            links: {
                product: "Produit",
                github: "GitHub",
                contact: "Contact"
            },
            rights: "© 2026 OCR Receipt. Tous droits réservés."
        },
        downloads: {
            title: "Téléchargements",
            subtitle: "Installez l'application sur votre système. Licence active au premier lancement.",
            mac: {
                platform: "macOS",
                desc: "Intel & Apple Silicon (M1/M2/M3)",
                btn: "Télécharger (.DMG)"
            },
            windows: {
                platform: "Windows",
                desc: "Windows 10 / 11 (64-bit)",
                btn: "Télécharger (.EXE)"
            },
            linux: {
                platform: "Linux",
                desc: "Toutes distributions (tar.gz)",
                btn: "Télécharger (.TAR.GZ)"
            },
            licenseNote: "Clé d'activation requise. Obtenez une clé d'accès anticipé gratuite dans la section tarifs ci-dessus."
        }
    },
    en: {
        nav: {
            workflow: "Workflow",
            features: "Features",
            pricing: "Pricing",
            contact: "Contact",
            cta: "Download"
        },
        hero: {
            subtitle: "Local AI · Zero Cloud · <span class='text-[#e5e5e5]'>No Subscription</span>",
            title: "Your receipts parsed. <span class='text-[#60A5FA]'>100% offline.</span>",
            cta1: "⬇️ Download the App",
            designedFor: "Built for privacy-conscious freelancers and SMBs.",
            badges: "Local & Cloud AI · No Subscriptions · Perpetual License",
            carouselTabs: ['Settings', 'AI Clean', 'Batch Scan', 'Fuzzy Match', 'Reports'],
            simulator: {
                title: "PDF Unique",
                subtitle: "Process an individual receipt for data extraction and renaming",
                discard: "Discard",
                save: "Rename & Save",
                fields: "Document Fields",
                matchConfirmed: "✓ Match Confirmed",
                preview: "File Naming Preview",
                validFilename: "✓ Valid local filename.",
                steps: {
                    load: "Load File",
                    ocr: "OCR Scan",
                    extract: "Extract",
                    rename: "Rename",
                    saveStep: "Save"
                },
                status: {
                    ready: "Ready",
                    ocr: "Extracting text local OCR...",
                    extract: "DeepSeek-LLM analyzing fields...",
                    rename: "Formatting file template name...",
                    save: "Ready to Rename & Save locally."
                }
            }
        },
        problem: {
            title: "The Manual Invoice Chore",
            item1: "Open PDF → Search for totals → Copy to Excel → File document",
            item2: "Repeat this process 100 times every single month",
            item3: "Manually correct typos and transcribing errors",
            item4: "Waste hours organizing folders and matching vendors",
            sheetTitle: "WASTED TIME AUDIT SHEET",
            sheetSubtitle: "UNBILLED ADMIN TIME",
            rateLabel: "1 Invoice / Receipt",
            rateValue: "≈ 90 sec",
            monthLabel: "100 Receipts / Month",
            monthValue: "≈ 2.5 Hours",
            yearLabel: "Total Yearly Loss",
            yearValue: "30 Hours / Year",
            summary3: "30 hours a year wasted forever."
        },
        howItWorks: {
            title: "Automated in 5 seconds.",
            step1: {
                title: "1. Drag & Drop",
                desc: "Import your receipt PDFs or images instantly."
            },
            step2: {
                title: "2. Local AI Processing",
                desc: "Automatic text extraction and context parsing."
            },
            step3: {
                title: "3. CSV & PDF Reports",
                desc: "Download structured expense data in CSV, or generate a complete PDF audit report listing your expenses with copies of each receipt embedded at the end."
            }
        },
        features: {
            title: "Manage your expenses effortlessly",
            subtitle: "From raw receipts to clean data in seconds. No internet required. No subscriptions.",
            ai: {
                title: "AI-Powered Correction",
                desc: "Automatic OCR typo cleaning, supplier categorization, and complete extraction of all line items and tax values."
            },
            batch: {
                title: "Batch Processing",
                desc: "Drop 50 receipts at once. The app processes them in the background without UI lag."
            },
            privacy: {
                title: "100% Private",
                desc: "The AI model and your financial data are 100% local. LLM inference runs directly on your own device CPU, and files stay on your local disk."
            },
            match: {
                title: "Vendor Matching",
                desc: "Intelligent vendor association and normalization with zero configuration."
            },
            export: {
                title: "PDF Reports & CSV Exports",
                desc: "Generate complete PDF audit reports with a copy of each receipt embedded, or export to CSV compatible with Excel, Google Sheets, and QuickBooks."
            },
            desktop: {
                title: "Native Desktop App",
                desc: "Fast app for Windows, macOS, and Linux. No subscriptions, perpetual license."
            },
            demoBadge: "Interactive Demo",
            clickToOpen: "Launch report preview",
            modal: {
                title: "Report Builder (Simulation)",
                generate: "Generate Report",
                generating: "Generating Report...",
                emptyState: "Ready to compile receipts. Click Generate to simulate the local build process.",
                viewReceipt: "View Attachment",
                receiptImage: "Original Receipt Copy"
            },
            batchBadge: "Interactive Demo",
            batchClickToOpen: "Launch batch demo",
            batchModal: {
                title: "Batch Processing (Simulation)",
                desc: "Drag & drop multiple files to perform concurrent data extraction and renaming.",
                dropzone: "Drag & Drop PDFs here or click to browse",
                options: "Batch Options",
                project: "Target Project...",
                category: "Default Category...",
                start: "Start Processing",
                clear: "Clear Queue",
                queueTitle: "Document Queue",
                colName: "File Name",
                colSize: "Size",
                colStatus: "Status",
                colProgress: "Progress",
                statusPending: "Pending",
                statusActive: "Processing",
                statusDone: "Completed"
            },
            settingsBadge: "Interactive Demo",
            settingsClickToOpen: "Open settings panel",
            settingsModal: {
                title: "Configuration & Local Models (Simulation)",
                desc: "Configure app preferences and local GGUF models offline.",
                langTitle: "Language Settings",
                guiTitle: "GUI Preferences",
                llmTitle: "LLM Model Configuration",
                dbTitle: "Database Parameters",
                ocrTitle: "OCR Settings",
                modelStatus: "Model available: NuExtract-1.5-tiny.Q4_K_M.gguf",
                testBtn: "Test Model",
                saveBtn: "Save Settings",
                applyBtn: "Apply",
                resetBtn: "Reset"
            },
            matchBadge: "Interactive Demo",
            matchClickToOpen: "Launch matching demo",
            matchModal: {
                title: "Fuzzy Matching & AI (Simulation)",
                project: "Project",
                docType: "Document Type",
                template: "Template",
                fields: "Document Fields",
                lineItems: "Line Items (9)",
                namingPreview: "File Naming Preview",
                saveBtn: "Rename & Save",
                discardBtn: "Discard",
                statusScanning: "Scanning...",
                statusMatched: "Match Confirmed"
            },
            privacyBadge: "Local Model & Data",
            privacyClickToOpen: "Open local preferences",
            aiBadge: "Local AI",
            aiClickToOpen: "Launch AI correction",
            aiModal: {
                title: "AI Correction & Structured Extraction (Simulation)",
                rawOcr: "Raw OCR Text (With Typos)",
                structuredData: "Structured AI Data (Clean)",
                vendorMatched: "Matched Vendor",
                taxes: "Extracted Taxes",
                runBtn: "Run AI Correction",
                closeBtn: "Close",
                statusIdle: "Ready to process",
                statusProcessing: "Typo cleaning and local parsing...",
                statusDone: "Extraction & Formatting Completed"
            }
        },
        pricing: {
            title: "Simple pricing. <span class='text-[#60A5FA]'>No subscription.</span>",
            subtitle: "Start free. Pay only if you need more.",
            period: "one-time purchase",
            watermark: "with watermark",
            noWatermark: "no watermark",
            seats: {
                one: "1 seat",
                two: "2 seats (PC + Laptop)",
                five: "5-license pack (custom volume on request)"
            },
            limitedBatch: "Batch import (limited to 1)",
            unlimitedBatch: "Unlimited batch processing",
            localTiny: "Local AI inference (tiny)",
            localAdvanced: "Advanced models (smol/base)",
            freeLite: {
                name: "FREE LITE",
                desc: "For personal or light use",
                btn: "⬇️ Download Free",
                features: [
                    "Unlimited receipts",
                    "Simple OCR (10 AI/mo)",
                    "CSV Export",
                    "PDF Report (with watermark)",
                    "10 auto-renames/mo",
                    "Multi-projects",
                    "Cost-centers",
                    "Multi-workspaces",
                    "1 seat"
                ],
                disabled: [
                    "Local AI inference (GGUF)",
                    "Cloud AI Option (BYOK)",
                    "Batch import / processing"
                ]
            },
            solo: {
                name: "SOLO",
                desc: "For freelancers",
                btn: "💳 Buy Solo",
                features: [
                    "Unlimited receipts",
                    "OCR + Local AI (NuExtract)",
                    "CSV & Excel Export",
                    "Pro PDF (no watermark)",
                    "Unlimited auto-rename",
                    "Local AI inference (tiny)",
                    "Cloud AI Option (BYOK)",
                    "Multi-projects",
                    "Cost-centers",
                    "Multi-workspaces",
                    "1 seat"
                ],
                disabled: [
                    "Batch import (limited to 1)"
                ]
            },
            pro: {
                name: "PRO",
                desc: "For demanding professionals",
                btn: "💳 Buy Pro",
                features: [
                    "Unlimited receipts",
                    "OCR + Local AI (NuExtract)",
                    "CSV & Excel Export",
                    "Premium PDF (no watermark)",
                    "Unlimited auto-rename",
                    "Advanced models (smol/base)",
                    "Cloud AI Option (BYOK)",
                    "Unlimited batch processing",
                    "Multi-projects",
                    "Cost-centers",
                    "Multi-workspaces",
                    "2 seats (PC + Laptop)"
                ],
                disabled: []
            },
            comptable: {
                name: "FIRM (CPA)",
                desc: "For firms and SMBs",
                btn: "💳 Buy Firm Pack",
                features: [
                    "Unlimited receipts",
                    "OCR + Local AI (NuExtract)",
                    "CSV & Excel Export",
                    "Premium PDF (no watermark)",
                    "Unlimited auto-rename",
                    "Advanced models (smol/base)",
                    "Cloud AI Option (BYOK)",
                    "Unlimited batch processing",
                    "Multi-projects",
                    "Cost-centers",
                    "Multi-workspaces",
                    "5-license pack (custom volume on request)"
                ],
                disabled: []
            }
        },
        beta: {
            title: "Join the Early Access",
            subtitle: "Sign up for the private release program:",
            bullet1: "Priority access to the closed beta release",
            bullet2: "Lifetime free license for active beta-testers",
            bullet3: "Real-time updates and launch announcements",
            bullet4: "Early-adopter price: $149 instead of $199",
            firstname: "First Name",
            email: "Email Address",
            profession: "Profession (Freelancer, SMB, CPA...)",
            btn: "Get Early Access",
            success: "Thank you! You have successfully joined the early access list 🎉"
        },
        about: {
            title: "Martin Fournier",
            location: "Québec, Canada",
            bio: "Developer & entrepreneur. I built OCR Receipt to automate the invoicing chore while keeping client data 100% offline."
        },
        faq: {
            title: "Frequently Asked Questions",
            items: [
                {
                    q: "Is my data sent to a server?",
                    a: "No. OCR and local AI run entirely on your computer. For paid tiers (Solo+), a Cloud AI (BYOK) option can be enabled to maximize accuracy, using your own API key (OpenAI/Anthropic/etc.)."
                },
                {
                    q: "Can I try before buying?",
                    a: "Yes. The free tier (Free Lite) gives you unlimited receipts with simple OCR, 10 AI extractions/month, 10 auto-renamings/month, and standard CSV/PDF exports. No credit card required."
                },
                {
                    q: "What file formats are supported?",
                    a: "PDF and images (PNG, JPG). Receipts and invoices only."
                },
                {
                    q: "Does it work with my vendors?",
                    a: "Yes. The AI adapts automatically. If a vendor is not recognized, you add it once and it is remembered."
                },
                {
                    q: "Can I export to QuickBooks/Xero?",
                    a: "CSV export is supported. Direct cloud accounting integration is on the roadmap."
                },
                {
                    q: "Is there a Mac/Linux version?",
                    a: "Yes. OCR Receipt is a cross-platform PyQt6 app supporting Windows, macOS, and Linux."
                }
            ]
        },
        footer: {
            developedBy: "Developed by Martin Fournier — Québec, Canada 🇨🇦",
            links: {
                product: "Product",
                github: "GitHub",
                contact: "Contact"
            },
            rights: "© 2026 OCR Receipt. All rights reserved."
        },
        downloads: {
            title: "Downloads",
            subtitle: "Install the app locally on your machine. Activate your license on first launch.",
            mac: {
                platform: "macOS",
                desc: "Intel & Apple Silicon (M1/M2/M3)",
                btn: "Download (.DMG)"
            },
            windows: {
                platform: "Windows",
                desc: "Windows 10 / 11 (64-bit)",
                btn: "Download (.EXE)"
            },
            linux: {
                platform: "Linux",
                desc: "All distributions (tar.gz)",
                btn: "Download (.TAR.GZ)"
            },
            licenseNote: "Activation key required. Obtain a free early access license key in the pricing section above."
        }
    }
};
