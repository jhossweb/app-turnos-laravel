<?php

namespace App\Http\Controllers\Vehiculos;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vhls = Vehiculo::with(["servicios.tipoServicio", "cliente"])->get();
        return view("vehiculos.index", compact('vhls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipoVehiculos = Vehiculo::with("tpv")->get();
        
        return view("vehiculos.create", compact('tipoVehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vhl = Vehiculo::create($request->all());

        return view("vehiculos.show", $vhl);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vhl)
    {
        return view("vehiculos.show", $vhl);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vhl)
    {
        return view("vehiculos.edit", $vhl);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vhl = $vehiculo->update($request->all());
        return view("vehiculos.show", $vhl);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculo $vhl)
    {
        $vhl->delete();
        return view("vehiculos.index");
    }
}
