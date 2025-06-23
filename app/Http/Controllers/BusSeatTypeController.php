<?php

namespace App\Http\Controllers;

use App\Models\BusSeatType;
use App\Models\Seat;
use Illuminate\Http\Request;

class BusSeatTypeController extends Controller
{
    //
    public function index() {
        
        $busSeatTypes = BusSeatType::with('seats')->where('bus_id', 1)->get();

        return $busSeatTypes;
    }
}
