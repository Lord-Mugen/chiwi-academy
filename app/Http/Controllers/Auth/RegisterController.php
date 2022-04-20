<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){

        //validate data
        $this->validate($request,[
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'rol' => $request->rol,
            'password' => Hash::make($request->password), //encripta contraseña
        ]);

        if ($request->rol == 'estudiante') {
            return 'Estudiante view';
        }
        else {
            // return redirect()->route('admin');
            return 'admin view';
        }
    }
}
