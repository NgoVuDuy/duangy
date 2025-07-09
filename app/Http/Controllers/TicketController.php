<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function getTicketByPhone($phone)
    {

        $tickets = Ticket::with('user')
            ->with('trip.route')
            ->with('pickup')
            ->with('dropoff')
            ->with('seat')
            ->where('phone', $phone)
            ->get();
        return response()->json($tickets);
    }

    public function getTicketById($phone)
    {

        $tickets = Ticket::with('user')
            ->with('trip.route')
            ->with('trip.bus')
            ->with('trip.bus.busOperator')
            ->with('pickup')
            ->with('dropoff')
            ->with('seat')
            ->where('user_phone', $phone)
            ->orderBy('created_at', 'desc')
            ->get();
        return response()->json($tickets);
    }

    public function store(string $name, string $phone, $user_phone, $trip_id,  $pickup,  $dropoff, $seat_id, string $status, string $method, string $price, string $payment_id)
    {

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
        $ticket->price = $price;
        $ticket->payment_id = $payment_id;

        $ticket->save();
    }
}
