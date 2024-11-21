<?php

namespace App\Http\Controllers;
use App\Models\Fitur;
use App\Models\Hero;
use App\Models\Eco;
use App\Models\footer;
use App\Models\Showcase;
use Illuminate\Http\Request;

class interController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        $fiturs= Fitur::all();
        $ecos= Eco::all();
        $showcases= showcase::all();
        $footers= footer::all();

        return view('hero', compact('heroes', 'fiturs','ecos','showcases','footers'));

    }
}
