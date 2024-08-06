<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turno>
 */
class TurnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "cliente_id" => Cliente::inRandomOrder()->first()->id,
            "servicio_id" => Servicio::inRandomOrder()->first()->id,
            "estado" => fake()->randomElement(["activo", "suspendido", "terminado"])
        ];
    }
}
