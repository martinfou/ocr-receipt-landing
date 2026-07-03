<!DOCTYPE html>
<html lang="en" class="dark">
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
    <link rel="canonical" href="https://ocrreceipt.com/blog">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #0a0a0a; color: #e5e5e5; line-height: 1.6; -webkit-font-smoothing: antialiased; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; font-weight: 600; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 1.5rem; }
        a { color: #60A5FA; text-decoration: none; }
        a:hover { color: #3B82F6; }
        nav { display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; border-bottom: 1px solid #3e3e3a; }
        nav .logo { font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #e5e5e5; text-decoration: none; font-weight: 600; }
        nav a { color: #a1a09a; font-size: 0.875rem; }
        .header { text-align: center; padding: 4rem 1.5rem 2rem; }
        .header h1 { font-size: 2.2rem; margin-bottom: 0.5rem; }
        .header p { color: #a1a09a; }
        .article { background: #161615; border: 1px solid #3e3e3a; border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 1.5rem; transition: border-color 0.15s; display: block; color: inherit; text-decoration: none; }
        .article:hover { border-color: #60A5FA; }
        .article .date { font-size: 0.8rem; color: #60A5FA; margin-bottom: 0.5rem; }
        .article h2 { font-size: 1.3rem; margin-bottom: 0.5rem; color: #e5e5e5; }
        .article p { color: #a1a09a; font-size: 0.9rem; }
        footer { border-top: 1px solid #3e3e3a; padding: 2rem; text-align: center; color: #a1a09a; font-size: 0.8rem; }
        @media (max-width: 640px) { .header h1 { font-size: 1.8rem; } }
    </style>
</head>
<body>
<nav>
    <a href="/" class="logo">OCR Receipt</a>
    <div>
        <a href="/">Home</a>
    </div>
</nav>

<div class="header">
    <h1>OCR Receipt Blog</h1>
    <p>Tips, comparisons, and insights for receipt OCR and expense management.</p>
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

<footer>
    <p>OCR Receipt — Québec, Canada 🇨🇦</p>
</footer>
</body>
</html>
