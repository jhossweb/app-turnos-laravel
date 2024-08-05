<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mecanico>
 */
class MecanicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "mnc_nombre" => fake()->name(),
            "mnc_apellido" => fake()->lastName(),
            "mnc_correo" => fake()->unique()->freeEmail(),
            "mnc_telefono" => fake()->unique()->phoneNumber(),
            "mnc_password" => "secret"
        ];
    }
}
