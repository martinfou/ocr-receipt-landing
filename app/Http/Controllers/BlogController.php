<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = $this->getArticles();
        return view('blog', ['articles' => $articles]);
    }

    public function show($slug)
    {
        $articles = $this->getArticles();
        foreach ($articles as $a) {
            if ($a['slug'] === $slug) {
                return view('blog-article', ['article' => $a]);
            }
        }
        abort(404);
    }

    private function getArticles()
    {
        return require resource_path('content/blog.php');
    }
}
