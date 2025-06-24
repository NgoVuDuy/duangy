<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trips = Trip::with('pickup_dropoff_points')->get();

        return response()->json($trips);
    }

    // public function get_pickups()
    // {
    //     //
    //     $trips = Trip::with(['pickups' => function ($query) {
    //         $query->where('type', 'pickup');
    //     }])->get();

    //     return response()->json($trips);
    // }

    // public function get_dropoffs()
    // {
    //     //
    //     $trips = Trip::with(['dropoffs' => function ($query) {
    //         $query->where('type', 'dropoff');
    //     }])->get();

    //     return response()->json($trips);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Tìm kiếm chuyến đi
    public function search(string $start_point, string $end_point, string $date)
    {

        // Lấy các chuyến đi 
        $trips = Trip::where('departure_date', $date)

            ->whereHas('route', function ($query) use ($start_point, $end_point) {
                $query->where('start_point', 'like', "%$start_point%")
                    ->where('end_point', 'like', "%$end_point%");
            })
            ->with('bus.busSeatTypes.seatType') // Kèm theo loại ghế
            ->with('bus.busSeatTypes.seats') // Kèm theo các ghế ngồi
            ->with('route') // Kèm theo tuyến đường
            ->with('pickup_dropoff_points') // Kèm theo điểm đón trả
            ->with('bus.busOperator') // Kèm theo nhà xe
            ->get();

        return response()->json($trips);
    }
}
