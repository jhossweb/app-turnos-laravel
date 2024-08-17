<form action="{{ route('tipo-servicios.store') }}" method="post">
    @csrf()

    <div><input type="text" name="tps_nombre" ></div>

    <div> <input type="submit" value="Crear"> </div>
</form>