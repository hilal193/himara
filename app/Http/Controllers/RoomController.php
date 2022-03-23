<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function affichage()
    {
        $room = Room::all();
        return view("admin.room.index", compact("room"));
    }
}
