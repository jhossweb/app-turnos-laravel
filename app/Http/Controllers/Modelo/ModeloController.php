<?php

namespace App\Http\Controllers\Modelo;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mdls = Modelo::all();
        return view("modelos.index", compact('mdls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mrcs = Marca::all();
        return view("modelos.create", compact('mrcs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mdls = Modelo::create($request->all());
        if(!$mdls) return redirect()->route("modelos.create")->with("Error", "no se creó el modelo");

        return redirect()->route("modelos.index")->with("success", "se creó el modelo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Modelo $modelo)
    {
        
        return view("modelos.show", compact('modelo', 'mrcs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelo $modelo)
    {
        $mrcs = Marca::all();
        $modelo->with("marca")->get();
        dd($modelo);
        return view("modelos.edit", compact('modelo', 'mrcs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelo $modelo)
    {
        $mdls = $modelo->update($request->all());
        if(!$mdls) return redirect()->route("modelos.edit")->with("Error", "no se actualizó el modelo");

        return redirect()->route("modelos.show")->with("success", "se actualizó el modelo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelo $modelo)
    {
        $modelo->delete();
        return redirect()->route("modelos.index")->with("success", "se eliminó el modelo");
    }
}
