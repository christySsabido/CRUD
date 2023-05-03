<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tema' => fake()->word(25),
            'unidad'=> fake() ->numberBetween(1,3),
            'subject_id'=> fake() ->numberBetween(1, 25)



        ];
    }
}
