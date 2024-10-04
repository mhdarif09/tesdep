<?php

namespace App\Http\Controllers;

use App\Models\Article; // Assuming you have an Article model
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the hot article and articles
        $hot_article = Article::orderBy('viewcount', 'desc')->first(); // Get the most viewed article
        $articles = Article::latest()->take(5)->get(); // Fetch the latest 5 articles

        // Pass them to the view
        return view('welcome', compact('hot_article', 'articles'));
    }
}

