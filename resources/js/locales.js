export const locales = {
    fr: {
        nav: {
            features: "Fonctionnalités",
            pricing: "Tarifs",
            contact: "Contact",
            cta: "⬇️ Accès anticipé"
        },
        hero: {
            subtitle: "L'OCR qui comprend ce qu'il lit.",
            title: "Importez vos factures PDF.<br/>L'IA extrait, corrige et classe.<br/>Zéro configuration. Zéro nuage.",
            cta1: "📥 Obtenir l'accès anticipé",
            cta2: "Voir le code source ↗",
            designedFor: "Conçu pour les freelances et PME soucieux de la confidentialité.",
            badges: "IA locale & cloud · 100% local · Licence perpétuelle",
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
            title: "Vous aussi vous faites ça ?",
            item1: "❌ Ouvrir un PDF → Lire le montant → Copier dans Excel → Ranger le fichier",
            item2: "❌ Recommencer 30, 50, 100 fois par mois",
            item3: "❌ Corriger les erreurs de copie à la main",
            item4: "❌ Perdre 10-15 minutes par semaine à catégoriser des fournisseurs",
            summary1: "Une facture = 5 minutes de travail manuel.",
            summary2: "50 factures = 4 heures par mois. 48 heures par an.",
            summary3: "C'est du temps que vous ne récupérerez jamais."
        },
        howItWorks: {
            title: "OCR Receipt le fait en 5 secondes.",
            step1: {
                title: "1️⃣ Glissez votre PDF",
                desc: "Drag & drop. Un par un ou 50 d'un coup."
            },
            step2: {
                title: "2️⃣ L'IA fait le travail",
                desc: "Tesseract OCR extrait le texte. L'IA corrige les erreurs et comprend le contexte. \"Walm@rt\" → \"Walmart\". \"25,99$\" → 25.99. Automatique."
            },
            step3: {
                title: "3️⃣ Résultat prêt",
                desc: "Date, fournisseur, montant, catégorie. Tout est rempli, vérifié, exportable en CSV."
            }
        },
        features: {
            title: "Tout ce dont vous avez besoin pour<br/>gérer vos reçus",
            subtitle: "Du PDF aux données structurées en quelques secondes. Pas d'internet requis. Pas d'abonnement mensuel.",
            ai: {
                title: "🧠 Correction par IA",
                desc: "Correction automatique des erreurs OCR. Catégorisation intelligente des fournisseurs. Pas de règles à configurer, pas de machine learning à entraîner."
            },
            batch: {
                title: "📁 Batch Processing",
                desc: "Glissez 50 factures. L'app les traite en arrière-plan. Pendant ce temps, vous faites ce que vous voulez. Progression en temps réel, zéro freeze."
            },
            privacy: {
                title: "🔒 Confidentialité Totale",
                desc: "100% local. Vos données sensibles restent sur votre disque dur. Pas de cloud, pas de serveur, pas de fuite. Idéal pour les professionnels avec des données clients confidentielles."
            },
            match: {
                title: "🏷️ Matching Fournisseur",
                desc: "L'IA reconnaît vos fournisseurs habituels. \"Bell Canada Inc.\" → \"Bell\". Chaque fois. Plus besoin de mapper manuellement les variations de nom."
            },
            export: {
                title: "📊 Export CSV",
                desc: "Un clic pour exporter toutes vos factures en CSV structuré. Compatible Excel, Google Sheets, QuickBooks, Xero."
            },
            desktop: {
                title: "🎯 Interface Desktop",
                desc: "Une vraie app Windows/Mac/Linux, pas un site web. Pas de latence réseau, pas d'abonnement mensuel qui s'accumule. Vous possédez le logiciel, point."
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
                desc: "Pour un usage personnel ou léger",
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
                desc: "Pour les professionnels exigeants",
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
                desc: "Pour les cabinets et PME",
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
            title: "Accès anticipé — Lancement dans 3 mois",
            subtitle: "Inscrivez-vous pour obtenir :",
            bullet1: "🎯 Accès à la beta fermée (places limitées)",
            bullet2: "💬 Devenir bêta-testeur → licence gratuite à vie",
            bullet3: "📬 Annonce du lancement officiel",
            bullet4: "🎟️ Prix early adopter : 149$ au lieu de 199$",
            firstname: "Prénom",
            email: "Email",
            profession: "Profession (comptable, freelance, PME…)",
            btn: "📥 Je veux l'accès anticipé",
            success: "Merci ! Vous êtes inscrit à l'accès anticipé 🎉"
        },
        about: {
            title: "Développé par Martin Fournier",
            location: "📍 Québec, Canada",
            bio: "Développeur et entrepreneur. OCR Receipt est né d'une frustration personnelle pour automatiser la corvée des factures professionnelles tout en garantissant la confidentialité des données."
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
            cta: "⬇️ Early Access"
        },
        hero: {
            subtitle: "The OCR that understands what it reads.",
            title: "Import your PDF receipts.<br/>The AI extracts, sanitizes, and categorizes.<br/>Zero configuration. Zero cloud.",
            cta1: "📥 Get Early Access",
            cta2: "View Source Code ↗",
            designedFor: "Built for privacy-conscious freelancers and SMBs.",
            badges: "Local & Cloud AI · 100% Local · Perpetual License",
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
            title: "Are you still doing this?",
            item1: "❌ Open PDF → Read total → Copy to Excel → Move file to folder",
            item2: "❌ Repeat 30, 50, 100 times a month",
            item3: "❌ Manually correct typos and parsing errors",
            item4: "❌ Waste 10-15 minutes a week organizing vendor folders",
            summary1: "One receipt = 5 minutes of manual labor.",
            summary2: "50 receipts = 4 hours a month. 48 hours a year.",
            summary3: "This is time you will never get back."
        },
        howItWorks: {
            title: "OCR Receipt does it in 5 seconds.",
            step1: {
                title: "1️⃣ Drag & Drop your PDFs",
                desc: "One by one or 50 at once."
            },
            step2: {
                title: "2️⃣ Let the AI work",
                desc: "Tesseract OCR extracts text. The AI fixes typos and understands context. \"Walm@rt\" → \"Walmart\", \"$25.99\" → 25.99. Automatically."
            },
            step3: {
                title: "3️⃣ Ready to Export",
                desc: "Date, vendor, amount, category. Everything is parsed, checked, and exportable to CSV."
            }
        },
        features: {
            title: "Everything you need to<br/>manage your receipts",
            subtitle: "From PDF to structured data in seconds. No internet required. No monthly fees.",
            ai: {
                title: "🧠 AI-Powered Correction",
                desc: "Automatic OCR error sanitization. Intelligent vendor categorization. No complex rules to configure, no machine learning to train."
            },
            batch: {
                title: "📁 Batch Processing",
                desc: "Drop 50 receipts at once. The app processes them in the background while you work on other tasks. Real-time progress, zero UI freeze."
            },
            privacy: {
                title: "🔒 100% Private & Offline",
                desc: "Your sensitive financial data stays on your hard drive. No cloud, no servers, no leaks. Perfect for professionals handling confidential client files."
            },
            match: {
                title: "🏷️ Vendor Matching",
                desc: "The AI matches your recurring vendors automatically. \"Bell Canada Inc.\" → \"Bell\". Every single time. No need for manual aliases."
            },
            export: {
                title: "📊 Structured Exports",
                desc: "One click to export all receipts to structured CSV. Fully compatible with Excel, Google Sheets, QuickBooks, and Xero."
            },
            desktop: {
                title: "🎯 Native Desktop App",
                desc: "A real app for Windows, Mac, and Linux, not a web wrapper. No network delays, no monthly subscription bloat. You own the software, period."
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
            title: "Early Access — Launching in 3 months",
            subtitle: "Sign up to get:",
            bullet1: "🎯 Closed beta access (limited seats)",
            bullet2: "💬 Become a beta tester → lifetime free license",
            bullet3: "📬 Official launch announcement",
            bullet4: "🎟️ Early adopter price: $149 instead of $199",
            firstname: "First Name",
            email: "Email Address",
            profession: "Profession (CPA, freelancer, SMB…)",
            btn: "📥 Get Early Access",
            success: "Thank you! You have successfully joined the early access list 🎉"
        },
        about: {
            title: "Developed by Martin Fournier",
            location: "📍 Québec, Canada",
            bio: "Developer & entrepreneur. OCR Receipt was born from personal frustration to automate invoice chores while keeping data 100% confidential."
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
