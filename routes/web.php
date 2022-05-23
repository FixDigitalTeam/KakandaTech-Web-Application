<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->name('dashboard.')->prefix('dashboard')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('user', UserController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('package', PackageController::class);
    Route::resource('product', ProductController::class);

    Route::middleware(['admin'])->group(function () {
        
    });
});

require __DIR__.'/auth.php';
