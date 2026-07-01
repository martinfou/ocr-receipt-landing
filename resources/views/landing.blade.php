<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OCR Receipt — Extract receipt data without the cloud</title>
    <meta name="description" content="Offline-first receipt OCR app with local AI. Extract vendor, amount, date, and category from PDF receipts. No subscription. Windows, Mac & Linux.">
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app"></div>
</body>
</html>
