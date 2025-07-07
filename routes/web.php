<?php

use App\Http\Controllers\PaymentController;
use App\Livewire\Admin\Account;
use App\Livewire\Admin\Bus;
use App\Livewire\Admin\Index;
use App\Livewire\Admin\Route as AdminRoute;
use App\Livewire\Admin\Trip as AdminTrip;
use App\Livewire\BookingConfirmation;
use App\Livewire\Home;
use App\Livewire\Payment;
use App\Livewire\Ticket;
use App\Livewire\Trip;
use App\Livewire\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', Index::class);
Route::get('/routes', AdminRoute::class);
Route::get('/admin-trips', AdminTrip::class);
Route::get('/buses', Bus::class);
Route::get('/admin-account', Account::class);




