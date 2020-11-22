<?php

namespace App\Http\Controllers;

use App\Models\BrandSelector;
use Illuminate\Http\Request;

class BrandSelectorController extends Controller
{
    
    public function index()
    {
        return BrandSelector::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return BrandSelector::create([
            'name' => $request->name,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BrandSelector  $brandSelector
     * @return \Illuminate\Http\Response
     */
    public function show(BrandSelector $brandSelector)
    {
        return $brandSelector;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BrandSelector  $brandSelector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandSelector $brandSelector)
    {
        $brandSelector->name = $request->name;
        return $brandSelector->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrandSelector  $brandSelector
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandSelector $brandSelector)
    {
        return $brandSelector->delete();
    }
}
