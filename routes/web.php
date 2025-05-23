<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Trip;
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', Home::class);
Route::get('/trips', Trip::class);
