<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halaman\HomeController;
use App\Http\Controllers\Halaman\AdminController;
use App\Http\Controllers\Halaman\KamarController;
use App\Http\Controllers\Halaman\FasilitasController;
use App\Http\Controllers\Halaman\ResepsionisController;

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
//     return view('Auth.login');
// });

Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('auth',[LoginController::class,'auth'])->name('auth');

Route::post('registrasi',[RegisController::class,'registrasi'])->name('registrasi');

// Route Sesudah Login
Route::prefix('hotel_axio')->group(function(){
    Route::resource('kamar',KamarController::class); // Route Kamar 
    Route::resource('home',HomeController::class); // Route Home
    Route::resource('fasilitas_hotel',FasilitasController::class); // Route Fasilitas Hotel
    Route::resource('resepsionis',ResepsionisController::class); // Route hanya untuk Resepsionis

    // ROute Untuk Adminnn
    Route::get('admin_kamar',[AdminController::class,'kamar'])->name('admin_kamar');
    Route::get('admin_fasilitas_hotel',[AdminController::class,'fasilitas_hotel'])->name('admin_fasilitas_hotel');

});
