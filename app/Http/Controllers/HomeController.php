<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->get();
        $image = Gallery::orderBy(\DB::raw('rand()'))->limit(1)->first();

        return view('pages.home',[
            'items' => $items,
            'image' => $image,
        ]);
    }
}