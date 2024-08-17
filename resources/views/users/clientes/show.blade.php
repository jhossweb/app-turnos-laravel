@auth
    hola mundo
    
    @endauth
    {{ auth("clientes")->user()->clt_correo }}
hola

<a href="{{ route('clientes.index') }}"> Regresar </a>
<form action="{{ route('auth.cliente.logout') }}" method="post">
    @csrf()
    <input type="submit" value="Salir">
</form>