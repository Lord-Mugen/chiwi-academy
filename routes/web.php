<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/', function () {
    return view('admin');
});


Route::get('student', function () {
    /* return view('welcome'); */
    return "Bienvenido a la vista de estudiante";
});