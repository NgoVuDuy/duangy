<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = ['name', 'phone', 'user_phone', 'trip_id', 'pickup', 'dropoff', 'seat_id', 'price', 'status', 'method'];

    // Một vé thuộc về một user
    public function user()
    {

        return $this->belongsTo(User::class, 'user_phone', 'phone');
    }
    // Một vé thuộc về một chuyến đi
    public function trip()
    {

        return $this->belongsTo(Trip::class);
    }
    // Một vé có một điểm đơn
    public function pickup()
    {
        return $this->belongsTo(PickupDropoffPoint::class, 'pickup', 'id');
    }
    // Một vé có một điểm trả
    public function dropoff()
    {
        return $this->belongsTo(PickupDropoffPoint::class, 'dropoff', 'id');
    }
    // Một vé có một ghế ngồi
    public function seat() {
        return $this->belongsTo(Seat::class);
    }

    // Một vé thuộc về một thanh toán
    public function payment() {

        return $this->belongsTo(Payment::class);
    }
}
