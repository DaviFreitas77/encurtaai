<?php

use Illuminate\Support\Facades\Route;

Route::get('/secret-dashboard', function () {
    return view('admin.secret-dashboard');
});
