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


//Productos

Route::get("/productos/{id?}","API\productosController@index")->where("id","[0-9]+");

Route::post("/productos","Api\productosController@guardar");

Route::delete("/productos/{id}","API\productosController@eliminar")->where("id","[0-9]+");

Route::put("/productos/{id}","API\productosController@modificar")->where("id","[0-9]+");



//comentarios

Route::get("/comentarios/{id?}","API\ComentariosController@index")->where("id","[0-9]+");

Route::post("/comentarios","Api\ComentariosController@guardar");

Route::delete("/comentarios/{id}","API\ComentariosController@eliminar")->where("id","[0-9]+");

Route::put("/comentarios/{id}","API\ComentariosController@modificar")->where("id","[0-9]+");
