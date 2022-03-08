<?php

namespace App\Http\Controllers;

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
        return view("pages.blog");
    }

    public function page()
    {
        return view("pages.page");
    }

    public function gallery()
    {
        return view("pages.gallery");
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
}
