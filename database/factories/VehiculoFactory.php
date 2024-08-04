<?php

namespace Database\Factories;

use App\Models\TipoVehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehiculo>
 */
class VehiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "vhl_placa" => fake()->regexify('[A-Z]{5} - [0-4]{4}'),
            "vhl_year" => fake()->year(),
            "tpv_id" => TipoVehiculo::inRandomOrder()->first()->id
        ];
    }
}
