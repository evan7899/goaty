<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use App\Http\Requests\StoreGoatRequest;
use App\Http\Requests\UpdateGoatRequest;

class GoatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd("coucou index");
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
    public function store(StoreGoatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Goat $goat)
    {
        dd("coucou show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goat $goat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoatRequest $request, Goat $goat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goat $goat)
    {
        //
    }
}
