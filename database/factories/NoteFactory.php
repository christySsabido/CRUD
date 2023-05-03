<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'titulo'=>fake()->text(20),
            'palabras clave'=>fake()->word(50),
            'tema'=>fake()->text(30),
            'asignatura'=>fake()->text(20),
            'resumen'=>fake()->text(300)
        ];
    }
}
