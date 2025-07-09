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
    public function store($bus_id, $route_id, $departure_date, $departure_time, $arrival_time, $arrival_date, $status, $price)
    {

        $trip = new Trip();

        $trip->bus_id = $bus_id;
        $trip->route_id = $route_id;
        $trip->departure_date = $departure_date;
        $trip->departure_time = $departure_time;
        $trip->arrival_time = $arrival_time;
        $trip->arrival_date = $arrival_date;
        $trip->status = $status;
        $trip->price = $price;

        $trip->save();

        return response()->json(["code" => 1, "message" => "Tạo chuyến đi thành công"]);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trip = Trip::find($id);

        if (!$trip) {
            return response()->json([
                "code" => 0,
                "message" => "Không tìm thấy chuyến đi"
            ], 404);
        }

        return response()->json([
            "code" => 1,
            "data" => $trip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }
    public function update($id, $bus_id, $route_id, $departure_date, $departure_time, $arrival_time, $arrival_date, $status, $price)
    {
        $trip = Trip::find($id);

        if (!$trip) {
            return response()->json(["code" => 0, "message" => "Không tìm thấy chuyến đi"]);
        }

        $trip->bus_id = $bus_id;
        $trip->route_id = $route_id;
        $trip->departure_date = $departure_date;
        $trip->departure_time = $departure_time;
        $trip->arrival_time = $arrival_time;
        $trip->arrival_date = $arrival_date;
        $trip->status = $status;
        $trip->price = $price;

        $trip->save();

        return response()->json(["code" => 1, "message" => "Cập nhật chuyến đi thành công"]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $trip = Trip::find($id)->delete();
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
