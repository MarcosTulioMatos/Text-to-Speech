<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudioController; 

Route::get('/', function () {
    return view('home');
});
Route::post('/', [AudioController::class, 'convert']);