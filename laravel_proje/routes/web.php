<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/randevu', [App\Http\Controllers\RandevuController::class, 'index2'])->name('randevu');
Route::get('/e-tahsilat', [App\Http\Controllers\E_tahsilatController::class, 'index3'])->name('e-tahsilat');



