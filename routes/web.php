<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/home', function () {
    return view('home')->name('home');
});

Route::post('/criar', [userController::class, 'store'])->name('criar.store');
