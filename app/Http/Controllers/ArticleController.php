<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function affichage()
    {
        // $blog = Article::first();
        $blog = Article::all();
        return view("admin.blog.index", compact("blog"));
    }
}
