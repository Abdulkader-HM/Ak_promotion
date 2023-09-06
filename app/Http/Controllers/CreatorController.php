<?php

namespace App\Http\Controllers;

use App\Models\creator;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('creator.index');
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
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = creator::where('products', 'like', '%' . $query . '%')->get();

        return view('creator.results', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(creator $creator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(creator $creator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, creator $creator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(creator $creator)
    {
        //
    }
}
