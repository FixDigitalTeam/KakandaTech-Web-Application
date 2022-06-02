<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/seo-content', [LandingController::class, 'seocontent'])->name('seocontent');
Route::get('/web-development', [LandingController::class, 'webdevelopment'])->name('webdevelopment');
Route::get('/mobile-development', [LandingController::class, 'mobiledevelopment'])->name('mobiledevelopment');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/verification/{id}', [CheckoutController::class, 'verification'])->name('verification');
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
});

Route::middleware(['auth', 'verified'])->name('dashboard.')->prefix('dashboard')->group(function () {

    Route::resource('mytransaction', MemberController::class);
    
    // Route admin
    Route::middleware(['admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('package', PackageController::class);
        Route::resource('product', ProductController::class);
        Route::resource('transaction', TransactionController::class);
    });
});

require __DIR__.'/auth.php';
