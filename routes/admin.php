<?php

use App\Http\Controllers\admin\dashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/secret-dashboard', [dashboardController::class, 'showDashboard']);

Route::get('/create-link', function () {
    return view('admin.create-link');
});
