<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // dirección del controlador

/*
Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/blog', [PageController::class, 'blog'])
    ->name('blog');

Route::get('/blog/{slug}', [PageController::class, 'post'])
    ->name('post');
*/

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'home')
        ->name('home');

    Route::get('/blog', 'blog')
        ->name('blog');

    Route::get('/blog/{post:slug}', 'post') // necesario cambiar la ruta por el cambio de lógica en el controlador
        ->name('post');
});
