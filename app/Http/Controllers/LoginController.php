<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("layouts.login_view");
    }
    
    public function login(Request $request){
        $this->validate($request,[
            'inputEmail3' => 'required|email|max:255',
            'inputPassword3' => 'required',
            ]); 
            dd("hola mundo");
    }
}


