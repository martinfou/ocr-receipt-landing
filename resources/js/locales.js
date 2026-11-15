// Landing page strings, EN and FR. Every visible string, aria-label and
// live-region sentence on the pay-once landing lives here.
// French strings must be reviewed by Martin before launch (EXPERIENCE.md, Launch Blockers).
// `{name}` placeholders are filled by $t(key, { name: value }).
export const locales = {
    en: {
        skip: "Skip to content",
        founderBar: {
            label: "Founder price:",
            text: "Pro is $149 CAD, once, for the first 100 buyers."
        },
        nav: {
            label: "Main",
            home: "ocr-receipt, home",
            homeHref: "/",
            how: "How it works",
            math: "The math",
            pricing: "Pricing",
            faq: "FAQ",
            menu: "Menu",
            darkTheme: "Dark theme",
            lang: { label: "Français", href: "/fr", code: "fr" }
        },
        download: {
            label: "Download free",
            chooserLabel: "Other platforms",
            macos: "macOS (.dmg)",
            windows: "Windows (.exe)",
            linux: "Linux (.AppImage)"
        },
        hero: {
            kicker: "For freelancers and solo contractors",
            titleLine1: "Stop renting",
            titleLine2: "your receipts.",
            pitch: "Made by a solopreneur, for solopreneurs. Pay once. Your receipts stay on your computer, and the AI that reads them runs there too.",
            proCta: "Pro: pay once",
            microDesktop: "Free forever, not a trial. No email, no card. 15 receipts a month on the house.",
            microPhone: "No account needed.",
            runsOn: "Runs on",
            trustLabel: "What you don't need",
            trust: ["No subscription", "No account", "No upload"],
            peekAlt: "OCR Receipt batch screen",
            confession: "I was paying half a dozen apps, up to $100 a month, just to run a one-person business. So I built my way out. — Martin",
            receipt: {
                header: "Card statement",
                example: "Example",
                lines: [
                    ["RECEIPT SCANNER APP", "$12.00/mo"],
                    ["EXPENSE ADD-ON", "$9.00/mo"],
                    ["CLOUD DOC STORAGE", "$4.99/mo"],
                    ["\"PRICE ADJUSTMENT\"", "+$3.00/mo"]
                ],
                proName: "OCR RECEIPT PRO",
                proAmount: "$199.00",
                nextCharge: "NEXT CHARGE",
                never: "NEVER",
                cancelled: "CANCELLED",
                paidOnce: "PAID ONCE",
                caption: "An example card statement with four monthly subscriptions crossed out and stamped cancelled, and OCR Receipt Pro paid once at $199 with the next charge listed as never."
            },
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
                }
            }
        },
        tour: {
            title: "A shoebox of receipts in. A file your accountant likes out.",
            sub: "You're the whole company. Tax season shouldn't eat your Sunday.",
            tablistLabel: "Tour steps",
            stepPrefix: "Step {n}:",
            note: "Real screenshots of the app.",
            steps: [
                {
                    kicker: "STEP 1 · DROP",
                    title: "Drop a whole folder",
                    body: "Drag in PDFs or photos. The batch queues up and runs on its own.",
                    caption: "Batches: five bills in the queue, scanned on your machine.",
                    alt: "Batch screen: five Québec bills queued, two finished, one in progress"
                },
                {
                    kicker: "STEP 2 · CHECK",
                    title: "Check what the AI read",
                    body: "The receipt on the left, vendor, date, total and category on the right. Fix anything in one click.",
                    caption: "Single PDF: load, OCR, extract, rename, archive.",
                    alt: "Single PDF screen: progress bar from Load File to Save, PDF viewer on the left, extracted fields on the right"
                },
                {
                    kicker: "STEP 3 · FILE",
                    title: "Find anything later",
                    body: "Every receipt is renamed and archived in a folder you choose, searchable by vendor, project or category.",
                    caption: "Library: your archive, stored on your own disk.",
                    alt: "Library screen: archived receipts searchable by vendor, date, total, project and category"
                },
                {
                    kicker: "AT A GLANCE",
                    title: "See what is left to do",
                    body: "How many receipts are done, what is waiting for review, and whether the scanner is ready.",
                    caption: "Dashboard: totals, queue and scanner status.",
                    alt: "Dashboard screen: total receipts, validation queue and OCR status at a glance"
                }
            ]
        },
        calc: {
            kicker: "The subscription bleed",
            title: "Subscriptions are a tax on the self-employed.",
            intro: "Pick what you pay now for receipt software and how long you plan to keep working for yourself.",
            monthlyLegend: "You pay per month",
            yearsLegend: "For how long",
            perMonthSr: "CAD per month",
            year: "1 year",
            years: "{n} years",
            footnote: "Amounts in CAD, before tax. Monthly prices are examples.",
            rentingFor: "Renting receipt software for {years}",
            subscription: "Subscription",
            pro: "OCR Receipt Pro",
            keepBefore: "You keep ",
            keepAfter: ". Pro pays for itself in month {month}.",
            cheaper: "Over a short stretch, renting costs less. Pro pays for itself in month {month}, then every month after is yours.",
            keepPlain: "You keep {amount}. Pro pays for itself in month {month}.",
            free: "Or stay on the free plan forever and pay nothing at all.",
            live: "Renting for {years}: {total} CAD. Pro: {pro} once. {verdict}"
        },
        founder: {
            photoLabel: "Photo placeholder: Martin at his home desk",
            photoPlaceholder: "[YOUR PHOTO]",
            stats: "1 developer · 0 investors · 0 subscriptions",
            kicker: "A note from the maker",
            title: "Why I refuse to charge you monthly",
            paragraphs: [
                "I run a one-person business. A while ago I added up every app billing me each month just to keep the lights on, and I didn't like the number.",
                "So I built the receipt tool I wanted: it does the job, lives on my computer, and I paid for it once. You get the same deal.",
                "I have no investors asking me to raise prices every year, so I won't. Your receipts sit in a folder on your own disk. If I ever stop making OCR Receipt, the app you bought keeps working and your files stay yours."
            ],
            signature: "Martin Fournier, maker of OCR Receipt, Québec",
            supportStrong: "No sales team.",
            supportText: " I'm the sales, the dev and the support. Questions go straight to me."
        },
        pricing: {
            title: "Two prices. Neither one repeats.",
            intro: "A typical receipt-app subscription costs $1,176 to $2,201 CAD over five years. Here's ours.",
            compareLabel: "Compare:",
            free: {
                name: "Free",
                price: "$0",
                tagline: "Free forever, not a free trial.",
                features: ["15 receipts a month", "Local AI, works offline", "CSV export"],
                platformsAll: "macOS, Windows and Linux",
                platformsNoLinux: "macOS and Windows",
                noEmailDesktop: "No email, no card",
                noEmailPhone: "No account needed"
            },
            pro: {
                name: "Pro",
                paidOnce: "PAID ONCE",
                wasSr: "Was ",
                regular: "$199",
                regularSuffix: " regular price",
                nowSr: "now ",
                price: "$149",
                priceSuffix: "CAD, once",
                founderLine: "Founder price for the first 100 buyers.",
                after: "After that, $199. That's the price. That's it.",
                features: [
                    "Unlimited receipts and batch processing",
                    "Local AI models on your machine",
                    "PDF and CSV reports by project",
                    "2 devices",
                    "2 years of updates included; your version works forever after"
                ],
                upgrade: "Outgrew 15 receipts? Congrats, business is good.",
                buy: "Buy Pro for $149"
            },
            firmBefore: "Running a bookkeeping firm? ",
            firmLink: "See the Firm licence",
            firmAfter: ".",
            cancelButton: "Looking for the cancel button?",
            cancelReveal: "There isn't one. You own it."
        },
        checkout: {
            titlePro: "Buy OCR Receipt Pro",
            titleFirm: "Firm licence",
            intro: "Enter your email address. Your licence key is sent there after purchase.",
            emailLabel: "Email address",
            close: "Close",
            cancel: "Cancel",
            submit: "Continue to payment",
            redirecting: "Redirecting…",
            error: "Something went wrong. Try again, or write to support@ocrreceipt.com.",
            emailRequired: "Enter your email address, for example name@example.com."
        },
        faq: {
            title: "The questions you'd ask a one-person company",
            items: [
                {
                    q: "What happens if you get hit by a bus?",
                    a: "The app runs on your computer and your receipts are ordinary files in a folder you choose. Your licence is activated offline and never checks in with a server. If I stopped making ocr-receipt tomorrow, the version you own would keep working, and your files would stay yours."
                },
                {
                    q: "How do updates work if I only pay once?",
                    a: "Every update released in your first 2 years is included. After that, the version you have keeps working forever. If you want newer versions, you can renew for 2 more years of updates for $79 CAD. It's optional, and nobody bills you automatically."
                },
                {
                    q: "Where does my data go?",
                    a: "Nowhere. The AI reads your receipts on your own machine. There is no account to create and nothing to upload, and your receipts aren't training anyone's AI."
                },
                {
                    q: "What if Pro isn't for me?",
                    a: "Email <a href=\"mailto:support@ocrreceipt.com\">support@ocrreceipt.com</a> within 30 days and I'll refund you, no questions asked. I read every message myself."
                },
                {
                    q: "Who is this not for?",
                    a: "Teams that need everyone syncing receipts to the same cloud workspace. OCR Receipt is built for a team of one."
                }
            ]
        },
        closing: {
            line1: "Own your tools.",
            line2: "Own your business.",
            subAll: "Get it sorted before April 30. One licence works on macOS, Windows and Linux.",
            subNoLinux: "Get it sorted before April 30. One licence works on macOS and Windows.",
            micro: "No account needed. Upgrade to Pro whenever you want."
        },
        footer: {
            madeIn: "Fait au Québec par un travailleur autonome, pour les travailleurs autonomes.",
            madeInLang: "fr",
            noPopup: "No popup. No newsletter. You're welcome.",
            linksLabel: "Footer",
            blog: "Blog",
            blogHref: "/blog"
        }
    },
    fr: {
        skip: "Aller au contenu",
        founderBar: {
            label: "Prix fondateur :",
            text: "Pro coûte 149 $ CA, une seule fois, pour les 100 premiers acheteurs."
        },
        nav: {
            label: "Principal",
            home: "ocr-receipt, accueil",
            homeHref: "/fr",
            how: "Comment ça marche",
            math: "Le calcul",
            pricing: "Tarifs",
            faq: "FAQ",
            menu: "Menu",
            darkTheme: "Thème sombre",
            lang: { label: "English", href: "/", code: "en" }
        },
        download: {
            label: "Télécharger gratuitement",
            chooserLabel: "Autres plateformes",
            macos: "macOS (.dmg)",
            windows: "Windows (.exe)",
            linux: "Linux (.AppImage)"
        },
        hero: {
            kicker: "Pour les pigistes et les travailleurs autonomes",
            titleLine1: "Arrêtez de louer",
            titleLine2: "vos reçus.",
            pitch: "Fait par un travailleur autonome, pour les travailleurs autonomes. Payez une fois. Vos reçus restent sur votre ordinateur, et l'IA qui les lit y roule aussi.",
            proCta: "Pro : payez une fois",
            microDesktop: "Gratuit pour toujours, pas un essai. Pas de courriel, pas de carte. 15 reçus par mois, c'est offert.",
            microPhone: "Aucun compte requis.",
            runsOn: "Fonctionne sur",
            trustLabel: "Ce dont vous n'avez pas besoin",
            trust: ["Aucun abonnement", "Aucun compte", "Aucun téléversement"],
            peekAlt: "Écran des lots d'OCR Receipt",
            confession: "Je payais une demi-douzaine d'applis, jusqu'à 100 $ par mois, juste pour faire rouler une entreprise d'une personne. Alors j'ai bâti ma porte de sortie. — Martin",
            receipt: {
                header: "Relevé de carte",
                example: "Exemple",
                lines: [
                    ["APPLI DE NUMÉRISATION", "12,00 $/mois"],
                    ["MODULE DÉPENSES", "9,00 $/mois"],
                    ["STOCKAGE INFONUAGIQUE", "4,99 $/mois"],
                    ["« AJUSTEMENT DE PRIX »", "+3,00 $/mois"]
                ],
                proName: "OCR RECEIPT PRO",
                proAmount: "199,00 $",
                nextCharge: "PROCHAIN PRÉLÈVEMENT",
                never: "JAMAIS",
                cancelled: "ANNULÉ",
                paidOnce: "PAYÉ UNE FOIS",
                caption: "Un exemple de relevé de carte : quatre abonnements mensuels rayés et estampillés « annulé », et OCR Receipt Pro payé une seule fois à 199 $, avec « jamais » comme prochain prélèvement."
            },
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
                }
            }
        },
        tour: {
            title: "Une boîte à chaussures de reçus en entrée. Un fichier que votre comptable aime en sortie.",
            sub: "Vous êtes toute l'entreprise. La saison des impôts ne devrait pas vous voler votre dimanche.",
            tablistLabel: "Étapes de la visite",
            stepPrefix: "Étape {n} :",
            note: "Vraies captures d'écran de l'application.",
            steps: [
                {
                    kicker: "ÉTAPE 1 · DÉPOSER",
                    title: "Déposez un dossier complet",
                    body: "Glissez des PDF ou des photos. Le lot se met en file et roule tout seul.",
                    caption: "Lots : cinq factures en file, numérisées sur votre machine.",
                    alt: "Écran des lots : cinq factures québécoises en file, deux terminées, une en cours"
                },
                {
                    kicker: "ÉTAPE 2 · VÉRIFIER",
                    title: "Vérifiez ce que l'IA a lu",
                    body: "Le reçu à gauche; fournisseur, date, total et catégorie à droite. Corrigez n'importe quoi en un clic.",
                    caption: "PDF unique : charger, numériser, extraire, renommer, archiver.",
                    alt: "Écran PDF unique : barre de progression de Charger à Enregistrer, visionneuse PDF à gauche, champs extraits à droite"
                },
                {
                    kicker: "ÉTAPE 3 · CLASSER",
                    title: "Retrouvez tout plus tard",
                    body: "Chaque reçu est renommé et archivé dans le dossier de votre choix, et se retrouve par fournisseur, projet ou catégorie.",
                    caption: "Bibliothèque : vos archives, sur votre propre disque.",
                    alt: "Écran Bibliothèque : reçus archivés, recherchables par fournisseur, date, total, projet et catégorie"
                },
                {
                    kicker: "EN UN COUP D'ŒIL",
                    title: "Voyez ce qu'il reste à faire",
                    body: "Combien de reçus sont traités, lesquels attendent une vérification, et si le numériseur est prêt.",
                    caption: "Tableau de bord : totaux, file d'attente et état du numériseur.",
                    alt: "Écran Tableau de bord : total des reçus, file de validation et état de l'OCR en un coup d'œil"
                }
            ]
        },
        calc: {
            kicker: "L'hémorragie des abonnements",
            title: "Les abonnements sont une taxe sur les travailleurs autonomes.",
            intro: "Choisissez ce que vous payez maintenant pour un logiciel de reçus et combien de temps vous comptez travailler à votre compte.",
            monthlyLegend: "Vous payez par mois",
            yearsLegend: "Pendant combien de temps",
            perMonthSr: "CA par mois",
            year: "1 an",
            years: "{n} ans",
            footnote: "Montants en dollars canadiens, avant taxes. Les prix mensuels sont des exemples.",
            rentingFor: "Louer un logiciel de reçus pendant {years}",
            subscription: "Abonnement",
            pro: "OCR Receipt Pro",
            keepBefore: "Vous gardez ",
            keepAfter: ". Pro est rentabilisé au mois {month}.",
            cheaper: "Sur une courte période, louer coûte moins cher. Pro est rentabilisé au mois {month}; chaque mois suivant est à vous.",
            keepPlain: "Vous gardez {amount}. Pro est rentabilisé au mois {month}.",
            free: "Ou restez sur le forfait gratuit pour toujours, sans rien payer.",
            live: "Location pendant {years} : {total} CA. Pro : {pro}, une seule fois. {verdict}"
        },
        founder: {
            photoLabel: "Photo à venir : Martin à son bureau, à la maison",
            photoPlaceholder: "[YOUR PHOTO]",
            stats: "1 développeur · 0 investisseur · 0 abonnement",
            kicker: "Un mot du créateur",
            title: "Pourquoi je refuse de vous facturer chaque mois",
            paragraphs: [
                "J'ai une entreprise d'une personne. Un jour, j'ai additionné toutes les applis qui me facturaient chaque mois juste pour garder les lumières allumées, et le total ne m'a pas plu.",
                "Alors j'ai bâti l'outil de reçus que je voulais : il fait le travail, vit sur mon ordinateur, et je l'ai payé une seule fois. Vous avez droit à la même entente.",
                "Je n'ai pas d'investisseurs qui me demandent d'augmenter les prix chaque année, alors je ne le ferai pas. Vos reçus dorment dans un dossier sur votre propre disque. Si j'arrête un jour de faire OCR Receipt, l'application que vous avez achetée continue de fonctionner et vos fichiers restent à vous."
            ],
            signature: "Martin Fournier, créateur d'OCR Receipt, Québec",
            supportStrong: "Pas d'équipe de vente.",
            supportText: " Je suis la vente, le développement et le soutien. Vos questions arrivent directement chez moi."
        },
        pricing: {
            title: "Deux prix. Aucun ne se répète.",
            intro: "Un abonnement typique à une appli de reçus coûte de 1 176 $ à 2 201 $ CA sur cinq ans. Voici le nôtre.",
            compareLabel: "Comparer :",
            free: {
                name: "Gratuit",
                price: "0 $",
                tagline: "Gratuit pour toujours, pas un essai gratuit.",
                features: ["15 reçus par mois", "IA locale, fonctionne hors ligne", "Export CSV"],
                platformsAll: "macOS, Windows et Linux",
                platformsNoLinux: "macOS et Windows",
                noEmailDesktop: "Pas de courriel, pas de carte",
                noEmailPhone: "Aucun compte requis"
            },
            pro: {
                name: "Pro",
                paidOnce: "PAYÉ UNE FOIS",
                wasSr: "Avant ",
                regular: "199 $",
                regularSuffix: " prix régulier",
                nowSr: "maintenant ",
                price: "149 $",
                priceSuffix: "CA, une fois",
                founderLine: "Prix fondateur pour les 100 premiers acheteurs.",
                after: "Ensuite, 199 $. C'est le prix. Point final.",
                features: [
                    "Reçus illimités et traitement par lots",
                    "Modèles d'IA locaux sur votre machine",
                    "Rapports PDF et CSV par projet",
                    "2 appareils",
                    "2 ans de mises à jour inclus; votre version fonctionne pour toujours ensuite"
                ],
                upgrade: "Plus de 15 reçus par mois? Félicitations, les affaires vont bien.",
                buy: "Acheter Pro pour 149 $"
            },
            firmBefore: "Vous gérez un cabinet de tenue de livres? ",
            firmLink: "Voir la licence Cabinet",
            firmAfter: ".",
            cancelButton: "Vous cherchez le bouton d'annulation?",
            cancelReveal: "Il n'y en a pas. C'est à vous."
        },
        checkout: {
            titlePro: "Acheter OCR Receipt Pro",
            titleFirm: "Licence Cabinet",
            intro: "Entrez votre adresse courriel. Votre clé de licence y sera envoyée après l'achat.",
            emailLabel: "Adresse courriel",
            close: "Fermer",
            cancel: "Annuler",
            submit: "Continuer vers le paiement",
            redirecting: "Redirection…",
            error: "Une erreur est survenue. Réessayez, ou écrivez à support@ocrreceipt.com.",
            emailRequired: "Entrez votre adresse courriel, par exemple nom@exemple.com."
        },
        faq: {
            title: "Les questions qu'on pose à une entreprise d'une personne",
            items: [
                {
                    q: "Qu'arrive-t-il si vous passez sous un autobus?",
                    a: "L'application roule sur votre ordinateur et vos reçus sont des fichiers ordinaires, dans le dossier de votre choix. Votre licence s'active hors ligne et ne communique jamais avec un serveur. Si j'arrêtais de faire ocr-receipt demain, la version que vous possédez continuerait de fonctionner, et vos fichiers resteraient à vous."
                },
                {
                    q: "Comment fonctionnent les mises à jour si je paie une seule fois?",
                    a: "Toutes les mises à jour publiées pendant vos 2 premières années sont incluses. Ensuite, votre version continue de fonctionner pour toujours. Si vous voulez les nouvelles versions, vous pouvez renouveler 2 autres années de mises à jour pour 79 $ CA. C'est facultatif, et personne ne vous facture automatiquement."
                },
                {
                    q: "Où vont mes données?",
                    a: "Nulle part. L'IA lit vos reçus sur votre propre machine. Il n'y a aucun compte à créer, rien à téléverser, et vos reçus n'entraînent l'IA de personne."
                },
                {
                    q: "Et si Pro ne me convient pas?",
                    a: "Écrivez à <a href=\"mailto:support@ocrreceipt.com\">support@ocrreceipt.com</a> dans les 30 jours et je vous rembourse, sans poser de questions. Je lis chaque message moi-même."
                },
                {
                    q: "Pour qui ce n'est pas fait?",
                    a: "Les équipes qui ont besoin que tout le monde synchronise ses reçus dans le même espace infonuagique. OCR Receipt est fait pour une équipe d'une personne."
                }
            ]
        },
        closing: {
            line1: "Possédez vos outils.",
            line2: "Possédez votre entreprise.",
            subAll: "Réglez ça avant le 30 avril. Une seule licence fonctionne sur macOS, Windows et Linux.",
            subNoLinux: "Réglez ça avant le 30 avril. Une seule licence fonctionne sur macOS et Windows.",
            micro: "Aucun compte requis. Passez à Pro quand vous voulez."
        },
        footer: {
            madeIn: "Fait au Québec par un travailleur autonome, pour les travailleurs autonomes.",
            madeInLang: "",
            noPopup: "Pas de fenêtre surgissante. Pas d'infolettre. De rien.",
            linksLabel: "Pied de page",
            blog: "Blogue",
            blogHref: "/fr/blog"
        }
    }
};
