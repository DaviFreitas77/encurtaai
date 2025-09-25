<?php

use App\Http\Controllers\client\urlController;
use App\Http\Controllers\client\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.landingPage');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/criar', [userController::class, 'store'])->name('criar.store');

Route::post('/shortenedUrl', [urlController::class, 'shortenedUrl']);;

Route::get('/r/{slug}', [urlController::class, 'redirect']);


// Grupo de rotas admin
Route::prefix('admin')
    ->name('admin.')
    ->group(base_path('routes/admin.php'));
