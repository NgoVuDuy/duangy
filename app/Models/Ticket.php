<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = ['name', 'phone', 'user_phone', 'trip_id', 'pickup_dropoff_point_id', 'seat_id', 'status', 'method'];
}
