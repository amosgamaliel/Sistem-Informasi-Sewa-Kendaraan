<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DendaController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::prefix('master/pelanggan')->group(function () {
        Route::get('', [PelangganController::class, 'create'])->name('pelanggan.index');

        Route::get('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan'])->name('pelanggan.create');
        Route::post('/insertdata', [PelangganController::class, 'insertdata'])->name('pelanggan.insert');

        Route::get('/tampilkandata/{id}', [PelangganController::class, 'tampilkandata'])->name('pelanggan.show');
        Route::post('/updatedata/{id}', [PelangganController::class, 'updatedata'])->name('pelanggan.update');

        Route::get('/delete/{id}', [PelangganController::class, 'delete'])->name('pelanggan.delete');
    });

    Route::prefix('kendaraan')->group(function () {
        Route::get('/get', [KendaraanController::class, 'index'])->name('Kendaraan');

        Route::get('/viewkendaraan', [KendaraanController::class, 'viewkendaraan'])->name('viewkendaraan');

        Route::get('/tambahdata', [KendaraanController::class, 'tambahdatakendaraan'])->name('tambahdatakendaraan');
        Route::post('/insertdata', [KendaraanController::class, 'insertdata'])->name('kendaraan.insert');

        Route::get('/tampilkandata/{id}', [KendaraanController::class, 'tampilkandata'])->name('tampilkandata');
        Route::post('/updatedata/{id}', [KendaraanController::class, 'updatedata'])->name('updatedata');

        Route::get('/delete/{id}', [KendaraanController::class, 'delete'])->name('delete');
    });

    Route::prefix('denda')->group(function () {

        Route::get('/denda', [DendaController::class, 'index'])->name('denda');
        Route::get('/user', [DendaController::class, 'asd']);

        Route::get('/tambahdenda', [DendaController::class, 'tambahdenda'])->name('tambahdenda');
        Route::post('/simpandata', [DendaController::class, 'simpandata'])->name('simpandata');
    });

    Route::redirect('/', 'login');
    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function () {
        return view('pages/utility/404');
    });
});
