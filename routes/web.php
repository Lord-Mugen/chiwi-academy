<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('student', function () {
    return "Bienvenido a la vista de estudiante";
});

Route::get('/', [LoginController::class,"index"])->name('login');
Route::post('/', [LoginController::class,"login"]);

