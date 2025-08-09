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

        $buses = BusOperator::where('phone', $phone)
            ->with('buses.busSeatTypes.seatType')
            ->with('buses.busSeatTypes.seats')
            ->first();

        // dd($buses);

        return response()->json($buses);
    }

    // public function showTrips(string $phone)
    // {

    //     $trips = BusOperator::where('phone', $phone)->with('buses.trips.route')->first();

    //     return response()->json($trips);
    // }
    public function showTrips(string $phone)
    {
        $trips = BusOperator::where('phone', $phone)
            ->with([
                'buses.trips' => function ($query) {
                    $query->orderBy('created_at', 'desc');
                },
                'buses.trips.route',
                // 'buses.trips.tickets' => function ($query) {
                //     $query->where('status', 'pending'); 
                // },
                'buses.trips.tickets.pickup',
                'buses.trips.tickets.dropoff',
                'buses.trips.tickets.seat',
                'buses.trips.tickets.payment'

            ])
            ->first();

        return response()->json($trips);
    }
}
