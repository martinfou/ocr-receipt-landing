<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OCR Receipt Blog — Receipt OCR, Privacy, and Productivity</title>
    <meta name="description" content="Articles about receipt OCR, data privacy, local AI, and accounting productivity. Tips for freelancers, CPAs, and small businesses.">
    <meta property="og:title" content="OCR Receipt Blog">
    <meta property="og:description" content="Articles about receipt OCR, data privacy, and productivity.">
    <meta property="og:url" content="https://ocrreceipt.com/blog">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ocrreceipt.com/og-image.png">
    <link rel="canonical" href="https://ocrreceipt.com/blog">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=EB+Garamond:wght@400;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { background: var(--color-surface); color: var(--color-text); font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3 { font-family: 'EB Garamond', serif; font-weight: 600; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 1.5rem; }
        .article { background: var(--color-surface-light); border: 1px solid var(--color-border); border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 1.5rem; display: block; color: inherit; text-decoration: none; transition: border-color 0.15s; }
        .article:hover { border-color: var(--color-brand); }
        .article .date { font-size: 0.8rem; color: var(--color-brand); margin-bottom: 0.5rem; }
        .article h2 { font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--color-text); }
        .article p { color: var(--color-text-muted); font-size: 0.9rem; }
    </style>
</head>
<body>
    <div id="app">
        <nav style="display:flex;align-items:center;justify-content:space-between;padding:1rem 1.5rem;border-bottom:1px solid var(--color-border);">
            <a href="/" style="font-family:'EB Garamond',serif;font-weight:600;font-size:1.1rem;color:var(--color-text);text-decoration:none;">OCR Receipt</a>
            <div><a href="/" style="color:var(--color-text-muted);text-decoration:none;font-size:0.875rem;">Home</a></div>
        </nav>

        <div style="text-align:center;padding:4rem 1.5rem 2rem;">
            <h1 style="font-size:2.2rem;margin-bottom:0.5rem;">OCR Receipt Blog</h1>
            <p style="color:var(--color-text-muted);">Tips, comparisons, and insights for receipt OCR and expense management.</p>
        </div>

        <div class="container">
            @foreach($articles as $a)
            <a href="/blog/{{ $a['slug'] }}" class="article">
                <div class="date">{{ $a['date'] }}</div>
                <h2>{{ $a['title'] }}</h2>
                <p>{{ $a['excerpt'] }}</p>
            </a>
            @endforeach
        </div>

        <footer style="border-top:1px solid var(--color-border);padding:2rem;text-align:center;color:var(--color-text-muted);font-size:0.8rem;">
            <p>OCR Receipt — Québec, Canada 🇨🇦</p>
        </footer>
    </div>
</body>
</html>
