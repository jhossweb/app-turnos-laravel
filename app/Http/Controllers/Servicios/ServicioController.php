<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use App\Models\TipoServicio;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $srvs = Servicio::with(["tipoServicio", "vehiculo.tpv", "vehiculo.cliente"])
                ->whereHas("vehiculo.cliente", function ($query) { 
                    $query->where("id", Auth::guard('clientes')->user()->id); 
                })
                ->get();
        return view("servicios.servicios.index", compact('srvs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipoServicios = TipoServicio::all();
        $vehiculos = Vehiculo::with("tpv")->where("cliente_id", Auth::guard("clientes")->user()->id)->get();
        
        return view("servicios.servicios.create", compact('tipoServicios', 'vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $srv = Servicio::create($request->all());
        return view("servicios.servicios.show", compact('srv'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        return view("servicios.servicios.show", compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        
        return view("servicios.servicios.edit", compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        $srv = $servicio->update($request->all());
        return view("servicios.servicios.show", compact('srv'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route("servicios.index");
    }
}
