<?php

namespace App\Http\Controllers\Vehiculos;

use App\Http\Controllers\Controller;
use App\Models\TipoVehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tpvs = TipoVehiculo::all();
        return view("tipo_vehiculos.index", compact('tpvs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipo_vehiculos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tpv = TipoVehiculo::create($request->all());
        
        if(!$tpv) return redirect()->route("tipo-vehculos.create")->with("error", "No se guardarón los datos");

        return redirect()->route("tipo-vehiculos.index")->with("success", "Se guardarón los datos");
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoVehiculo $tipoVehiculo)
    {
        return view("tipo_vehiculos.show", compact('tipoVehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoVehiculo $tipoVehiculo)
    {
        return view("tipo_vehiculos.edit", compact('tipoVehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoVehiculo $tipoVehiculo)
    {
        $tpv = $tipoVehiculo->update($request->all());
        if(!$tpv) return redirect()->route('tipo-vehiculos.edit', $tpv)->with("error", "Error al Actualizar");

        return redirect()->route('tipo-vehiculos.show', $tpv)->with("success", "Se actualizó");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoVehiculo $tipoVehiculo)
    {
        //
    }
}
