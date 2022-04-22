<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class AdminController extends Controller
{
    public function index(){
        // dd(auth()->user()->eventos); //retorna la coleccion (items)
        // dd(auth()->user()); //verifica si esta autenticado el user
        $eventos = Events::get(); //obtiene la data del modelo Events
        return view('admin',[
            'eventos' => $eventos
        ]);
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
