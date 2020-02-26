<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $weeklyMenu = \Config::get('spaletta.weekly-menu');
        $hours = \Config::get('spaletta.hours');
        $events = Event::active()
            ->orderBy('started_at')
            ->get();

        return view('pages.index', compact('events', 'hours', 'weeklyMenu'));
    }

    public function about()
    {
        $hours = \Config::get('spaletta.hours');
        return view ('pages.about', compact('hours'));
    }

    public function menu()
    {
        $menus = \App\Category::where('type_id', 1)->with('items')->get();

        return view('pages.menu', compact('menus'));
    }

    public function drinks()
    {
        $drinks = \App\Category::where('type_id', 2)->with('items')->get();

        return view('pages.drinks', compact('drinks'));
    }

    public function gallery()
    {
        $gallery = \Config::get('spaletta.gallery-images');

        return view('pages.gallery', compact('gallery'));
    }

    public function contact()
    {
        $hours = \Config::get('spaletta.hours');

        return view('pages.contact', compact('hours'));
    }
}
