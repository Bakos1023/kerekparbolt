<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBicycleRequest;
use App\Http\Requests\UpdateBicycleRequest;
use App\Models\Bicycle;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBicycleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicycle $bicycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBicycleRequest $request, Bicycle $bicycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicycle $bicycle)
    {
        //
    }
}
