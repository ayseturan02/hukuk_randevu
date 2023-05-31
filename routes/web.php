<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HizmetlerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\İletisimController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
})->name("welcome");


Auth::routes();
Route::match(['get', 'post'], '/home', [HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/randevu', [RandevuController::class, 'index2'])->name('randevu');
Route::match(['get', 'post'], '/iletisim', [İletisimController::class, 'index3'])->name('iletisim');
Route::match(['get', 'post'], '/hizmetlerimiz', [HizmetlerController::class, 'index4'])->name('hizmetlerimiz');





