<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // desarrollar la consulta (orden descendete y paginador)
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function destroy(Post $post) {
        $post->delete();

        return back();
    }
}
