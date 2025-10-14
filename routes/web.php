<?php

use App\Http\Controllers\client\dashboardUserController;
use App\Http\Controllers\client\urlController;
use App\Http\Controllers\client\userController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('client.landingPage');
})->middleware(['guest', 'redirect.admin']);

Route::middleware(['auth', 'redirect.admin'])->group(function () {
    Route::get('/home',function(){return view('client.home');})->name('home');
    Route::post('/logout', [userController::class, 'logout'])->name('logout');
});


Route::prefix('auth')->middleware(['guest'])->group(function () {
    Route::post('/register', [userController::class, 'store'])->name('register');
    Route::post('/login', [userController::class, 'login'])->name('login');
});

Route::post('/shortenedUrl', [urlController::class, 'shortenedUrl']);;
Route::get('/getUrlUser', [urlController::class, 'get_url_user_logged'])->name('getUrlUserLogged');
Route::get('/getAnalyticsUrl', [urlController::class, 'url_analytics']);
Route::delete('/deleteUrl/{id}', [urlController::class, 'delete_url']);

Route::get('/r/{slug}', [urlController::class, 'redirect']);
Route::post('/r/get-qr-code', [urlController::class, 'get_qr_code']);


// Grupo de rotas admin
Route::prefix('admin')
    ->name('admin.')
    ->group(base_path('routes/admin.php'));
