<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TambahTransaksiController;
use App\Http\Controllers\TransaksiController;

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
    
    Route::prefix('core/transaksi')->group(function () {
        Route::get('', [TransaksiController::class, 'index'])->name('transaksi.index');
        Route::get('/pilih/kendaraan', [TambahTransaksiController::class, 'indexKendaraan'])->name('transaksi.pilih');
        Route::get('/detail/{kendaraan}', [TambahTransaksiController::class, 'showKendaraan'])->name('transaksi.detail-kendaraan');
        Route::post('/place-order', [TambahTransaksiController::class, 'createOrder'])->name('transaksi.create');
    });

    Route::prefix('master/pelanggan')->group(function () {
        Route::get('', [PelangganController::class, 'create'])->name('pelanggan.index');

        Route::get('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan'])->name('pelanggan.create');
        Route::post('/insertdata', [PelangganController::class, 'insertdata'])->name('pelanggan.insert');

        Route::get('/tampilkandata/{id}', [PelangganController::class, 'tampilkandata'])->name('pelanggan.show');
        Route::post('/updatedata/{id}', [PelangganController::class, 'updatedata'])->name('pelanggan.update');

        Route::get('/delete/{id}', [PelangganController::class, 'delete'])->name('pelanggan.delete');
    });

    Route::prefix('master/kendaraan')->group(function () {
        Route::get('', [KendaraanController::class, 'index'])->name('kendaraan.index');

        Route::get('/tambahdata', [KendaraanController::class, 'tambahdatakendaraan'])->name('kendaraan.create');
        Route::post('/insertdata', [KendaraanController::class, 'insertdata'])->name('kendaraan.insert');

        Route::get('/tampilkandata/{id}', [KendaraanController::class, 'tampilkandata'])->name('kendaraan.show');
        Route::post('/updatedata/{id}', [KendaraanController::class, 'updatedata'])->name('kendaraan.update');

        Route::get('/delete/{id}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');
    });

    Route::prefix('denda')->group(function () {

        Route::get('/denda', [DendaController::class, 'index'])->name('denda');

        Route::get('/tambahdenda', [DendaController::class, 'tambahdenda'])->name('denda.create');
        Route::post('/simpandata', [DendaController::class, 'simpandata'])->name('denda.insert');
        Route::get('/edit/{id}', [DendaController::class, 'edit'])->name('denda.edit');
        Route::post('/update/{id}', [DendaController::class, 'update'])->name('denda.update');
    });

    Route::redirect('/', 'login');
    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function () {
        return view('pages/utility/404');
    });
});
