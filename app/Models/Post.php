<?php

// Comando consola: php artisan make:model Post -fc (crea el modelo con su archivo factory y controlador correspondiente). En caso de necesitar ayuda poner: php artisan make:model -help

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Registrar la relación. este post pertenece a un usuario
    public function user() {
        return $this->belongsTo(User::class);
    }
}
