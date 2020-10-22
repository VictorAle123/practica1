<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\productosmodelo;


class ProductosController extends Controller
{
 
    public function index($id = null){
        if($id)

        return response()->json(["productos"=>productosmodelo::find($id)],200);


        return response()->json(["productos"=>productosmodelo::all()],200);

    }
    public function guardar(Request $request){

        $productos = new productosmodelo();
        $productos->Nombre = $request->Nombre;

        if($productos->save())

        return response()->json(["productos"=>$productos],201);
        return response()->json(null,400);

    }

    public function eliminar($id)
    {


        productosmodelo::delete($id);
        return response()->json(["productos"=>productosmodelo::all()],200);



        $borrar = new productosmodelo();

        $borrar = productosmodelo::find($id);
        $borrar-> delete();
        return response()->json(["productos"=>productosmodelo::all()],200);






    }

    //
}
