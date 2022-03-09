<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function affichage()
    {
        $imageAll = Image::all();
        return view("admin.gallery.index",compact("imageAll"));
    }
}
