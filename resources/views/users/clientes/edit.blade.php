<form action="{{ route('clientes.update', $cliente) }}" method="post">
    @csrf() @method("put")

    <div><input type="email" value="{{ old('cll_correo', $cliente->clt_correo) }}" ></div>

    <div> <input type="submit" value="actualizar"> </div>
</form>