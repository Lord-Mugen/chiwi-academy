<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
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

=======
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);
>>>>>>> 6d6cc1fd81f4517f6cd8b6aef7d3fbff18378d55
