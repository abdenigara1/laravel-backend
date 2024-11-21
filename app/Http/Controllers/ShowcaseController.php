<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $showcases = showcase::where('is_active', 'active')->get();
            return view('hero', compact('showcase'));
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            //
        }
    
        /**
         * Display the specified resource.
         */
        public function show(Hero $hero)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Hero $hero)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Hero $hero)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Hero $hero)
        {
            //
        }
    
}
