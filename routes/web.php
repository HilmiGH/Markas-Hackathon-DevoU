<?php

use App\Livewire\About;
use App\Livewire\Home;
use App\Livewire\Location;
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
Route::get('/location', Location::class);
