<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function store(string $name, string $phone, $user_phone, $trip_id, string $pickup, string $dropoff, $seat_id, string $status, string $method) {

        $ticket = new Ticket();
        $ticket->name = $name;
        $ticket->phone = $phone;
        $ticket->user_phone = $user_phone;
        $ticket->trip_id = $trip_id;
        $ticket->pickup = $pickup;
        $ticket->dropoff = $dropoff;
        $ticket->seat_id = $seat_id;
        $ticket->status = $status;
        $ticket->method = $method;

        $ticket->save();
    }
}
