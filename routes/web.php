<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::get('login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'Auth'], function (){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('page', PageController::class);

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
