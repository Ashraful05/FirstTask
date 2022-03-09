<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MikrotikController;
use App\Http\Controllers\RouterTypeController;
use App\Http\Controllers\OltController;
use App\Http\Controllers\OltTypeController;
use App\Http\Controllers\ActivationStatusController;
use App\Http\Controllers\VendorController;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[OltTypeController::class,'index']);

Route::resource('mikrotik',MikrotikController::class);
Route::resource('olt',OltController::class);
Route::resource('olttype',OltTypeController::class);
Route::resource('routertype',RouterTypeController::class);
Route::resource('vendor',VendorController::class);
