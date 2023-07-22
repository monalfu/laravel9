<?php

// el comando de consola: php artisan make:migration create_nombre_table (así crea una migración con la estructura Schema)

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // crear campo sin signos, solo acepta números positivos y sea de tipo entero
            $table->unsignedBigInteger('user_id');
            // relación campo foraneao (user_id) que hará referencia al campo id de la tabla users
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
