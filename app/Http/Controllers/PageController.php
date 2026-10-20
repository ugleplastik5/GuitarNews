<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Models\Category;

class PageController extends Controller
{
    public function home()
    {
        $texts = Text::with(['category', 'author'])->latest()->get();
        return view('main', ['texts' => $texts]);
    }

    public function category()
    {
        $categories = Category::with('texts.author')->get();
        return view('category', ['categories' => $categories]);
    }

    public function journalist()
    {
        $categories = Category::all();
        return view('journalist', ['categories' => $categories]);
    }

    public function article(Text $text)
    {
        return view('article', ['text' => $text]);
    }
}