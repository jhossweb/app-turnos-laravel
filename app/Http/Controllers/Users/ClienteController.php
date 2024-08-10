<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clts = Cliente::all();
        return view("users.clientes.index", compact('clts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clts = Cliente::create($request->all());
        if(!$clts) return redirect()->route("clientes.create")->with("error", "no guardó");

        return redirect()->route("clientes.index")->with("success", "se guardó");
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view("users.clientes.show", compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view("users.clientes.edit", compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $clt = $cliente->update($request->all());
        if(!$clt) return redirect()->route("clientes.edit")->with("error", "no se actuliazó");

        return redirect()->route("clientes.index")->with("success", "se actualizó");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route("clientes.index")->with("delete", "se eliminó");
    }
}
