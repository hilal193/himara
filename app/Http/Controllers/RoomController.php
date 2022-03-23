<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\categorieRoom;
use App\Models\tagRoom;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function affichage()
    {
        $room = Room::all();
        return view("admin.room.index", compact("room"));
    }

    public function create()
    {
        $categorieRoom = categorieRoom::all();
        $tag = tagRoom::all();
        return view('admin.room.create',compact("categorieRoom","tag"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'img' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'litMax' => 'required',
            'personMax' => 'required',
        ]);

         // fk
        $room=new Room();
        $room->titre=$request->titre;
        // $categorie->img=$request->img;
        $room->description=$request->description;
        $room->prix=$request->prix;
        $room->litMax=$request->litMax;
        $room->personMax=$request->personMax;


        if ($request->img) {
            $request->file('img')->storePublicly('images/','public');
            $room->img = $request->file('img')->hashName();
        }else{
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/'.$token , $fichierURL);
            $room->img = $token;
        }

        // dd($request);
        $room->category_room_id = $request->category_room_id;

        $room->save();

        $room->tag_Rooms()->attach($request->tagRoom);


        return redirect()->route('room.index')->with('success', 'Une nouvelle categorie ajoutée !');
    }
}
