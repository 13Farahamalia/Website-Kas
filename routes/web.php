<?php

use App\Http\Controllers\AuthController;
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
    return view('login');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::get('/beranda', function () {
    return view('beranda', [
        'bar' => 'beranda'
    ]);
});

Route::get('/pembayaran', function () {
    return view('pembayaran', [
        'bar' => 'pembayaran'
    ]);
});

Route::get('/pengeluaran', function () {
    return view('pengeluaran', [
        'bar' => 'pengeluaran'
    ]);
});

Route::get('/rekapan', function () {
    return view('rekapan', [
        'bar' => 'rekapan'
    ]);
});