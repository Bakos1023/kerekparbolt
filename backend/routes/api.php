<?php

use App\Http\Controllers\BicycleController;
use App\Http\Controllers\ManufacturerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource("/manufacturers",ManufacturerController::class)->whereNumber("manufacturer")->only(["index","show","destroy","store","update"]);
Route::apiResource("/bicycles",BicycleController::class)->whereNumber("bicycle");