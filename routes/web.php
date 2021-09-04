<?php

use App\Http\Controllers\DashboardController;
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
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [UserController::class, 'index'])->name('login');

Route::post('login', [UserController::class, 'login']);

Route::group(['middleware' => 'Auth'], function (){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    

    Route::get('logout', [UserController::class, 'logout']);
});
