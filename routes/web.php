<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Psy\Command\EditCommand;

Route::get('/', [LoginController::class,"index"])->name('login');
Route::post('/', [LoginController::class,"login"]);

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/home', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::post('/home', [AdminController::class, 'store']);
Route::delete('/home/{eventos}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::put('/home/{eventos}', [AdminController::class, 'update'])->name('admin.update');

Route::post('/logout', [LogoutController::class,"store"])->name('logout');
