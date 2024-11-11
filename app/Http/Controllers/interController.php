<?php

namespace App\Http\Controllers;
use App\Models\Fitur;
use App\Models\Hero;
use Illuminate\Http\Request;

class interController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        $fiturs= Fitur::all();

        return view('hero', compact('heroes', 'fiturs'));
    }
}
