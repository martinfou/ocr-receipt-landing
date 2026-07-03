<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>

    <title>OCR Receipt — Extract receipt data without the cloud</title>
    <meta name="description" content="Offline-first receipt OCR app with local AI. Extract vendor, amount, date, and category from PDF receipts. No subscription. Windows, Mac & Linux.">

    <meta property="og:title" content="OCR Receipt — Extract Receipt Data Without the Cloud">
    <meta property="og:description" content="Offline-first receipt OCR app with local AI. No subscription. Your data stays on your machine.">
    <meta property="og:url" content="https://ocrreceipt.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ocrreceipt.com/og-image.png">

    <link rel="canonical" href="https://ocrreceipt.com/">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="alternate" type="text/plain" title="LLM representation" href="/llms.txt">

    <!-- Schema.org JSON-LD Metadata -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "SoftwareApplication",
      "name": "OCR Receipt",
      "operatingSystem": "Windows, macOS, Linux",
      "applicationCategory": "BusinessApplication",
      "offers": {
        "@@type": "AggregateOffer",
        "priceCurrency": "USD",
        "lowPrice": "0",
        "highPrice": "399"
      },
      "description": "100% Offline Local AI & OCR receipt parser for Windows, macOS, and Linux. No subscriptions, perpetual license."
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app"></div>
</body>
</html>
