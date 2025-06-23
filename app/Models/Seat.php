<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    protected $fillable = ['bus_seat_type', 'name'];

    // Nhiều ghế ngồi thuộc về một xe buýt - loại ghế
    public function busSeatType() {

        return $this->belongsTo(BusSeatType::class);
    }
}
