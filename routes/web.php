<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelanggan', [PelangganController::class,'create'])->name('pelanggan');

Route::get('/tambahpelanggan', [PelangganController::class,'tambahpelanggan']);
Route::post('/insertdata', [PelangganController::class,'insertdata']);

Route::get('/tampilkandata/{id}', [PelangganController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [PelangganController::class,'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [PelangganController::class,'delete'])->name('delete');
