<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Models\TipoServicio;
use Illuminate\Http\Request;

class TipoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoServicios = TipoServicio::all();
        return view("servicios.tipoServicio.index", compact('tipoServicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("servicios.tipoServicio.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $tps = TipoServicio::create($request->all());
        return redirect()->route("tipo-servicios.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoServicio $tipoServicio)
    {
        return view("servicios.tipoServicio.show", compact('tipoServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoServicio $tipoServicio)
    {
        return view("servicios.tipoServicio.edit", compact('tipoServicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoServicio $tipoServicio)
    {
        $tps = $tipoServicio->update($request->all());
        return redirect()->route("tipo-servicios.show", compact('tps'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoServicio $tipoServicio)
    {
        $tipoServicio->delete();
        return redirect()->route("tipo-servicios.index");
    }
}
