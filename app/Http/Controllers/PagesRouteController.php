<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesRouteController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function facts()
    {
        return view('pages/factsAboutSlovakia');
    }

    public function map()
    {
        return view('pages/touristMapSlovakia');
    }

    public function articles()
    {
        return view('pages/article');
    }

}
