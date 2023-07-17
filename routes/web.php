<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| get -> Consultar
| post -> Guardar
| delete -> Eliminar
| put -> Actualizar
|
*/

Route::get('/', function () {
    return "Ruta home";
});

Route::get('/blog', function () {
    return "Listado de publicaciones";
});

Route::get('/blog/{slug}', function ($slug) {
    // consulta a base de datos
    return $slug;
});

//
Route::get('/buscar', function (Request $request) {
    // request = solicitud, se le pregunta qué necesita para a partir de allí otorgar un proceso y dar una respuesta
    return $request->all();
});
