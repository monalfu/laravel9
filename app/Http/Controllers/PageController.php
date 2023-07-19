<?php

namespace App\Http\Controllers; //es la ruta de acceso a este controlador, se debe copiar y pegar en el archivo de rutas especificando el controlado

use App\Models\Post;
use Illuminate\Http\Request; // clase propia de laravel

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
        $posts = Post::get(); // tráeme todos los post de la BD

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
