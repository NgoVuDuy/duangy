<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'phone';
    public $incrementing = false; // Nếu user_phone không phải số tự tăng
    protected $keyType = 'string'; // Nếu là string (số điện thoại)
    
    protected $fillable = [
        'name',
        'phone',
        'date',
        'gender'
    ];
}
