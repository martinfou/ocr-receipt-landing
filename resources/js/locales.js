export const locales = {
    fr: {
        nav: {
            features: "Fonctionnalités",
            pricing: "Tarifs",
            contact: "Contact",
            cta: "Accès anticipé"
        },
        hero: {
            subtitle: "IA Locale · Zéro Cloud · <span class='text-[#e5e5e5]'>Zéro Abonnement</span>",
            title: "Vos factures structurées. <span class='text-[#60A5FA]'>100% localement.</span>",
            cta1: "📥 Obtenir l'accès anticipé",
            designedFor: "Pour freelances et PME soucieux de leur confidentialité.",
            badges: "IA locale & cloud · Zéro abonnement · Licence perpétuelle",
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
            item1: "Ouvrir le PDF → Lire le montant → Recopier dans Excel → Ranger le fichier",
            item2: "Répéter ce process 50 à 100 fois par mois",
            item3: "Corriger manuellement les erreurs de saisie",
            item4: "Perdre son temps à classer et catégoriser les fournisseurs",
            summary1: "1 facture = 5 min",
            summary2: "50 factures = 4h / mois",
            summary3: "48 heures par an perdues à jamais."
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
                title: "3. Exportez en CSV",
                desc: "Données structurées prêtes à l'emploi."
            }
        },
        features: {
            title: "Gérez vos reçus sans effort",
            subtitle: "Du fichier brut aux données structurées en quelques secondes. Pas d'internet requis. Pas d'abonnement.",
            ai: {
                title: "Correction par IA",
                desc: "Correction intelligente des erreurs OCR et catégorisation automatique des fournisseurs."
            },
            batch: {
                title: "Traitement par Lots",
                desc: "Glissez 50 reçus à la fois. L'application les traite en arrière-plan en arrière-plan sans ralentissement."
            },
            privacy: {
                title: "Confidentialité Totale",
                desc: "Vos données restent sur votre disque. Pas de cloud, pas de serveurs, pas de fuite."
            },
            match: {
                title: "Fuzzy Matching",
                desc: "Association intelligente des fournisseurs habituels sans configuration requise."
            },
            export: {
                title: "Export Structuré",
                desc: "Un clic pour exporter vos reçus au format CSV compatible avec Excel, Google Sheets, QuickBooks et Xero."
            },
            desktop: {
                title: "Application Native",
                desc: "App rapide pour Windows, macOS, Linux. Pas d'abonnement mensuel, licence perpétuelle."
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
        }
    },
    en: {
        nav: {
            features: "Features",
            pricing: "Pricing",
            contact: "Contact",
            cta: "Early Access"
        },
        hero: {
            subtitle: "Local AI · Zero Cloud · <span class='text-[#e5e5e5]'>No Subscription</span>",
            title: "Your receipts parsed. <span class='text-[#60A5FA]'>100% offline.</span>",
            cta1: "📥 Get Early Access",
            designedFor: "Built for privacy-conscious freelancers and SMBs.",
            badges: "Local & Cloud AI · No Subscriptions · Perpetual License",
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
            item1: "Open PDF → Read total → Copy to Excel → Move file",
            item2: "Repeat 50 to 100 times every single month",
            item3: "Manually correct typos and parsing errors",
            item4: "Waste hours organizing vendors and folders",
            summary1: "1 receipt = 5 min",
            summary2: "50 receipts = 4 hours / month",
            summary3: "48 hours a year wasted forever."
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
                title: "3. CSV Export",
                desc: "Download structured, validated expense data."
            }
        },
        features: {
            title: "Manage your expenses effortlessly",
            subtitle: "From raw receipts to clean data in seconds. No internet required. No subscriptions.",
            ai: {
                title: "AI-Powered Correction",
                desc: "Automatic OCR typo cleaning and intelligent supplier categorization."
            },
            batch: {
                title: "Batch Processing",
                desc: "Drop 50 receipts at once. The app processes them in the background without UI lag."
            },
            privacy: {
                title: "100% Private",
                desc: "Your financial data stays on your drive. No servers, no accounts, no leak risk."
            },
            match: {
                title: "Vendor Matching",
                desc: "Intelligent vendor association and normalization with zero configuration."
            },
            export: {
                title: "Excel-Ready Export",
                desc: "One-click export to CSV compatible with Excel, Sheets, and QuickBooks."
            },
            desktop: {
                title: "Native Desktop App",
                desc: "Fast app for Windows, macOS, and Linux. No subscriptions, perpetual license."
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
        }
    }
};
