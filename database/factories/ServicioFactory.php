<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\TipoServicio;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "srv_precio" => fake()->randomFloat(2),
            "tipo_servicio_id" => TipoServicio::inRandomOrder()->first()->id,
            "vehiculo_id" => Vehiculo::inRandomOrder()->first()->id,
            "cliente_id" => Cliente::inRandomOrder()->first()->id
        ];
    }
}
