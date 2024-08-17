<?php

use App\Http\Controllers\Auth\AuthClienteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Marcas\MarcaController;
use App\Http\Controllers\Modelo\ModeloController;
use App\Http\Controllers\Servicios\ServicioController;
use App\Http\Controllers\Servicios\TipoServicioController;
use App\Http\Controllers\Users\ClienteController;
use App\Http\Controllers\Vehiculos\TipoVehiculoController;
use App\Http\Controllers\Vehiculos\VehiculoController;

Route::resource("tipo-vehiculos", TipoVehiculoController::class);
Route::resource("marcas", MarcaController::class);
Route::resource("modelos", ModeloController::class);

Route::resource("clientes", ClienteController::class);
Route::resource("vehiculos", VehiculoController::class);


Route::resource("tipo-servicios", TipoServicioController::class);
Route::resource("servicios", ServicioController::class);


Route::get("/signup", [AuthClienteController::class, "signup"])->name("auth.cliente.signup");
Route::post("/signup", [AuthClienteController::class, "register"])->name("auth.cliente.register");
Route::get("/signin", [AuthClienteController::class, "signin"])->name("auth.cliente.signin");
Route::post("/signin", [AuthClienteController::class, "login"])->name("auth.cliente.login");
Route::post("/logout", [AuthClienteController::class, "logout"])->name("auth.cliente.logout");