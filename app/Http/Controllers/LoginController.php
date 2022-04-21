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
            'email' => 'required|email',
            'password' => 'required',
        ]); 

        if (!auth()->attempt($request->only('email','password'))) {
            return back()->with('status','email or password invalid');
        }
        else {
            if ($request->rol == 'estudiante') {
                return 'Estudiante view';
            }
            else {
                return redirect()->route('admin');
            }
        }
    }

}


