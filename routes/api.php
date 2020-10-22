<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//get obtener informacion
//post guardar
//Delete Borrar
//PUt actualizar


Route::get("/productos/{id?}","API\productosController@index")->where("id","[0-9]+");

Route::get("/comentarios/{id?}","API\ComentariosController@index")->where("id","[0-9]+");


Route::post("/productos","Api\productosController@guardar");

Route::post("/productos","Api\productosController@eliminar");






Route::post("/comentarios","Api\ComentariosController@guardar");


