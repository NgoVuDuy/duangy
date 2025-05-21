<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    protected $fillable = ["bus_id", "route_id", "departure_time", "arrival_time", "status", "price"];
}
