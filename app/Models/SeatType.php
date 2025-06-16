<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatType extends Model
{
    //
    protected $fillable = ['name', 'extra_price'];

    public function buses()  {

        return $this->belongsToMany(SeatType::class, 'bus_seat_type', 'seat_type_id', 'bus_id');;
    }
}
