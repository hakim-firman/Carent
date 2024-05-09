<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RentalController;
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
Route::middleware('auth')->group(function(){
    Route::get('/',[DashboardController::class , 'index']);
    Route::middleware(['admin'])->group(function () {
        Route::resource('cars', CarController::class);
    });
    Route::middleware(['pelanggan'])->group(function () {
        Route::resource('rental', RentalController::class);
    });

});



Route::get('/login',[AuthController::class , 'index'])->middleware('guest')->name('login');
Route::post('/login',[AuthController::class , 'authenticate']);
Route::get('/register',[AuthController::class , 'register'])->middleware('guest');
Route::get('/logout',[AuthController::class , 'logout']);
Route::post('/register',[AuthController::class , 'store']);
