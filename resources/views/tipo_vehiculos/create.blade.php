<form action="{{ route('tipo-vehiculos.store') }}" method="post">
    @csrf()

    <div><input type="text" name="tpv_nombre" ></div>
    <div> <input type="submit" value="Crear"> </div>
</form>