<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubjectFactory extends Factory
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
            'nombre'=>fake()->text(80),
            'clave'=>fake()->bothify('???-####'),
            'ing'=> fake()->randomElement(['ier','iem','isc','ii','ie']),
            'semestre'=>fake()->numberBetween(1,9)
        ];
    }
}
