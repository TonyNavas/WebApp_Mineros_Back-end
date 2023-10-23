<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Camiones>
 */
class CamionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $marcas = ['Toyota', 'Ford', 'Honda', 'Chevrolet', 'Volkswagen'];

        return [
            'placa' => $this->faker->lexify('??-####'),
            'color' => $this->faker->colorName,
            'marca' => $marcas[array_rand($marcas)],
        ];
    }
}
