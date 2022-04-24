<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Doctrine\DBAL\Events as DBALEvents;

class AdminController extends Controller
{
    public function index(){
        // dd(auth()->user()->eventos); //retorna la coleccion (items)
        // dd(auth()->user()); //verifica si esta autenticado el user
        //$eventos = Events::get(); //obtiene la data del modelo Events
        $eventos = Events::paginate(1); //1 evento x pagina
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
            //trae el nombre original del archivo
            'image' => $request->file('image')->getClientOriginalName(),
            'destacada' => $request->destacada,
            $imageName = $request->file('image')->getClientOriginalName(),
            //almacena la imagen en la carpeta con su respectivo nombre
            $request->file('image')->storeAs('public/images/',$imageName),
        ]);

        return back();
    }

    public function destroy(Events $eventos)
    {
        $eventos->delete();

        return back();
    }

//    public function edit(Events $eventos){
    //    $eventos->put();
    // return view('edit', compact('eventos'));
    // dd($eventos->id);
    //    return view('edit', compact($eventos));

    public function edit( $id){
    $eventos = Events::find($id);
    return $eventos;
   }

   public function update(Request $request, Events $eventos){
$eventos->title = $request->title;
$eventos->description = $request->description;
$eventos->maxCupos = $request->maxCupos;
$eventos->timeMeet = $request->timeMeet;
$eventos->destacada = $request->destacada;
$eventos->image = $request->image;

$eventos->save();
return back();

 }
}
