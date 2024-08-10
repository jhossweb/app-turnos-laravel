<?php

use App\Http\Controllers\Marcas\MarcaController;
use App\Http\Controllers\Modelo\ModeloController;
use App\Http\Controllers\Users\ClienteController;
use App\Http\Controllers\Vehiculos\TipoVehiculoController;

use Illuminate\Support\Facades\Route;

Route::resource("tipo-vehiculos", TipoVehiculoController::class);
Route::resource("marcas", MarcaController::class);
Route::resource("modelos", ModeloController::class);

Route::resource("clientes", ClienteController::class);