<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // dirección del controlador


Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/blog', [PageController::class, 'blog'])
    ->name('blog');

Route::get('/blog/{slug}', [PageController::class, 'post'])
    ->name('post');


