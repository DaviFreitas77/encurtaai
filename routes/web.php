<?php

use App\Http\Controllers\client\dashboardUserController;
use App\Http\Controllers\client\urlController;
use App\Http\Controllers\client\userController;
use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;

Route::get('/', function () {
    return view('client.landingPage');
})->middleware(['guest', 'redirect.admin']);

Route::middleware(['auth', 'redirect.admin'])->group(function () {
    Route::get('/home', function () {
        return view('client.home');
    })->name('home');
    Route::get('/qr', function () {
        return view('client.qrCode');
    })->name('qrcode');
    Route::get('/create-link', function () {
        return view('client.createLink');
    })->name('createLink');


    
    Route::post('/logout', [userController::class, 'logout'])->name('logout');
});

Route::prefix('auth')->middleware(['guest'])->group(function () {
    Route::post('/register', [userController::class, 'store'])->name('register');
    Route::post('/login', [userController::class, 'login'])->name('login');
});

Route::prefix('metrics')->middleware('auth')->group(function () {
    Route::get('/analytics', [urlController::class, 'url_analytics']);
});
Route::post('/shortenedUrl', [urlController::class, 'shortenedUrl']);;
Route::get('/getUrlUser', [urlController::class, 'get_url_user_logged'])->name('getUrlUserLogged');

Route::delete('/deleteUrl/{id}', [urlController::class, 'delete_url']);

Route::get('/r/{slug}', [urlController::class, 'redirect']);
Route::post('/create-qr-code', [urlController::class, 'create_qr_code']);
Route::post('/create-qr-code-url-existing', [urlController::class, 'create_qr_code_url_existing']);
Route::get('/getQrCodeUser', [urlController::class, 'get_qr_code_user_logged']);


// Grupo de rotas admin
Route::prefix('admin')
    ->name('admin.')
    ->group(base_path('routes/admin.php'));
