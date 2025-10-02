<?php

use App\Http\Controllers\client\dashboardUserController;
use App\Http\Controllers\client\urlController;
use App\Http\Controllers\client\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.landingPage');
})->middleware(['guest', 'redirect.admin']);

Route::middleware(['auth', 'redirect.admin'])->group(function () {
    Route::get('/home', [dashboardUserController::class, 'showDashboardUser'])->name("home");
    Route::get('/qr-code', [dashboardUserController::class, 'myQrCode'])->name('myQrCode');
    Route::post('/generate-qr-code', [dashboardUserController::class, 'generateQrCode']);
    Route::get('/create-link', function () {
        return view('client.create-link-user');
    })->name('create-link-user');
});


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
