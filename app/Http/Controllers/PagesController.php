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
        return redirect()->route('pages.delivery-menu');
        $title = 'Étlap';

        $menus = \App\Category::where('type_id', 1)->with('items')->get();

        return view('pages.menu', compact('menus', 'title'));
    }

    public function deliveryMenu()
    {
        $title = 'Kiszállításos Étlap & Itallap';

        $menus = \App\Category::where('type_id', 4)
            ->orWhere('type_id', 5)
            ->with('items')->get();

        return view('pages.menu', compact('menus', 'title'));
    }

    public function christmas()
    {
        $title = 'Elviteles  Karácsonyi Ajánlat';

        $menus = \Str::slug($title);

        return view('pages.offer', compact('menus', 'title'));
    }

    public function newYear()
    {
        $title = 'Elviteles  Szilveszteri Ajánlat';

        $menus = \Str::slug($title);

        return view('pages.offer', compact('menus', 'title'));
    }

    public function drinks()
    {
        return redirect()->route('pages.delivery-menu');
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
