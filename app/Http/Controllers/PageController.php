<?php

namespace App\Http\Controllers; //es la ruta de acceso a este controlador, se debe copiar y pegar en el archivo de rutas especificando el controlado

use Illuminate\Http\Request;

// separar la lógica del archivo de rutas y así el manejo de peticiones se hace desde un controlador
class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // consulta a base de datos
        $posts = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
        ];

        return view('blog', ['posts' => $posts]);
    }

    public function post($slug)
    {
        // consulta a base de datos
        $post = $slug;

        return view('post', ['post' => $post]);
    }
}
