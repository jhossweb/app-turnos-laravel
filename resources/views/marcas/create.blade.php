<form action="{{ route('marcas.store') }}" method="post">
    @csrf()

    <div><input type="text" name="mrc_nombre" ></div>
    <div> <input type="submit" value="Crear"> </div>
</form>