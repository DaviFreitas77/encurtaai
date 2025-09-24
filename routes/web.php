<?php

use App\Http\Controllers\urlController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/criar', [userController::class, 'store'])->name('criar.store');

Route::post('/shortenedUrl', [urlController::class, 'shortenedUrl']);;

Route::get('/r/{slug}', [urlController::class, 'redirect']);
