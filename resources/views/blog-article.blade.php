<!DOCTYPE html>
<html lang="en" class="dark">
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
    <link rel="canonical" href="https://ocrreceipt.com/blog/{{ $article['slug'] }}">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #0a0a0a; color: #e5e5e5; line-height: 1.8; -webkit-font-smoothing: antialiased; }
        h1, h2, h3, h4 { font-family: 'Playfair Display', serif; font-weight: 600; line-height: 1.3; }
        h1 { font-size: 2rem; margin-bottom: 1rem; }
        h2 { font-size: 1.4rem; margin-top: 2rem; margin-bottom: 0.75rem; color: #f5f5f5; }
        h3 { font-size: 1.1rem; margin-top: 1.5rem; margin-bottom: 0.5rem; }
        p { margin-bottom: 1rem; }
        .container { max-width: 720px; margin: 0 auto; padding: 0 1.5rem; }
        a { color: #60A5FA; }
        nav { display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; border-bottom: 1px solid #3e3e3a; }
        nav .logo { font-family: 'Playfair Display', serif; font-weight: 600; font-size: 1.1rem; color: #e5e5e5; text-decoration: none; }
        nav a { color: #a1a09a; font-size: 0.875rem; text-decoration: none; }
        .post-header { padding: 3rem 1.5rem 1rem; text-align: center; }
        .post-header .meta { color: #60A5FA; font-size: 0.85rem; margin-bottom: 0.5rem; }
        .post-header p { color: #a1a09a; font-size: 0.95rem; }
        .content { padding: 1rem 1.5rem 3rem; }
        .content ul, .content ol { margin-bottom: 1rem; padding-left: 1.5rem; color: #d4d4d4; }
        .content li { margin-bottom: 0.3rem; }
        .content strong { color: #f5f5f5; }
        .content table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; font-size: 0.85rem; }
        .content th, .content td { padding: 0.6rem 0.8rem; text-align: left; border-bottom: 1px solid #3e3e3a; }
        .content th { background: #161615; color: #a1a09a; font-weight: 500; font-size: 0.75rem; text-transform: uppercase; }
        .content .btn { display: inline-block; padding: 0.7rem 1.5rem; border-radius: 0.5rem; background: #3B82F6; color: #fff; font-weight: 600; text-decoration: none; margin: 1rem 0; font-size: 0.9rem; }
        .content .btn:hover { background: #60A5FA; }
        hr { border: none; border-top: 1px solid #3e3e3a; margin: 2rem 0; }
        footer { border-top: 1px solid #3e3e3a; padding: 2rem; text-align: center; color: #a1a09a; font-size: 0.8rem; }
        @media (max-width: 640px) { h1 { font-size: 1.6rem; } }
    </style>
</head>
<body>
<nav>
    <a href="/" class="logo">OCR Receipt</a>
    <div><a href="/blog">Blog</a></div>
</nav>

<div class="post-header">
    <div class="meta">{{ $article['date'] }} · {{ $article['read_time'] }}</div>
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['excerpt'] }}</p>
</div>

<div class="content container">
    {!! $article['body'] !!}

    <hr>
    <p style="text-align:center;"><a href="/" class="btn">Try OCR Receipt Free →</a></p>
</div>

<footer>
    <p>OCR Receipt — Québec, Canada 🇨🇦 · <a href="/blog">Blog</a></p>
</footer>
</body>
</html>
