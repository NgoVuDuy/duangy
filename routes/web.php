<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Trip;

Route::get('/', Home::class);
Route::get('/trips', Trip::class);
