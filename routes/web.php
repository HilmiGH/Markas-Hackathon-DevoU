<?php

use App\Livewire\About;
use App\Livewire\Home;
use App\Livewire\CheckoutCalendar;
use App\Livewire\CheckoutForm;
use App\Livewire\CheckoutSuccess;
use App\Livewire\Booking;
use App\Livewire\Events;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/booking', Booking::class);
Route::get('/checkout-calendar', CheckoutCalendar::class);
Route::get('/checkout-form', CheckoutForm::class);
Route::get('/checkout-success', CheckoutSuccess::class);Route::get('/booking', Booking::class);
Route::get('/events', Events::class);
