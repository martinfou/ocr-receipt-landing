@extends('layouts.blog')

@section('title')
    @if(($locale ?? 'en') === 'fr')
        Blogue OCR Receipt — OCR, Confidentialité et Productivité
    @else
        OCR Receipt Blog — Receipt OCR, Privacy, and Productivity
    @endif
@endsection

@section('meta_description')
    @if(($locale ?? 'en') === 'fr')
        Articles sur l'OCR de reçus, la confidentialité des données, l'IA locale et la productivité comptable.
    @else
        Articles about receipt OCR, data privacy, local AI, and accounting productivity. Tips for freelancers, CPAs, and small businesses.
    @endif
@endsection

@section('og_meta')
    <meta property="og:title" content="{{ ($locale ?? 'en') === 'fr' ? 'Blogue OCR Receipt' : 'OCR Receipt Blog' }}">
    <meta property="og:description" content="{{ ($locale ?? 'en') === 'fr' ? 'Articles sur l\'OCR de reçus, la confidentialité et la productivité.' : 'Articles about receipt OCR, data privacy, and productivity.' }}">
    <meta property="og:url" content="{{ ($locale ?? 'en') === 'fr' ? 'https://ocrreceipt.com/fr/blog' : 'https://ocrreceipt.com/blog' }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ocrreceipt.com/og-image.png">
    <link rel="canonical" href="{{ ($locale ?? 'en') === 'fr' ? 'https://ocrreceipt.com/fr/blog' : 'https://ocrreceipt.com/blog' }}">
@endsection

@section('content')
    <!-- Blog Hero Header -->
    <div class="text-center py-16 px-6 max-w-3xl mx-auto">
        <h1 class="font-serif font-extrabold text-4xl md:text-5xl lg:text-6xl text-text tracking-tight mb-4 text-wrap-balance">
            {{ ($locale ?? 'en') === 'fr' ? 'Blogue OCR Receipt' : 'OCR Receipt Blog' }}
        </h1>
        <p class="text-text-muted text-lg md:text-xl font-sans max-w-2xl mx-auto leading-relaxed">
            {{ ($locale ?? 'en') === 'fr' ? 'Conseils, comparatifs et analyses techniques sur la lecture locale de reçus, la comptabilité et les logiciels hors ligne.' : 'Tips, comparisons, and technical insights for local receipt parsing, expense management, and offline-first software.' }}
        </p>
    </div>

    <!-- Blog Posts Container -->
    <div class="max-w-3xl mx-auto px-6 pb-20">
        <div class="flex flex-col gap-8">
            @foreach($articles as $a)
            <a href="{{ ($locale ?? 'en') === 'fr' ? '/fr/blog/' . $a['slug'] : '/blog/' . $a['slug'] }}" class="group block card hover:border-brand/40 shadow-sm hover:shadow-md transition-all duration-200 no-underline">
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2 text-xs font-mono text-brand font-medium uppercase tracking-wider">
                        <span>{{ $a['date'] }}</span>
                        <span class="text-border">•</span>
                        <span>{{ $a['read_time'] }}</span>
                    </div>
                    <h2 class="font-serif font-bold text-2xl text-text group-hover:text-brand-dark transition-colors duration-150 leading-tight">
                        {{ $a['title'] }}
                    </h2>
                    <p class="text-text-muted text-sm md:text-base leading-relaxed mt-1">
                        {{ $a['excerpt'] }}
                    </p>
                    <div class="flex items-center gap-1.5 text-xs font-semibold text-brand-dark group-hover:text-brand transition-colors mt-2 font-mono uppercase tracking-wider">
                        <span>{{ ($locale ?? 'en') === 'fr' ? 'Lire l\'article' : 'Read Article' }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 stroke-current fill-none transform group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
