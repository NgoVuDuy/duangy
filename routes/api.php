<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\BusSeatTypeController;
use App\Http\Controllers\PickupDropoffPointController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\SeatTypeController;
use App\Http\Controllers\TripController;
use App\Models\PickupDropoffPoint;
use App\Models\Seat;
use App\Models\SeatType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('routes', RouteController::class);
Route::apiResource('buses', BusController::class);
Route::apiResource('trips', TripController::class);
Route::apiResource('seat-types', SeatTypeController::class);
Route::apiResource('seats', SeatController::class);
Route::apiResource('bus-seat-types', BusSeatTypeController::class);
Route::apiResource('pickup-dropoff-points', PickupDropoffPointController::class);

