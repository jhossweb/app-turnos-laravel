<form action="{{ route('clientes.store') }}" method="post">
    @csrf()

    <div><input type="email" name="clt_correo" ></div>

    <div>
        <input type="password" name="password">
    </div>

    <div> <input type="submit" value="Crear"> </div>
</form>