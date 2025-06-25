<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    //
    protected $fillable = ["bus_type", "license_plate", "total_seat", "bus_operator_id", "image"];

    // Một xe buýt thì có nhiều loại ghế ngồi
    public function seat_types()
    {
        return $this->belongsToMany(SeatType::class, 'bus_seat_type', 'bus_id', 'seat_type_id');
    }

    // Quan hệ với bảng liên kết
    public function busSeatTypes() {
         
        return $this->hasMany(BusSeatType::class);
    }
    // Một xe buýt thuộc về một nhà xe
    public function busOperator() {
        return $this->belongsTo(BusOperator::class);
    }
}
