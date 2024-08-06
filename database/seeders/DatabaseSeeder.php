<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Marca;
use App\Models\Mecanico;
use App\Models\Modelo;
use App\Models\Servicio;
use App\Models\TipoServicio;
use App\Models\TipoVehiculo;
use App\Models\Turno;
use App\Models\User;
use App\Models\Vehiculo;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Cliente::factory(5)->create();

        TipoVehiculo::factory(2)->create();
        Marca::factory(5)->create();
        Modelo::factory(10)->create();

        Vehiculo::factory(20)->create();

        TipoServicio::factory(5)->create();
        Mecanico::factory(10)->create();
        Servicio::factory(15)->create();

        Turno::factory(9)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
