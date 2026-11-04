@extends('layouts.blog')

@section('title'){{ $article['title'] }} — {{ ($locale ?? 'en') === 'fr' ? 'Blogue OCR Receipt' : 'OCR Receipt Blog' }}@endsection
@section('meta_description'){{ $article['excerpt'] }}@endsection

@section('og_meta')
    <meta property="og:title" content="{{ $article['title'] }} — {{ ($locale ?? 'en') === 'fr' ? 'Blogue OCR Receipt' : 'OCR Receipt Blog' }}">
    <meta property="og:description" content="{{ $article['excerpt'] }}">
    <meta property="og:url" content="https://ocrreceipt.com/{{ ($locale ?? 'en') === 'fr' ? 'fr/blog/' : 'blog/' }}{{ $article['slug'] }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://ocrreceipt.com/og-image.png">
    <link rel="canonical" href="https://ocrreceipt.com/{{ ($locale ?? 'en') === 'fr' ? 'fr/blog/' : 'blog/' }}{{ $article['slug'] }}">
@endsection

@section('content')
    <style>
        .article-content h2 {
            font-family: var(--font-serif);
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--color-text);
            margin-top: 2.5rem;
            margin-bottom: 1rem;
            line-height: 1.25;
            text-wrap: balance;
        }
        .article-content h3 {
            font-family: var(--font-serif);
            font-size: 1.35rem;
            font-weight: 600;
            color: var(--color-text);
            margin-top: 2rem;
            margin-bottom: 0.75rem;
            line-height: 1.3;
            text-wrap: balance;
        }
        .article-content p {
            margin-bottom: 1.25rem;
            font-size: 1.05rem;
            line-height: 1.75;
            color: var(--color-text);
        }
        .article-content ul {
            margin-bottom: 1.25rem;
            padding-left: 1.5rem;
            list-style-type: disc;
        }
        .article-content ol {
            margin-bottom: 1.25rem;
            padding-left: 1.5rem;
            list-style-type: decimal;
        }
        .article-content li {
            margin-bottom: 0.5rem;
            line-height: 1.6;
            color: var(--color-text);
        }
        .article-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 2.5rem 0;
            font-family: var(--font-mono);
            font-size: 0.85rem;
            border: 1px solid var(--color-border);
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .article-content th, .article-content td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid var(--color-border);
            text-align: left;
        }
        .article-content th {
            background-color: var(--color-surface-light);
            color: var(--color-text-muted);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
        }
        .article-content td {
            color: var(--color-text);
        }
        .article-content strong {
            color: var(--color-text);
            font-weight: 600;
        }
        .article-content a {
            color: var(--color-brand-dark);
            text-decoration: underline;
            font-weight: 500;
        }
        .article-content a:hover {
            color: var(--color-brand);
        }
    </style>

    <div class="max-w-3xl mx-auto px-6 pb-20">
        <!-- Back Navigation -->
        <div class="mb-8 pt-8">
            <a href="{{ ($locale ?? 'en') === 'fr' ? '/fr/blog' : '/blog' }}" class="inline-flex items-center gap-1.5 text-xs font-mono font-medium text-text-muted hover:text-brand transition-colors uppercase tracking-wider no-underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 stroke-current fill-none" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                {{ ($locale ?? 'en') === 'fr' ? 'Retour au blog' : 'Back to Blog' }}
            </a>
        </div>

        <!-- Article Header -->
        <header class="mb-12">
            <div class="flex items-center gap-2 text-xs font-mono text-brand font-medium uppercase tracking-wider mb-3">
                <span>{{ $article['date'] }}</span>
                <span class="text-border">•</span>
                <span>{{ $article['read_time'] }}</span>
            </div>
            <h1 class="font-serif font-extrabold text-3xl md:text-4xl lg:text-5xl text-text leading-tight mb-4 text-wrap-balance">
                {{ $article['title'] }}
            </h1>
            <p class="text-text-muted text-lg md:text-xl font-sans leading-relaxed border-l-4 border-brand/30 pl-4 py-1 mt-6 italic">
                {{ $article['excerpt'] }}
            </p>
        </header>

        <!-- Article Body -->
        <article class="article-content font-sans">
            {!! $article['body'] !!}
        </article>

        <!-- CTA Separation -->
        <hr class="border-t border-border my-12">

        <!-- Call to Action Banner -->
        <div class="text-center p-8 bg-surface-light border border-border rounded-xl shadow-sm">
            <h3 class="font-serif font-bold text-2xl text-text mb-2">
                {{ ($locale ?? 'en') === 'fr' ? 'Prêt à abandonner le cloud ?' : 'Ready to ditch the cloud?' }}
            </h3>
            <p class="text-text-muted text-sm md:text-base max-w-lg mx-auto mb-6">
                {{ ($locale ?? 'en') === 'fr' ? 'Traitez vos reçus localement avec une grande précision, en toute confidentialité et sans frais récurrents.' : 'Process your receipts locally with high accuracy, privacy, and zero recurring fees.' }}
            </p>
            <a href="{{ ($locale ?? 'en') === 'fr' ? '/fr#pricing' : '/#download' }}" class="btn-brand px-6 py-3 no-underline shadow-sm">
                {{ ($locale ?? 'en') === 'fr' ? 'Essayer OCR Receipt gratuitement →' : 'Try OCR Receipt Free →' }}
            </a>
        </div>
    </div>
@endsection
