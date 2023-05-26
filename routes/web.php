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



// Route::get('/home', function () {
//     return view('home');
// })->name("home");

Route::get('/randevu', function () {
    return view('randevu');
})->name("randevu");

Route::get('/e-tahsilat', function () {
    return view('e-tahsilat');
})->name("e-tahsilat");

Route::get('', function () {
    return view('welcome');
})->name("welcome");


Route::get('/hizmetlerimiz', function () {
    return view("hizmetlerimiz");
})->name("hizmetlerimiz");

Route::get('/iletisim', function () {
    return view("iletisim");
})->name("iletisim");


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




