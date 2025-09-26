<?php

use App\Http\Controllers\client\urlController;
use App\Http\Controllers\client\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.landingPage');
})->middleware(['guest', 'redirect.admin']);


Route::get('/home', function () {
    return view('client.home');
})->middleware(['auth', 'redirect.admin'])->name('home');


Route::prefix('auth')->middleware(['guest'])->group(function () {
    Route::post('/register', [userController::class, 'store'])->name('register');
    Route::post('/login', [userController::class, 'login'])->name('login');
});

Route::post('/shortenedUrl', [urlController::class, 'shortenedUrl']);;
Route::get('/r/{slug}', [urlController::class, 'redirect']);


// Grupo de rotas admin
Route::prefix('admin')
    ->name('admin.')
    ->group(base_path('routes/admin.php'));
