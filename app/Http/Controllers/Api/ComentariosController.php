<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\comentariosmodelo;


class ComentariosController extends Controller
{


    public function index($id = null){

        if($id)

        return response()->json(["comentarios"=>comentariosmodelo::find($id)],200);


        return response()->json(["comentarios"=>comentariosmodelo::all()],200);


    }


    
    public function guardar(Request $request){

        $comentarios = new comentariosmodelo();
        $comentarios->comentario = $request->comentario;
        $comentarios->persona = $request->persona;

        $comentarios->producto = $request->producto;
        



        if($comentarios->save())

        return response()->json(["comentarios"=>$comentarios],201);
        return response()->json(null,400);

    }



    //
}
