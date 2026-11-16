{{-- Shared shell for the pay-once landing page, served at / (landing.blade.php)
     and /fr (fr.blade.php). The Vue app reads data-lang on #app. --}}
@php
    $isFr = $lang === 'fr';
@endphp
<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Applies the theme before first paint: stored choice, else the system preference. --}}
    <script>
        (function () {
            var saved = null;
            try { saved = localStorage.getItem('theme'); } catch (e) {}
            var dark = saved === 'dark' || (saved !== 'light' && window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
            document.documentElement.classList.toggle('dark', dark);
        })();
    </script>

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="{{ $isFr ? 'fr_CA' : 'en_CA' }}">
    <meta property="og:locale:alternate" content="{{ $isFr ? 'en_CA' : 'fr_CA' }}">
    <meta property="og:site_name" content="OCR Receipt">
    <meta property="og:image" content="https://ocrreceipt.com/og-landing-{{ $lang }}.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="https://ocrreceipt.com/og-landing-{{ $lang }}.png">

    <link rel="canonical" href="{{ $canonical }}">
    <link rel="alternate" hreflang="en" href="https://ocrreceipt.com/">
    <link rel="alternate" hreflang="fr" href="https://ocrreceipt.com/fr">
    <link rel="alternate" hreflang="x-default" href="https://ocrreceipt.com/">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="alternate" type="text/plain" title="LLM representation" href="/llms.txt">

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "SoftwareApplication",
      "name": "OCR Receipt",
      "operatingSystem": "Windows, macOS, Linux",
      "applicationCategory": "BusinessApplication",
      "inLanguage": "{{ $isFr ? 'fr-CA' : 'en-CA' }}",
      "offers": {
        "@@type": "AggregateOffer",
        "priceCurrency": "CAD",
        "lowPrice": "0",
        "highPrice": "199"
      },
      "description": @json($description, JSON_HEX_TAG | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
    }
    </script>

    {{-- FAQ rich results, generated from the same FAQ strings at build time (scripts/prerender.mjs). --}}
    @if (is_file(resource_path("prerendered/faq-{$lang}.json")))
    <script type="application/ld+json">
{!! str_replace('</', '<\/', file_get_contents(resource_path("prerendered/faq-{$lang}.json"))) !!}
    </script>
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <noscript>
        <div class="lp" style="max-width:1200px;margin:0 auto;padding:48px 24px;display:flex;flex-direction:column;gap:20px">
            <p class="lp-display-hero">{{ $isFr ? 'Vos reçus, votre ordi, votre logiciel.' : 'Your receipts, your computer, your software.' }}</p>
            <p class="lp-lede">{{ $isFr
                ? 'Gratuit pour toujours, pas un essai. Aucun compte requis. Pro : 149 $ CA, une seule fois, pour les 100 premiers acheteurs.'
                : 'Free forever, not a trial. No account needed. Pro: $149 CAD, once, for the first 100 buyers.' }}</p>
            <ul aria-label="{{ $isFr ? 'Télécharger' : 'Download' }}" style="display:flex;flex-wrap:wrap;gap:16px;margin:0;padding:0;list-style:none">
                <li><a href="/dl/macos" class="lp-label">{{ $isFr ? 'Télécharger pour macOS (.dmg)' : 'Download for macOS (.dmg)' }}</a></li>
                <li><a href="/dl/windows" class="lp-label">{{ $isFr ? 'Télécharger pour Windows (.exe)' : 'Download for Windows (.exe)' }}</a></li>
                <li><a href="/dl/linux" class="lp-label">{{ $isFr ? 'Télécharger pour Linux (.AppImage)' : 'Download for Linux (.AppImage)' }}</a></li>
            </ul>
            <p class="lp-body">{{ $isFr ? 'Des questions? Écrivez-moi :' : 'Questions? Write to me:' }} <a href="mailto:support@ocrreceipt.com">support@ocrreceipt.com</a></p>
        </div>
    </noscript>
    {{-- The full page is prerendered at build time (scripts/prerender.mjs) so crawlers and
         link previews see the text; the Vue app hydrates it. Falls back to client rendering. --}}
    @if (is_file(resource_path("prerendered/landing-{$lang}.html")))
    <div id="app" data-lang="{{ $lang }}" data-prerendered>{!! file_get_contents(resource_path("prerendered/landing-{$lang}.html")) !!}</div>
    @else
    <div id="app" data-lang="{{ $lang }}"></div>
    @endif
</body>
</html>
