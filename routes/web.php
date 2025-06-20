<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotulenController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NotulenController::class, 'index'])->name('home');

Route::get('/notulen', [NotulenController::class, 'showNotulen'])->name('notulen');

Route::post('/notulen/store', [NotulenController::class, 'store'])->name('notulen.store');

Route::post('/peserta/store', [NotulenController::class, 'storePeserta'])->name('peserta.store');