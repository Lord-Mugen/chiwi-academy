<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // dd(auth()->user()); //verifica si esta autenticado el user
        return view('admin');
    }
}
