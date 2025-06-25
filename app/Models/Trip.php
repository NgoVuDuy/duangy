<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    protected $fillable = ["bus_id", "route_id", "departure_time", "arrival_time", "departure_date", "arrival_date", "status", "price"];

    // Một chuyến đi thuộc về một tuyến đi
    public function route()
    {

        return $this->belongsTo(Route::class);
    }

    // Một chuyến đi thuộc về một xe buýt
    public function bus()
    {

        return $this->belongsTo(Bus::class);
    }
    // Một chuyến đi có nhiều điểm đón
    public function pickup_dropoff_points()
    {
        return $this->hasMany(PickupDropoffPoint::class);
    }

    // Một chuyến đi có nhiều điểm trả
    // public function dropoffs()
    // {
    //     return $this->hasMany(PickupDropoffPoint::class);
    // }
}
