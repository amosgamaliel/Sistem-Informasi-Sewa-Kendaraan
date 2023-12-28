<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DendaController;

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

Route::get('/denda', [DendaController::class,'index'])->name('denda');
Route::get('/user', [DendaController::class,'asd']);

Route::get('/tambahdenda', [DendaController::class,'tambahdenda'])->name('tambahdenda');
Route::post('/simpandata', [DendaController::class,'simpandata'])->name('simpandata');