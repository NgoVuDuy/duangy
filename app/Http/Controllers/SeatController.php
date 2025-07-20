<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    //
    // public function index() {

    //     $seats = Seat::with('busSeatType')->get();

    //     return $seats;
    // }
    public function update($id, $b)
    {

        $seat = Seat::findOrFail($id);

        $seat->is_booking = $b;
        $seat->save();

        // return response()->json([
        //     'message' => 'Cập nhật trạng thái ghế thành công.',
        //     'seat' => $seat
        // ]);
    }
}
