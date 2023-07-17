<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/blog', function () {
        // consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
    ];

    return view('blog', ['posts' => $posts]);
});

Route::get('/blog/{slug}', function ($slug) {
    // consulta a base de datos
    $post = $slug;

    return view('post', ['post' => $post]);

});


