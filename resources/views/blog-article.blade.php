<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $article['title'] }} — OCR Receipt Blog</title>
    <meta name="description" content="{{ $article['excerpt'] }}">
    <meta property="og:title" content="{{ $article['title'] }} — OCR Receipt Blog">
    <meta property="og:description" content="{{ $article['excerpt'] }}">
    <meta property="og:url" content="https://ocrreceipt.com/blog/{{ $article['slug'] }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://ocrreceipt.com/og-image.png">
    <link rel="canonical" href="https://ocrreceipt.com/blog/{{ $article['slug'] }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=EB+Garamond:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { background: var(--color-surface); color: var(--color-text); font-family: 'Plus Jakarta Sans', sans-serif; line-height: 1.8; }
        h1, h2, h3, h4 { font-family: 'EB Garamond', serif; font-weight: 600; line-height: 1.3; }
        h1 { font-size: 2rem; margin-bottom: 1rem; }
        h2 { font-size: 1.4rem; margin-top: 2rem; margin-bottom: 0.75rem; }
        h3 { font-size: 1.1rem; margin-top: 1.5rem; margin-bottom: 0.5rem; }
        p { margin-bottom: 1rem; }
        .container { max-width: 720px; margin: 0 auto; padding: 0 1.5rem; }
        a { color: var(--color-brand); }
        .content ul, .content ol { margin-bottom: 1rem; padding-left: 1.5rem; }
        .content li { margin-bottom: 0.3rem; }
        .content table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; font-size: 0.85rem; }
        .content th, .content td { padding: 0.6rem 0.8rem; text-align: left; border-bottom: 1px solid var(--color-border); }
        .content th { background: var(--color-surface-light); color: var(--color-text-muted); font-weight: 500; font-size: 0.75rem; text-transform: uppercase; }
        .btn { display: inline-block; padding: 0.7rem 1.5rem; border-radius: 0.5rem; background: var(--color-brand-dark); color: #fff; font-weight: 600; text-decoration: none; margin: 1rem 0; font-size: 0.9rem; }
        .btn:hover { background: var(--color-brand); }
        hr { border: none; border-top: 1px solid var(--color-border); margin: 2rem 0; }
    </style>
</head>
<body>
    <div id="static-app">
        <nav style="display:flex;align-items:center;justify-content:space-between;padding:1rem 1.5rem;border-bottom:1px solid var(--color-border);">
            <a href="/" style="font-family:'EB Garamond',serif;font-weight:600;font-size:1.1rem;color:var(--color-text);text-decoration:none;">OCR Receipt</a>
            <div><a href="/blog" style="color:var(--color-text-muted);text-decoration:none;font-size:0.875rem;">Blog</a></div>
        </nav>

        <div style="padding:3rem 1.5rem 1rem;text-align:center;">
            <div style="color:var(--color-brand);font-size:0.85rem;margin-bottom:0.5rem;">{{ $article['date'] }} · {{ $article['read_time'] }}</div>
            <h1>{{ $article['title'] }}</h1>
            <p style="color:var(--color-text-muted);font-size:0.95rem;">{{ $article['excerpt'] }}</p>
        </div>

        <div class="content container">
            {!! $article['body'] !!}
            <hr>
            <p style="text-align:center;"><a href="/" class="btn">Try OCR Receipt Free →</a></p>
        </div>

        <footer style="border-top:1px solid var(--color-border);padding:2rem;text-align:center;color:var(--color-text-muted);font-size:0.8rem;">
            <p>OCR Receipt — Québec, Canada 🇨🇦 · <a href="/blog">Blog</a></p>
        </footer>
    </div>
</body>
</html>
