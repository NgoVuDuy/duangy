<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    protected $fillable = ["bus_id", "route_id", "departure_time", "arrival_time", "status", "price"];

    public function route() {

        return $this->belongsTo(Route::class);
    }

    public function bus() {
        
        return $this->belongsTo(Bus::class);
    }
}
