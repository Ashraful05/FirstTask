<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MikrotikContoller;
use App\Http\Controllers\OltContoller;
use App\Http\Controllers\OltTypeContoller;
use App\Http\Controllers\RouterTypeContoller;
use App\Http\Controllers\VendorContoller;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('mikrotik','MikrotikContoller');
Route::resource('olt','OltController');
Route::resource('olttype','OltTypeController');
Route::resource('routertype','RouterTypeController');
Route::resource('vendor','VendorController');
