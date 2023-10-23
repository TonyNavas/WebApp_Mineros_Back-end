<?php

namespace Database\Factories;

use App\Models\Cooperativa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Minero>
 */
class MineroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'n_cedula' => $this->faker->lexify('?-######-####-?'),
            'cooperativa_id' => Cooperativa::all()->random()->id,
        ];
    }
}
