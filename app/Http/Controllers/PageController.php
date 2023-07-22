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
        // $posts = Post::get(); // tráeme todos los post de la BD

        // traer el primer elemento
        // $post = Post::first();

        // buscar por id
        // $post = Post::find(25);

        // dd($post);

        // Consulta de datos paginada, en orden descendente
        $posts = Post::latest()->paginate();

        // Con esto veremos que devuelve una colección de datos
        // dd($posts);

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
