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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/randevu', [App\Http\Controllers\RandevuController::class, 'index2'])->name('randevu');
Route::get('/e-tahsilat', [App\Http\Controllers\E_tahsilatController::class, 'index3'])->name('e-tahsilat');


Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/giris', function () {
    return view('giris');
})->name("giris");

Route::get('/kayıt', function () {
    return view('kayıt');
})->name("kayıt");

Route::get('/hizmetlerimiz', function () {
    return view("hizmetlerimiz");
})->name("hizmetlerimiz");

Route::get('/iletisim', function () {
    return view("iletisim");
})->name("iletisim");

Route::get('/randevu', function () {
    return view("randevu");
})->name("randevu");

Route::fallback(function (){
   return view("hata");
});

Route::prefix("layouts")->group(function (){
   Route::get("/kadro", function() {
       return view("kadro");
   });
    Route::get("/hizmet", function() {
        return view("hizmet");
    });
    Route::get("/takvim", function() {
        return view("takvim");
    });
    Route::get("/saat", function() {
        return view("saat");
    });
    Route::get("/onay", function() {
        return view("onay");
    });
});




