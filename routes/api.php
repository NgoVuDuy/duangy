<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('routes', RouteController::class);
Route::apiResource('buses', BusController::class);
Route::apiResource('trips', TripController::class);