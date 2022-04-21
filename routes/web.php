<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

//  Route::get('/register',[RegisterController::class,'index'])->name('register');
//  Route::post('/register',[RegisterController::class,'store']);

 Route::get('/', [LoginController::class,"index"]);
 Route::post('/', [LoginController::class,"login"]);

//  Route::get('/', function () {
//      return view('admin');
//  });
