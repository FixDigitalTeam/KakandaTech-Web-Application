<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;

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

Route::get('/', [pagecontroller::class, 'dashboard']);
Route::get('/registermember', [pagecontroller::class, 'registermember']);
Route::get('/datamember', [pagecontroller::class, 'datamember']);
Route::get('/registerpegawai', [pagecontroller::class, 'registerpegawai']);
Route::get('/datapegawai', [pagecontroller::class, 'datapegawai']);