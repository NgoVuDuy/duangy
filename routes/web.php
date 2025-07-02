<?php

use App\Http\Controllers\PaymentController;
use App\Livewire\BookingConfirmation;
use App\Livewire\ErrorPayment;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Payment;
use App\Livewire\PaymentResult;
use App\Livewire\SuccessPayment;
use App\Livewire\Ticket;
use App\Livewire\Trip;
use App\Livewire\User;

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', Home::class);
Route::get('/trips', Trip::class)->name('trips');
Route::get('/payments', Payment::class);
Route::get('/bookingconfirmation', BookingConfirmation::class);
Route::get('/user', User::class);
Route::get('/ticket', Ticket::class);

Route::get('/vnpay/success', function() {
    return view('payment-success');
});
Route::get('/vnpay/error', function() {
    return view('payment-error');
});

Route::get('payment/callback', [PaymentController::class, 'callback'])->name('vnpay.callback');