<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    //
    protected $fillable = ["bus_type", "license_plate", "total_seat"];

    public function seat_types()
    {
        return $this->belongsToMany(SeatType::class, 'bus_seat_type', 'bus_id', 'seat_type_id');
    }
}
