<?php

namespace App\Http\Controllers;

use App\Models\SeatType;
use Illuminate\Http\Request;

class SeatTypeController extends Controller
{
    //
    public function index() {

        $seat_types = SeatType::all();
        return response()->json($seat_types);
    }
}
