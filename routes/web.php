<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('Kendaraan');

Route::get('/viewkendaraan', [KendaraanController::class, 'viewkendaraan'])->name('viewkendaraan');

Route::get('/tambahdata', [KendaraanController::class, 'tambahdatakendaraan'])->name('tambahdatakendaraan');
Route::post('/insertdata', [KendaraanController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [KendaraanController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [KendaraanController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [KendaraanController::class, 'delete'])->name('delete');
