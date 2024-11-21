<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use App\Models\Hero;
use App\Models\Eco;
use App\Models\footer; // Pastikan penulisan model benar
use App\Models\Showcase;
use Illuminate\Http\Request;

class InterController extends Controller
{
    public function index()
    {
        $footers = Footer::where('is_active', 'active')
        ->inRandomOrder() // Mengambil data secara acak
        ->take(6)         // Batasi hingga 6 data
        ->get();

        // Bagi data menjadi 2 grup dengan masing-masing 3 item
        $div1 = $footers->take(3); // Ambil 3 data pertama untuk div 1
        $div2 = $footers->slice(3); // Ambil sisanya (3 data) untuk div 2

        // Kirim ke view


        $heroes = Hero::all();
        $fiturs= Fitur::all();
        $ecos= Eco::all();
        $showcases= showcase::all();


        // Kirim data ke view
        return view('hero', compact('heroes', 'fiturs', 'ecos', 'showcases','div1', 'div2'));
    }
}
