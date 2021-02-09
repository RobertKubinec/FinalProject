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

    public function sights()
    {
        return view('pages/sightseeings');
    }

    public function caves()
    {
        return view('caves/caves');
    }

    public function articles()
    {
        return view('pages/article');
    }

}
