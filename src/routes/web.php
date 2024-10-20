<?php

use Mateo\Rtch\Http\Controllers\PusherController;
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

Route::get('/rtch',[PusherController::class,'index'])->name('rtch');
Route::post('/rtch/broadcast',[PusherController::class,'broadcast'])->name('rtch.broadcast');
Route::post('/rtch/receive',[PusherController::class,'receive'])->name('rtch.receive');
