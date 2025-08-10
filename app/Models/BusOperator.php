<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusOperator extends Model
{
    //
    protected $primaryKey = 'phone';
    public $incrementing = false;

    protected $fillable = ['name', 'phone'];

    public function buses() {

        return $this->hasMany(Bus::class, 'bus_operator_phone', 'phone');
    }
}
