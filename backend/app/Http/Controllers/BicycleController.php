<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBicycleRequest;
use App\Http\Requests\UpdateBicycleRequest;
use App\Http\Resources\BicycleResource;
use App\Models\Bicycle;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :JsonResource
    {
        $bicycles= Bicycle::query()->get();
        return BicycleResource::collection($bicycles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBicycleRequest $request)
    {
        $data=$request->validated();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicycle $bicycle): JsonResource
    {
        return new BicycleResource($bicycle);
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
    public function destroy(Bicycle $bicycle): Response
    {
        return $bicycle->delete() ? response()->noContent() :abort(500);
    }
}
