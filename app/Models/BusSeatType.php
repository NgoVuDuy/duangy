<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusSeatType extends Model
{
    protected $table = 'bus_seat_type';
    //
    protected $fillable = ['seat_type_id', 'bus_id'];

}