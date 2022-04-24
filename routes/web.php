<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

Route::get('/', [LoginController::class,"index"])->name('login');
Route::post('/', [LoginController::class,"login"]);

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin', [AdminController::class, 'store']);
Route::get('/Student', [StudentController::class, 'index'])->name('student');


Route::get('/student', function () {
    return view("student.student");
});
