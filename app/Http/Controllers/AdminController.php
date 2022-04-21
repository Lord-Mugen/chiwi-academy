<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // dd(auth()->user()->eventos); //retorna la coleccion (items)
        // dd(auth()->user()); //verifica si esta autenticado el user
        return view('admin');
    }

    public function store(Request $request){
        $request->user()->eventos()->create([
            'title' => $request->title,
            'timeMeet' => $request->timeMeet,
            'maxCupos' => $request->maxCupos,
            'description' => $request->description,
            'image' => $request->image,
            'destacada' => $request->destacada,
        ]);

        return back();
    }
}
