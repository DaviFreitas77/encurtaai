<?php

use App\Http\Controllers\admin\dashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/secret-dashboard', [dashboardController::class, 'showDashboard'])->name("dashboard");
    Route::get('/create-link', function () {
        return view('admin.create-link');
    });

});
