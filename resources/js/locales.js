export const locales = {
    fr: {
        nav: {
            problem: "Pourquoi",
            workflow: "Comment ça marche",
            features: "Fonctionnalités",
            pricing: "Tarifs",
            blog: "Blog",
            contact: "Contact",
            cta: "Télécharger"
        },
        hero: {
            subtitle: "IA Locale · Zéro Cloud · <span class='text-[#333]'>Zéro Abonnement</span>",
            title: "Fini le désordre des factures et documents.",
            description: "Notre logiciel analyse, renomme et classe automatiquement toutes vos pièces justificatives, reçus et documents administratifs 100% localement. De quoi réjouir votre comptable et aborder vos audits d'impôt en toute sérénité.",
            cta1: "Télécharger l'application",
            designedFor: "Pour freelances et PME soucieux de leur confidentialité.",
            bullets: [
                "Analyse et extraction de données par IA",
                "Renommage et classement automatiques",
                "Recherche instantanée dans la base locale",
                "Rapports de dépenses prêts pour la comptabilité"
            ],
            badges: "IA locale & cloud · Zéro abonnement · Licence perpétuelle",
            carouselTabs: ['Import', 'IA Locale', 'Recherche', 'Rapports'],
            simulator: {
                title: "PDF Unique",
                subtitle: "Traiter un reçu individuel pour l'extraction de données et le renommage",
                discard: "Ignorer",
                save: "Enregistrer",
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
                },
                features: [
                    "Extraction et nettoyage de données par IA",
                    "Renommage et classement 100% automatiques",
                    "Recherche ultra-rapide dans votre base locale",
                    "Rapports financiers prêts pour votre comptable"
                ],
                tagline: "Conçu par un travailleur autonome, pour les travailleurs autonomes, consultants et PME soucieux de leur confidentialité."
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
            rateLabel: "Temps moyen / Reçu",
            monthLabel: "Reçus / Mois",
            timePerReceiptLabel: "Temps par reçu",
            hourlyLabel: "Valeur horaire de votre temps",
            wastedHoursMonthLabel: "Temps perdu / Mois",
            yearLabel: "Temps perdu / An",
            financialLossLabel: "Perte financière / An"
        },
                howItWorks: {
            subtitle: "Comment ça marche",
            title: "Automatisé en 4 étapes.",
            step1: {
                title: "Glissez vos PDF",
                desc: "Importez vos documents ou images de reçus instantanément."
            },
            step2: {
                title: "IA 100% Locale & Renommer",
                desc: "Analyse sémantique, extraction locale de données (avec métadonnées PDF enrichies) et renommage intelligent hors ligne par LLM. Vos données restent 100% locales, sans aucun format propriétaire."
            },
            step3: {
                title: "Recherche Avancée",
                desc: "Indexation automatique dans une base de données locale sécurisée et recherche instantanée par mots-clés."
            },
            step4: {
                title: "Rapports Comptables",
                desc: "Générez des registres complets avec copies de factures consolidées prêtes pour votre comptable."
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
                desc: "Générez des rapports PDF d'audit complets avec copies intégrées ou exportez en CSV. Les métadonnées du PDF sont enrichies avec les données extraites pour faciliter la lecture informatique, sans aucun format propriétaire."
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
            title: "Des tarifs simples en CAD. <span class='text-brand-dark dark:text-brand'>Zéro abonnement.</span>",
            subtitle: "Commencez gratuitement à vie avec Free Lite, ou passez à Pro (199 $ CAD achat unique) pour débloquer le traitement par lots et l'IA locale illimitée.",
            period: "achat unique à vie",
            watermark: "avec filigrane",
            noWatermark: "sans filigrane",
            seats: {
                one: "1 poste",
                two: "2 postes (Bureau + Portable)",
                five: "Pack de 5 licences (volume + sur demande)"
            },
            limitedBatch: "PDF Unique (sans traitement par lots)",
            unlimitedBatch: "Traitement par lots illimité (Batch Hub)",
            localTiny: "Inférence IA locale (tiny)",
            localAdvanced: "IA locale avancée (NuExtract GGUF)",
            freeLite: {
                name: "GRATUIT (Free Lite)",
                desc: "Pour tester ou usage léger à vie",
                btn: "Télécharger Gratuit (0 $)",
                features: [
                    "15 extractions & renommages auto / mois",
                    "Recherche locale SQLite illimitée",
                    "Export CSV standard",
                    "Rapport PDF d'audit (avec filigrane)",
                    "Multi-projets & centres de coût",
                    "Multi-workspaces (bases locales)",
                    "1 poste (Windows, macOS ou Linux)"
                ],
                disabled: [
                    "Traitement par lots illimité (Batch Hub)",
                    "IA locale avancée (NuExtract GGUF) & Cloud BYOK",
                    "Rapports PDF & Excel Pro sans filigrane"
                ]
            },
            pro: {
                name: "PRO",
                desc: "Pour travailleurs autonomes, freelances & PME",
                btn: "💳 Acheter Pro — 199 $ CAD",
                features: [
                    "Reçus & renommages automatiques illimités",
                    "Traitement par lots illimité (50+ PDF d'un coup)",
                    "IA 100% locale (NuExtract GGUF) + Option Cloud (BYOK)",
                    "Extraction des taxes canadiennes (TPS/TVQ/TVH)",
                    "Rapports d'audit PDF (sans filigrane) & Export Excel/CSV",
                    "Entreprises, projets & centres de coût illimités",
                    "Mises à jour v1.x à vie & support prioritaire",
                    "2 postes inclus (Bureau + Portable)"
                ],
                disabled: []
            },
            comptable: {
                name: "CABINET & ÉQUIPE",
                desc: "Pour cabinets comptables, teneurs de livres & équipes",
                btn: "💳 Acheter Pack 5 Postes — 399 $ CAD",
                features: [
                    "Tout ce qui est inclus dans la licence Pro",
                    "Pack de 5 licences perpétuelles (79,80 $ CAD / poste)",
                    "Dossiers clients multi-workspaces illimités",
                    "Compilation de dossiers d'audit PDF & archives .zip",
                    "Gabarits de nommage standardisés pour tout le cabinet",
                    "Support prioritaire & accompagnement d'équipe"
                ],
                disabled: []
            }
        },
        beta: {
            title: "Communauté & Mises à jour Produit",
            subtitle: "Rejoignez les travailleurs autonomes, PME et professionnels qui automatisent leur tenue de livres hors ligne :",
            bullet1: "Téléchargement immédiat de la version Free Lite (0 $)",
            bullet2: "Gabarits de nommage fiscaux (ARC / Revenu Québec)",
            bullet3: "Notifications des nouvelles versions et modèles d'IA",
            bullet4: "Licence Pro perpétuelle à 199 $ CAD (aucun abonnement)",
            firstname: "Nom complet",
            email: "Adresse email",
            profession: "Profession (Travailleur autonome, PME, CPA...)",
            btn: "Rejoindre la communauté",
            success: "Merci ! Vous êtes inscrit aux mises à jour d'OCR Receipt 🎉"
        },
        about: {
            title: "Martin Fournier",
            role: "Travailleur autonome & Développeur indépendant",
            location: "Québec, Canada 🇨🇦",
            bio: "En tant que travailleur autonome, j'en avais assez de perdre mes fins de semaine à renommer des factures PDF pour mes déclarations de TPS/TVQ et mon comptable — et je refusais de payer 35 $/mois à vie ou d'envoyer mes documents d'affaires sur des serveurs cloud américains. J'ai créé OCR Receipt pour régler mon propre problème : un outil 100% local, rapide, que l'on achète une seule fois.",
            pledge: "De travailleur autonome à travailleur autonome : aucun abonnement caché, aucune télémétrie, vos fichiers restent sur votre disque dur."
        },
        faq: {
            title: "Questions Fréquentes",
            items: [
                {
                    q: "Mes données sont-elles envoyées sur un serveur ?",
                    a: "Non. L'OCR et l'IA locale s'exécutent entièrement sur votre machine. Pour les licences Pro et Cabinet, une option d'extraction via IA Cloud (BYOK) est également activable si vous souhaitez utiliser votre propre clé API (OpenAI/Anthropic/etc.)."
                },
                {
                    q: "Puis-je essayer gratuitement avant d'acheter ?",
                    a: "Oui ! La version gratuite à vie (Free Lite) vous offre 15 extractions et renommages automatiques par mois, la recherche SQLite illimitée et l'export CSV/PDF (avec filigrane) sans limite de durée et sans carte de crédit. Lorsque la période des impôts arrive, passez à Pro (199 $ CAD une seule fois) pour débloquer le traitement par lots illimité."
                },
                {
                    q: "Quels formats de fichiers sont supportés ?",
                    a: "PDF et images (PNG, JPG). Uniquement les factures et reçus. OCR Receipt n'utilise aucun format propriétaire : vos données et fichiers restent entièrement les vôtres. De plus, le renommage automatique vous permet de retrouver vos fichiers directement depuis la recherche de votre système d'exploitation (Spotlight ou Windows Search) sans ouvrir l'application. Les PDF traités voient également leurs métadonnées enrichies pour être lues facilement par d'autres programmes."
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
            licenseNote: "La version Free Lite (0 $) fonctionne immédiatement sans clé. Entrez votre clé d'activation pour débloquer Pro (199 $ CAD) ou Cabinet (399 $ CAD)."
        },
        blog: {
            title: "Actualités & Insights",
            subtitle: "Découvrez nos guides sur la productivité, la sécurité locale et la gestion de vos dépenses.",
            readMore: "Lire l'article",
            posts: [
                {
                    title: "Pourquoi nous avons créé un outil OCR 100 % hors ligne",
                    excerpt: "Vos données financières n'ont rien à faire sur des serveurs tiers. Retour sur la genèse d'OCR Receipt et notre combat pour la souveraineté des données.",
                    date: "24 Juin 2026",
                    readTime: "5 min de lecture",
                    tag: "Confidentialité"
                },
                {
                    title: "Le coût caché de l'accumulation d'abonnements SaaS",
                    excerpt: "Freelances et PME paient des centaines de dollars par an en micro-abonnements. Voici comment les licences perpétuelles et les applications locales vous sauvent la mise.",
                    date: "15 Juin 2026",
                    readTime: "4 min de lecture",
                    tag: "Finance"
                },
                {
                    title: "Enrichissement de métadonnées PDF : la clé de l'automatisation",
                    excerpt: "Comment intégrer des métadonnées structurées directement dans les PDF factures permet aux ordinateurs de les lire sans erreur de saisie manuelle.",
                    date: "08 Juin 2026",
                    readTime: "6 min de lecture",
                    tag: "Technique"
                }
            ]
        }
    },
    en: {
        nav: {
            problem: "Why",
            workflow: "How It Works",
            features: "Features",
            pricing: "Pricing",
            blog: "Blog",
            contact: "Contact",
            cta: "Download"
        },
        hero: {
            subtitle: "Local AI · Zero Cloud · <span class='text-[#333]'>No Subscription</span>",
            title: "No more messy invoices and documents.",
            description: "Our software automatically analyzes, renames, and files all your receipts, invoices, and business documents 100% offline. Keeping your accountant happy and tax audits stress-free.",
            cta1: "Download the App",
            designedFor: "Built for privacy-conscious freelancers and SMBs.",
            bullets: [
                "Local AI data extraction & cleanup",
                "Automatic file renaming & organization",
                "Instant search in your local database",
                "Accountant-ready expense reports"
            ],
            badges: "Local & Cloud AI · No Subscriptions · Perpetual License",
            carouselTabs: ['Import', 'Local AI', 'Search', 'Reports'],
            simulator: {
                title: "PDF Unique",
                subtitle: "Process an individual receipt for data extraction and renaming",
                discard: "Discard",
                save: "Save",
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
                },
                features: [
                    "Local AI data extraction & cleanup",
                    "Automatic file renaming & organization",
                    "Instant search in your secure local database",
                    "Accountant-ready expense reports"
                ],
                tagline: "Built by an independent contractor, for independent contractors, freelancers, and privacy-first SMBs."
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
            rateLabel: "Average Time / Invoice",
            monthLabel: "Receipts / Month",
            timePerReceiptLabel: "Time per Receipt",
            hourlyLabel: "Hourly value of your time",
            wastedHoursMonthLabel: "Wasted time / Month",
            yearLabel: "Time Lost / Year",
            financialLossLabel: "Yearly monetary value lost"
        },
                        howItWorks: {
            subtitle: "How It Works",
            title: "Automated in 4 steps.",
            step1: {
                title: "Drag & Drop",
                desc: "Import your receipt PDFs or images instantly."
            },
            step2: {
                title: "100% Local AI & Rename",
                desc: "Secure offline semantic parsing, local data extraction (with enriched PDF metadata), and smart auto-renaming. Your data is 100% yours, with no proprietary formats."
            },
            step3: {
                title: "Advanced Search",
                desc: "Instant text query across all parsed files indexed in your secure local SQLite database."
            },
            step4: {
                title: "Accountant Reports",
                desc: "Compile structured CSV sheets or complete audit reports with all matching receipt copies appended."
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
                desc: "Generate complete PDF audit reports with embedded copies or export to CSV. PDF metadata is enriched with the extracted data for easy machine parsing—all with zero proprietary format lock-in."
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
            title: "Simple pricing in CAD. <span class='text-brand-dark dark:text-brand'>No subscription.</span>",
            subtitle: "Start free forever with Free Lite, or upgrade once to Pro ($199 CAD) to unlock unlimited batch processing and local GGUF AI.",
            period: "one-time lifetime purchase",
            watermark: "with watermark",
            noWatermark: "no watermark",
            seats: {
                one: "1 seat",
                two: "2 seats (Desktop + Laptop)",
                five: "5-license pack (custom volume on request)"
            },
            limitedBatch: "Single PDF mode (no batch processing)",
            unlimitedBatch: "Unlimited batch processing (Batch Hub)",
            localTiny: "Local AI inference (tiny)",
            localAdvanced: "Advanced local AI (NuExtract GGUF)",
            freeLite: {
                name: "FREE LITE",
                desc: "Forever free for personal or light monthly use",
                btn: "Download Free ($0)",
                features: [
                    "15 AI extractions & auto-renames / month",
                    "Unlimited local SQLite archive search",
                    "Standard CSV export",
                    "Audit PDF report (with watermark)",
                    "Multi-projects & cost-centers",
                    "Multi-workspaces (local DBs)",
                    "1 device (Windows, macOS, or Linux)"
                ],
                disabled: [
                    "Unlimited batch processing (Batch Hub)",
                    "Advanced Local AI (NuExtract GGUF) & Cloud BYOK",
                    "Watermark-free Audit PDF & Excel exports"
                ]
            },
            pro: {
                name: "PRO",
                desc: "For self-employed freelancers, consultants & micro-SMBs",
                btn: "💳 Buy Pro — $199 CAD",
                features: [
                    "Unlimited receipts & automatic file renaming",
                    "Unlimited Batch Processing (drop 50+ PDFs at once)",
                    "100% Local AI (NuExtract GGUF) + Cloud AI Option (BYOK)",
                    "Full Canadian & international tax extraction (GST/HST/QST)",
                    "Clean Audit PDF Reports (no watermark) & Excel/CSV export",
                    "Unlimited business entities, projects & cost-centers",
                    "Lifetime v1.x updates & priority email support",
                    "2 devices included (Desktop + Laptop)"
                ],
                disabled: []
            },
            comptable: {
                name: "FIRM & TEAM",
                desc: "For bookkeepers, accounting firms & multi-partner teams",
                btn: "💳 Buy 5-Seat Pack — $399 CAD",
                features: [
                    "Everything included in the Pro license",
                    "5 perpetual device licenses ($79.80 CAD / seat)",
                    "Unlimited client workspaces & local databases",
                    "1-click Audit PDF dossiers & client .zip packaging",
                    "Standardized naming templates across your firm",
                    "Priority onboarding & dedicated support"
                ],
                disabled: []
            }
        },
        beta: {
            title: "Community & Product Updates",
            subtitle: "Join freelancers, small business owners, and bookkeepers automating their expense workflow 100% offline:",
            bullet1: "Instant access to the Forever-Free Lite version ($0)",
            bullet2: "CRA & Revenu Québec tax-ready naming templates",
            bullet3: "Release notifications for new local AI models",
            bullet4: "Perpetual Pro license at $199 CAD (zero subscription)",
            firstname: "Full Name",
            email: "Email Address",
            profession: "Profession (Freelancer, SMB, Bookkeeper, CPA...)",
            btn: "Join the Community",
            success: "Thank you! You are subscribed to OCR Receipt updates 🎉"
        },
        about: {
            title: "Martin Fournier",
            role: "Independent Contractor & Software Developer",
            location: "Québec, Canada 🇨🇦",
            bio: "As an independent contractor myself, I got tired of losing unbilled weekends renaming PDF invoices, tracking GST/QST taxes, and prepping folders for my accountant—and I refused to pay $35/month forever or upload confidential business receipts to third-party cloud servers. I built OCR Receipt for my own desk first: a fast, 100% offline tool you buy once and own forever.",
            pledge: "From one independent contractor to another: zero subscriptions, zero telemetry, and your files never leave your hard drive."
        },
        faq: {
            title: "Frequently Asked Questions",
            items: [
                {
                    q: "Is my data sent to a server?",
                    a: "No. OCR and local AI run entirely on your computer. For Pro and Firm licenses, an optional Cloud AI (BYOK) mode can also be enabled using your own API key (OpenAI/Anthropic/etc.)."
                },
                {
                    q: "Can I try before buying?",
                    a: "Yes! The Forever-Free Lite version gives you 15 extractions and auto-renames per month, unlimited local SQLite search, and standard CSV/PDF exports with no time limit and no credit card required. When tax season hits and you want to process a folder of 100 PDFs at once, upgrade to Pro ($199 CAD one-time)."
                },
                {
                    q: "What file formats are supported?",
                    a: "PDF and images (PNG, JPG). Receipts and invoices only. We do not use any proprietary file formats: your data and files remain entirely yours to use as you wish. Furthermore, auto-renaming allows you to find any file directly via your host OS search (Spotlight or Windows Search) without opening our software. Processed PDFs also feature enriched metadata for seamless machine parsing."
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
            licenseNote: "Free Lite ($0) works out of the box with no key required. Enter your activation key to unlock Pro ($199 CAD) or Firm ($399 CAD)."
        },
        blog: {
            title: "Latest Insights & Updates",
            subtitle: "Explore our guides on offline productivity, data security, and expense management.",
            readMore: "Read Article",
            posts: [
                {
                    title: "Why We Built a 100% Offline OCR Tool (and Why You Should Care)",
                    excerpt: "Your financial records do not belong on third-party cloud servers. Here is the genesis of OCR Receipt and our commitment to offline-first utilities.",
                    date: "June 24, 2026",
                    readTime: "5 min read",
                    tag: "Privacy"
                },
                {
                    title: "The True Cost of SaaS Subscription Bloat for Freelancers",
                    excerpt: "Freelancers and SMBs spend hundreds of dollars monthly on micro-SaaS fees. Learn why local applications and perpetual licensing are back.",
                    date: "June 15, 2026",
                    readTime: "4 min read",
                    tag: "Finance"
                },
                {
                    title: "Enriching PDF Metadata: The Key to Automated Local Accounting",
                    excerpt: "Understand how embedding structured JSON details inside standard PDFs allows downstream computers to parse invoices with zero errors.",
                    date: "June 8, 2026",
                    readTime: "6 min read",
                    tag: "Technical"
                }
            ]
        }
    }
};
