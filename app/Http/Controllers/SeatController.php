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
    public function update($id)
    {

        $seat = Seat::findOrFail($id);

        $seat->is_booking = true;
        $seat->save();

        return response()->json([
            'message' => 'Cập nhật trạng thái ghế thành công.',
            'seat' => $seat
        ]);
    }
}
