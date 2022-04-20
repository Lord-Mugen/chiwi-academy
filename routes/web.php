<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/admin', function () { /* Aqui la ruta pasó de ser / a ser /admin debido a que daba error */
    return view('admin');
});

Route::get('student', function () {
    return "Bienvenido a la vista de estudiante";
});

Route::get('/', [LoginController::class,"index"]);
Route::post('/', [LoginController::class,"login"]);

