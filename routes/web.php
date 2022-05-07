<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupriorityController;

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
// frontend taruh disini routenya
Route::get('/', function () {
    return view('welcome');
});

// ini group route buat dashboard
Route::middleware(['auth:sanctum', 'verified'])->name('dashboard.')->prefix('dashboard')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name(('index'));

    // ini group route buat admin aja
    Route::middleware(['admin'])->group(function () {
        Route::resource('service', ServiceController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('supriority', SupriorityController::class);
    });
});