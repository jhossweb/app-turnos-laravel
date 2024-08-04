<?php

namespace Database\Factories;

use App\Models\TipoVehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marca>
 */
class MarcaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "mrc_nombre" => fake()->word(),
            "tpv_id" => TipoVehiculo::inRandomOrder()->first()->id
        ];
    }
}
