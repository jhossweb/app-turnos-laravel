<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthClienteController extends Controller
{

    //protected $guard = "clientes";

    public function signin()
    {
        return view("auth.clientes.signin");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $credenciales = $request->only('clt_correo', 'password');
        $cliente = Auth::guard('clientes')->attempt($credenciales);
        
        
        if($cliente) {
            request()->session()->regenerate();
            return redirect()->route('clientes.show', compact('cliente'));
        }

        return back()->withError(["correo", "error de correo"]);
    }

    function signup () {
        return view("auth.clientes.signup");
    }

    function register (Request $request) {
        $cliente = Cliente::create($request->all());

        $auth = Auth::guard('clientes')->login($cliente);
        
        return view("users.clientes.show", compact('cliente'));
    }

    public function logout(Request $request)
    {

        
        Auth::guard('clientes')->logout();

        //Invalida la sesión y genera una nueva
        $request->session()->invalidate();
        // Genera un nuevo Token
        $request->session()->regenerateToken();
        return redirect()->route('auth.cliente.signin');
    }
}
