<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PickupDropoffPoint extends Model
{
    //
    protected $fillable = ['trip_id','name', 'address', 'time', 'type', 'latitude', 'longitude'];

    // Một điểm đón trả thuộc về một chuyến đi
    public function trip() {

        return $this->belongsTo(Trip::class);
    }

}
