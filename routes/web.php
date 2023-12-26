<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/pelanggan', [PelangganController::class,'create'])->name('pelanggan');

    Route::get('/tambahpelanggan', [PelangganController::class,'tambahpelanggan']);
    Route::post('/insertdata', [PelangganController::class,'insertdata']);

    Route::get('/tampilkandata/{id}', [PelangganController::class,'tampilkandata'])->name('tampilkandata');
    Route::post('/updatedata/{id}', [PelangganController::class,'updatedata'])->name('updatedata');

    Route::get('/delete/{id}', [PelangganController::class,'delete'])->name('delete');

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});