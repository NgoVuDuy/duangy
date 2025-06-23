<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusSeatType extends Model
{
    protected $table = 'bus_seat_type';
    //
    protected $fillable = ['seat_type_id', 'bus_id'];

    // Một xe buýt - ghế ngồi bao gồm nhiều ghế ngồi
    public function seats() {

        return $this->hasMany(Seat::class);
    }

    // Thuộc về một loại ghế
    public function seatType() {
        return $this->belongsTo(SeatType::class);
    }
    // Thuộc về một xe buýt

}