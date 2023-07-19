<?php
// comando consola: php artisan migrate:refresh --seed (borra y vuelve a crear)

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence(), // guardamos la información en una variable
            'slug' => Str::slug($title), // para convertir el texto para una url amigable
            'body' => $this->faker->text(2200),
        ];
    }
}
