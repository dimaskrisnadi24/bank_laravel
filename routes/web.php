<?php

use Illuminate\Support\Facades\Route;

// load dashboard controller
use App\Http\Controllers\DataSampahController;

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

Route::get('/tambahdatasampah',[DataSampahController::class, 'index'])->name('tambahdatasampah');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// route dashboard controller
Route::resource('dashboard', DashboardController::class);

//route datatransaksi controller
Route::resource('datatransaksi', DataTransaksiController::class);