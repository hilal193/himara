<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\categorieArticle;
use App\Models\CategorieImage;
use App\Models\categorieRoom;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Room;
use App\Models\Service;
use App\Models\Tag;
use App\Models\tagRoom;
use App\Models\Team;
use Database\Seeders\CategoryImageSeeder;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class FrontController extends Controller
{
    public function room()
    {
        return view("pages.room");
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

    public function tagCategorie($id)
    {

        $tagiD = Tag::find($id);
        $blog = $tagiD->articles;
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
        $categoryImage = CategorieImage::all();
        return view("pages.gallery",compact("imageAll","categoryImage"));
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

        $team = Team::where("fonction_id","!=",1)->latest()->take(8)->get();
        $houseKeeper = Team::where("fonction_id",1)->first();



        return view("pages.staff",compact("team","houseKeeper"));
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
        $serviceAll = Service::all();

       return view("home" ,compact("serviceAll"));
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



     public function blogPost($id)
     {
        $blog = Article::find($id);
        // dd($projetTout);
        $comment = Comment::all();

        return view("pages.blogpost",compact("blog","comment"));
     }

    // public function service()
    // {
    //     $serviceAll = Service::all();
    //     return view("home" ,compact("serviceAll"));
    // }

    public function roomslist()
    {
        $roomListAll = Room::all();
        $tagRoom = tagRoom::all();
        $categoryRoom = categorieRoom::all();


        return view("pages.roomslist", compact("roomListAll","tagRoom","categoryRoom"));
    }
    public function tagRooms($id)
    {
        $roomListAll = Room::all();

        $tagRoomsiD = tagRoom::find($id);
        $roomListAll = $tagRoomsiD->rooms;
        // dd(count($room));
        $tagRoom = tagRoom::all();
        // $categoryRoom = categorieRoom::all();
        // $roomsLast = Room::latest()->take(3)->get();

        $categoryRoom = categorieRoom::all();

        // dd($projetTout);
        return view("pages.roomslist",compact("tagRoom","roomListAll","categoryRoom"));
    }

    public function searchRoomCategorie($id)
    {

        $roomListAll = Room::where("category_room_id",$id)->get();
        $categoryRoom = categorieRoom::all();
        // dd($categoryRoomArticle);

        $tagRoom = tagRoom::all();

        return view("pages.roomslist", compact("roomListAll","categoryRoom","tagRoom"));
    }

    // LOGIQUE pour la barre de recherche
    public function RoomSearch(Request $request)
    {

        $data = $request->data;
        $roomListAll= Room::where('titre', 'like', "%$data%")
                ->get();
        $categoryRoom = categorieRoom::all();
        $tagRoom = tagRoom::all();


       return view("pages.roomslist",compact("roomListAll","categoryRoom","tagRoom"));

    }

}
