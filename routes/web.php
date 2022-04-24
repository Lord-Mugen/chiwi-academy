<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Psy\Command\EditCommand;

Route::get('/', [LoginController::class,"index"])->name('login');
Route::post('/', [LoginController::class,"login"]);

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin', [AdminController::class, 'store']);
Route::delete('/admin/{eventos}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/{eventos}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{eventos}', [AdminController::class, 'update'])->name('admin.update');


Route::get('student', function () {
    return "Bienvenido a la vista de estudiante";
});



