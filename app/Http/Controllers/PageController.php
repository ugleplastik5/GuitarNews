<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class PageController extends Controller
{
    public function home()
    {
        $articles = Article::with(['category', 'author'])->latest()->get();
        return view('main', ['articles' => $articles]);
    }

    public function category()
    {
        $categories = Category::with('articles.author')->get();
        return view('category', ['categories' => $categories]);
    }

    public function journalist()
    {
        $categories = Category::all();
        return view('journalist', ['categories' => $categories]);
    }

    public function article(Article $article)
    {
        return view('article', ['article' => $article]);
    }
}