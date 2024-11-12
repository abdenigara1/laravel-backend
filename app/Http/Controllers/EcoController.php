<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use Illuminate\Http\Request;

class EcoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecos = Eco::where('is_active', 'active')->get();
        return view('hero', compact('ecos'));
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
    public function show(Eco $eco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eco $eco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eco $eco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eco $eco)
    {
        //
    }
}
