<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\categorieArticle;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function room()
    {
        return view("pages.room");
    }

    public function roomslist()
    {
        return view("pages.roomslist");
    }

    public function blog()
    {
        $blog = Article::all();
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();
        return view("pages.blog",compact("blog","tag","categoryArticle","blogLast"));
    }
    public function searchCategorie($id)
    {
        $blog = Article::where("categorie_article_id",$id)->get();
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();


        // dd($projetTout);
        return view("pages.blog",compact("categoryArticle","blog","tag","blogLast"));
    }

    public function page()
    {
        return view("pages.page");
    }

    public function gallery()
    {
        $imageAll = Image::all();
        return view("pages.gallery",compact("imageAll"));
    }


    public function events()
    {
        return view("pages.events");
    }

    public function eventdetails()
    {
        return view("pages.eventdetails");
    }

    public function staff()
    {
        return view("pages.staff");
    }

    public function loading()
    {
        return view("pages.loading");
    }

    public function contact()
    {
        return view("pages.contact");
    }

    public function admin()
    {
        return view("admin.dashboard");
    }

    public function home()
    {
       return view("home");
    }

     // LOGIQUE pour la barre de recherche
     public function search(Request $request)
     {

         $data = $request->data;
         $blog= Article::where('title', 'like', "%$data%")
                 ->get();

        // $blog = Article::all();
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();

        return view("pages.blog",compact("blog","tag","categoryArticle","blogLast"));

     }


}
