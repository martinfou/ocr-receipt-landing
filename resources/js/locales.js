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
            labelFor: "Download free for {os}",
            forSr: "Download for",
            chooserLabel: "Other platforms",
            macos: "macOS (.dmg)",
            windows: "Windows (.exe)",
            linux: "Linux (.AppImage)"
        },
        hero: {
            kicker: "Local AI for freelancers and solo contractors",
            titleLine1: "Your receipts, your computer,",
            titleLine2: "your software.",
            pitch: "Your own AI, running on your own computer. It's a small model built for one job: reading the vendor, date and total on your receipts and documents. That's why it needs no cloud, and why you only pay for it once.",
            proCta: "Pro: pay once",
            microDesktop: "The free version stays free. It isn't a trial, and you don't need an email or a card. Up to 15 receipts a month.",
            microPhone: "No account needed.",
            runsOn: "Runs on",
            trustLabel: "What you don't need",
            trust: ["No subscription", "No account", "Nothing uploaded"],
            peekAlt: "OCR Receipt batch screen",
            sealTitle: "Local AI",
            sealText: "Runs on your computer",
            aiTitle: "The AI runs on your computer, not in someone's cloud",
            ai: [
                { title: "On your machine", body: "Your receipts are read right on your computer. Nothing is uploaded, ever." },
                { title: "Small and focused", body: "A compact model trained for one job: pulling the vendor, date and total out of receipts and documents." },
                { title: "Works offline", body: "No internet needed to read your receipts. Your files never leave your disk." }
            ],
            confession: "At one point I was paying for half a dozen apps, up to $100 a month, just to keep a one-person business running. This app is how I got out of that. — Martin",
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
            }
        },
        tour: {
            title: "Drop in your receipts. Get back a file your accountant can use.",
            sub: "When you're the whole company, tax season shouldn't take your whole weekend.",
            more: "Not just receipts: invoices, bank statements, quotes, tax documents and business cards are read, renamed and filed the same way.",
            tablistLabel: "Tour steps",
            stepPrefix: "Step {n}:",
            note: "Real screenshots of the app, with sample receipts.",
            steps: [
                {
                    kicker: "STEP 1 · DROP",
                    title: "Drop a whole folder",
                    body: "Drag in PDFs or photos. They line up in a queue and get read one after another.",
                    caption: "Batches: five bills in the queue, scanned on your machine.",
                    alt: "Batch screen: five receipts read and ready to rename, with vendor, date, total and the new file name"
                },
                {
                    kicker: "STEP 2 · CHECK",
                    title: "Check what the AI read",
                    body: "The receipt is on the left, and what the app read is on the right: vendor, date, total and category. Fix anything in one click.",
                    caption: "Single PDF: load, OCR, extract, rename, archive.",
                    alt: "Single PDF screen: a Gordon Food Service invoice on the left, the vendor, date and total the app read on the right"
                },
                {
                    kicker: "STEP 3 · FILE",
                    title: "Find anything later",
                    body: "Each receipt is renamed and filed in a folder you choose. Search by vendor, project or category.",
                    caption: "Library: your archive, stored on your own disk.",
                    alt: "Library screen: a search for \"home\" finds the Home Depot receipt among ten archived receipts"
                },
                {
                    kicker: "AT A GLANCE",
                    title: "See what is left to do",
                    body: "How many receipts are done, which ones need a look, and whether the reader is ready.",
                    caption: "Dashboard: totals, queue and scanner status.",
                    alt: "Dashboard screen: total receipts, validation queue and OCR status at a glance"
                }
            ]
        },
        calc: {
            kicker: "What subscriptions cost",
            title: "Stop paying subscriptions that line Big Tech's pockets.",
            intro: "Pick roughly what you pay now for receipt software, and how long you expect to keep working for yourself.",
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
            free: "Or keep using the free version and pay nothing.",
            live: "Renting for {years}: {total} CAD. Pro: {pro} once. {verdict}"
        },
        founder: {
            photoLabel: "Photo placeholder: Martin at his home desk",
            photoPlaceholder: "[YOUR PHOTO]",
            stats: "1 developer · 0 investors · 0 subscriptions",
            kicker: "From the person who built it",
            title: "Why there's no monthly fee",
            paragraphs: [
                "I run a one-person business. A while back I added up every app that billed me each month, and the total was hard to justify.",
                "So I built the receipt tool I wanted. It does one job well, it runs on my computer, and I paid for it once. You get the same deal.",
                "There are no investors pushing me to raise prices every year. Your receipts stay in a folder on your own disk, and if I ever stop working on OCR Receipt, the copy you bought keeps working."
            ],
            signature: "Martin Fournier, maker of OCR Receipt, Québec",
            supportStrong: "No sales team.",
            supportText: " When you write, you reach me. I handle sales, development and support."
        },
        pricing: {
            title: "Two plans. Neither is a subscription.",
            intro: "Over five years, a typical receipt-app subscription adds up to $1,176 to $2,201 CAD. Here is what OCR Receipt costs.",
            compareLabel: "Compare:",
            free: {
                name: "Free",
                price: "$0",
                tagline: "Free for good. It isn't a trial.",
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
                after: "After that, the regular price is $199.",
                features: [
                    "Unlimited receipts and batch processing",
                    "Local AI models on your machine",
                    "PDF and CSV reports by project",
                    "2 devices",
                    "2 years of updates included; your version works forever after"
                ],
                upgrade: "Need more than 15 receipts a month? That's a good sign for your business.",
                buy: "Buy Pro for $149"
            },
            shareText: "Can't pay? You can still help: tell a freelancer you know about OCR Receipt.",
            shareButton: "Send the link to a freelancer",
            shareCopied: "Link copied. Thanks for passing it on.",
            shareTitle: "OCR Receipt: receipt software you pay for once",
            fairUse: "We're all solo business owners here: if money's tight, take the free version, and once it starts paying off, going Pro helps one of us grow too.",
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
            title: "Questions you might ask a one-person company",
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
                    q: "How can an AI run on my computer?",
                    a: "Because it's small and does one thing. The big chatbots know a little about everything and need a data centre. The model in OCR Receipt is about half a billion parameters, and it only learned to pull fields like vendor, date, total and invoice number out of documents. That fits on an ordinary computer, works offline, and nothing leaves your machine."
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
            subAll: "Use the computer you already own and make it work for you. One licence covers macOS, Windows and Linux.",
            subNoLinux: "Use the computer you already own and make it work for you. One licence covers macOS and Windows.",
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
            labelFor: "Télécharger gratuitement pour {os}",
            forSr: "Télécharger pour",
            chooserLabel: "Autres plateformes",
            macos: "macOS (.dmg)",
            windows: "Windows (.exe)",
            linux: "Linux (.AppImage)"
        },
        hero: {
            kicker: "IA locale pour les pigistes et les travailleurs autonomes",
            titleLine1: "Vos reçus, votre ordi,",
            titleLine2: "votre logiciel.",
            pitch: "Votre propre IA, qui roule sur votre propre ordi. C'est un petit modèle conçu pour une seule tâche : lire le fournisseur, la date et le total sur vos reçus et vos documents. C'est pour ça qu'il n'a pas besoin du nuage, et que vous le payez une seule fois.",
            proCta: "Pro : un seul paiement",
            microDesktop: "La version gratuite reste gratuite. Ce n'est pas un essai, et vous n'avez besoin ni de courriel ni de carte. Jusqu'à 15 reçus par mois.",
            microPhone: "Aucun compte à créer.",
            runsOn: "Fonctionne sur",
            trustLabel: "Ce dont vous n'avez pas besoin",
            trust: ["Aucun abonnement", "Aucun compte", "Rien n'est téléversé"],
            peekAlt: "Écran des lots d'OCR Receipt",
            sealTitle: "IA locale",
            sealText: "Roule sur votre ordi",
            aiTitle: "L'IA roule sur votre ordi, pas dans le nuage de quelqu'un d'autre",
            ai: [
                { title: "Sur votre machine", body: "Vos reçus sont lus directement sur votre ordinateur. Rien n'est téléversé, jamais." },
                { title: "Petite et spécialisée", body: "Un modèle compact entraîné pour une seule tâche : extraire le fournisseur, la date et le total de vos reçus et documents." },
                { title: "Fonctionne hors ligne", body: "Pas besoin d'Internet pour lire vos reçus. Vos fichiers ne quittent jamais votre disque." }
            ],
            confession: "À un moment donné, je payais une demi-douzaine d'applis, jusqu'à 100 $ par mois, juste pour faire rouler mon entreprise. C'est avec cette appli-là que je m'en suis sorti. — Martin",
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
            }
        },
        tour: {
            title: "Vous déposez vos reçus. Vous obtenez un fichier prêt pour votre comptable.",
            sub: "Quand vous êtes toute l'entreprise, les impôts ne devraient pas vous prendre la fin de semaine au complet.",
            more: "Pas seulement des reçus : factures, relevés bancaires, soumissions, documents fiscaux et cartes d'affaires sont lus, renommés et classés de la même façon.",
            tablistLabel: "Étapes de la visite",
            stepPrefix: "Étape {n} :",
            note: "Vraies captures d'écran de l'application, avec des reçus d'exemple.",
            steps: [
                {
                    kicker: "ÉTAPE 1 · DÉPOSER",
                    title: "Déposez un dossier complet",
                    body: "Glissez vos PDF ou vos photos. Ils sont mis en file et lus un après l'autre.",
                    caption: "Lots : cinq factures en file, numérisées sur votre machine.",
                    alt: "Écran des lots : cinq reçus lus et prêts à renommer, avec fournisseur, date, total et nouveau nom de fichier"
                },
                {
                    kicker: "ÉTAPE 2 · VÉRIFIER",
                    title: "Vérifiez ce que l'IA a lu",
                    body: "Le reçu est à gauche, et ce que l'appli a lu est à droite : fournisseur, date, total et catégorie. Un clic suffit pour corriger.",
                    caption: "PDF unique : charger, numériser, extraire, renommer, archiver.",
                    alt: "Écran PDF unique : une facture Gordon Food Service à gauche, le fournisseur, la date et le total lus par l'application à droite"
                },
                {
                    kicker: "ÉTAPE 3 · CLASSER",
                    title: "Retrouvez tout facilement",
                    body: "Chaque reçu est renommé et classé dans le dossier de votre choix. Cherchez par fournisseur, projet ou catégorie.",
                    caption: "Bibliothèque : vos archives, sur votre propre disque.",
                    alt: "Écran Bibliothèque : une recherche « home » trouve le reçu Home Depot parmi dix reçus archivés"
                },
                {
                    kicker: "EN UN COUP D'ŒIL",
                    title: "Voyez ce qui reste à faire",
                    body: "Combien de reçus sont traités, lesquels sont à vérifier, et si le lecteur est prêt.",
                    caption: "Tableau de bord : totaux, file d'attente et état du numériseur.",
                    alt: "Écran Tableau de bord : total des reçus, file de validation et état de l'OCR en un coup d'œil"
                }
            ]
        },
        calc: {
            kicker: "Ce que coûtent les abonnements",
            title: "Arrêtez de payer des abonnements qui engraissent les géants de la techno.",
            intro: "Choisissez à peu près ce que vous payez en ce moment pour un logiciel de reçus, et combien de temps vous comptez rester à votre compte.",
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
            free: "Ou gardez la version gratuite, sans rien payer.",
            live: "Location pendant {years} : {total} CA. Pro : {pro}, une seule fois. {verdict}"
        },
        founder: {
            photoLabel: "Photo à venir : Martin à son bureau, à la maison",
            photoPlaceholder: "[YOUR PHOTO]",
            stats: "1 développeur · 0 investisseur · 0 abonnement",
            kicker: "Un mot de celui qui l'a fait",
            title: "Pourquoi il n'y a pas de frais mensuels",
            paragraphs: [
                "J'ai une entreprise d'une personne. Un jour, j'ai additionné toutes les applis qui me facturaient chaque mois, et le total était difficile à justifier.",
                "Alors j'ai créé l'outil de reçus que je voulais. Il fait une chose et la fait bien, il fonctionne sur mon ordi, et je l'ai payé une fois. Vous avez droit à la même entente.",
                "Aucun investisseur ne me pousse à monter les prix chaque année. Vos reçus restent dans un dossier sur votre propre disque, et si j'arrête un jour de travailler sur OCR Receipt, la copie que vous avez achetée continue de fonctionner."
            ],
            signature: "Martin Fournier, créateur d'OCR Receipt, Québec",
            supportStrong: "Pas d'équipe de vente.",
            supportText: " Quand vous écrivez, c'est moi qui réponds. Je m'occupe des ventes, du développement et du soutien."
        },
        pricing: {
            title: "Deux forfaits. Aucun abonnement.",
            intro: "Sur cinq ans, un abonnement à une appli de reçus coûte habituellement de 1 176 $ à 2 201 $ CA. Voici le prix d'OCR Receipt.",
            compareLabel: "Comparer :",
            free: {
                name: "Gratuit",
                price: "0 $",
                tagline: "Gratuit pour de bon. Ce n'est pas un essai.",
                features: ["15 reçus par mois", "IA locale, fonctionne hors ligne", "Export CSV"],
                platformsAll: "macOS, Windows et Linux",
                platformsNoLinux: "macOS et Windows",
                noEmailDesktop: "Ni courriel ni carte",
                noEmailPhone: "Aucun compte à créer"
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
                after: "Ensuite, le prix régulier est de 199 $.",
                features: [
                    "Reçus illimités et traitement par lots",
                    "Modèles d'IA locaux sur votre machine",
                    "Rapports PDF et CSV par projet",
                    "2 appareils",
                    "2 ans de mises à jour inclus; votre version fonctionne pour toujours ensuite"
                ],
                upgrade: "Besoin de plus de 15 reçus par mois? C'est bon signe pour vos affaires.",
                buy: "Acheter Pro pour 149 $"
            },
            shareText: "Pas les moyens? Vous pouvez quand même aider : parlez d'OCR Receipt à un pigiste que vous connaissez.",
            shareButton: "Envoyer le lien à un pigiste",
            shareCopied: "Lien copié. Merci de le faire circuler.",
            shareTitle: "OCR Receipt : un logiciel de reçus qu'on paie une seule fois",
            fairUse: "On est tous des travailleurs autonomes ici : si l'argent est serré, prenez la version gratuite, et quand elle commence à vous rapporter, passer à Pro aide l'un des nôtres à grandir aussi.",
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
            title: "Les questions à poser à une entreprise d'une personne",
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
                    q: "Comment une IA peut-elle rouler sur mon ordi?",
                    a: "Parce qu'elle est petite et qu'elle fait une seule chose. Les grands robots conversationnels savent un peu de tout et ont besoin d'un centre de données. Le modèle d'OCR Receipt compte environ un demi-milliard de paramètres, et il a seulement appris à extraire des champs comme le fournisseur, la date, le total et le numéro de facture. Ça tient sur un ordinateur ordinaire, ça fonctionne hors ligne, et rien ne sort de votre machine."
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
            line1: "Vos outils vous appartiennent.",
            line2: "Votre entreprise aussi.",
            subAll: "Servez-vous de l'ordi que vous avez déjà et faites-le travailler pour vous. Une seule licence pour macOS, Windows et Linux.",
            subNoLinux: "Servez-vous de l'ordi que vous avez déjà et faites-le travailler pour vous. Une seule licence pour macOS et Windows.",
            micro: "Aucun compte à créer. Passez à Pro quand vous voulez."
        },
        footer: {
            madeIn: "Fait au Québec par un travailleur autonome, pour les travailleurs autonomes.",
            madeInLang: "",
            noPopup: "Pas de fenêtre surgissante ni d'infolettre. Bonne journée!",
            linksLabel: "Pied de page",
            blog: "Blogue",
            blogHref: "/fr/blog"
        }
    }
};
