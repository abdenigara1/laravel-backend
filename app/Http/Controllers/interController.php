<?php

namespace App\Http\Controllers;
use App\Models\Fitur;
use App\Models\Hero;
use App\Models\Eco;
use Illuminate\Http\Request;

class interController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        $fiturs= Fitur::all();
        $ecos= Eco::all();

        return view('hero', compact('heroes', 'fiturs','ecos'));
    }
}
