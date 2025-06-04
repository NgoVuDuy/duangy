<?php

use App\Livewire\BookingConfirmation;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Payment;
use App\Livewire\Trip;
use App\Livewire\User;

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', Home::class);
Route::get('/trips', Trip::class);
Route::get('/payments', Payment::class);
Route::get('/bookingconfirmation', BookingConfirmation::class);
Route::get('/user', User::class);

