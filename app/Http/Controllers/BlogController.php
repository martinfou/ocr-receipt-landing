<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($locale = 'en')
    {
        $articles = $this->getArticles($locale);
        
        $translation_url_en = '/blog';
        $translation_url_fr = '/fr/blog';

        return view('blog', [
            'articles' => $articles,
            'locale' => $locale,
            'translation_url_en' => $translation_url_en,
            'translation_url_fr' => $translation_url_fr,
        ]);
    }

    public function show($slug, $locale = 'en')
    {
        $articles = $this->getArticles($locale);
        
        $article = null;
        foreach ($articles as $a) {
            if ($a['slug'] === $slug) {
                $article = $a;
                break;
            }
        }

        if (!$article) {
            abort(404);
        }

        // Resolve reciprocal translation url
        $translation_slug = $article['translation_slug'] ?? null;
        
        if ($locale === 'en') {
            $translation_url_en = '/blog/' . $slug;
            $translation_url_fr = $translation_slug ? '/fr/blog/' . $translation_slug : '/fr/blog';
        } else {
            $translation_url_en = $translation_slug ? '/blog/' . $translation_slug : '/blog';
            $translation_url_fr = '/fr/blog/' . $slug;
        }

        return view('blog-article', [
            'article' => $article,
            'locale' => $locale,
            'translation_url_en' => $translation_url_en,
            'translation_url_fr' => $translation_url_fr,
        ]);
    }

    private function getArticles($locale)
    {
        $file = resource_path("content/blog_{$locale}.php");
        if (!file_exists($file)) {
            $file = resource_path("content/blog_en.php");
        }
        return require $file;
    }
}
