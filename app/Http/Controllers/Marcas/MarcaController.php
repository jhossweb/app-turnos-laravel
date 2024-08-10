<?php

namespace App\Http\Controllers\Marcas;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use App\Models\TipoVehiculo;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::with("tpv")->get();
        return view('marcas.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tpvs = TipoVehiculo::all();
        return view('marcas.create', compact('tpvs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $marcas = Marca::create($request->all());
        if(!$marcas) return redirect()->route("marcas.create")->with("error", "Error al crear la Marca");

        return redirect()->route("marcas.index")->with("success", "Creación de Marca");
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {
        $marca->with("tpv")->get();
        return view("marcas.show", compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marca $marca)
    {
        $tpvs = TipoVehiculo::all();
        $marca->with("tpv")->get();
        return view("marcas.edit", compact('marca', 'tpvs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marca $marca)
    {
        $mrc = $marca->update($request->all());
        
        if(!$mrc) return redirect()->route('marcas.edit', $mrc)->with("error", "Error al Actualizar");

        return redirect()->route('marcas.show', $marca)->with("success", "Se actualizó");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca)
    {
        $mrc = $marca->delete();
        if(!$mrc) return redirect()->route("marcas.edit", $mrc)->with("error", "No se eliminó");

        return redirect()->route("marcas.index")->with("success", "se eliminó");
    }
}
