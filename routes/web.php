<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/update',[HomeController::class,'update'])->name('update');
Route::post('/store',[HomeController::class,'store'])->name('store');
