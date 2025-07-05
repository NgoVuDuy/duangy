<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusOperator;
use Illuminate\Http\Request;

class BusOperatorController extends Controller
{
    //
    public function showBuses(string $phone)
    {

        $buses = BusOperator::where('phone', $phone)->with('buses')->first();

        return response()->json($buses);
    }

    public function showTrips(string $phone)
    {

        $trips = BusOperator::where('phone', $phone)->with('buses.trips.route')->first();

        return response()->json($trips);
    }
}
