<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = footer::where('is_active', 'active')->get();
        return view('hero', compact('footers'));
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
    public function show(footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, footer $footer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(footer $footer)
    {
        //
    }
}
