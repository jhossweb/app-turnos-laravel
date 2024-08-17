<h1> Editar Tipo de Vehículo </h1>

<form action="{{ route('tipo-servicios.update', $tipoServicio) }}" method="POST">
    @csrf()
    @Method('PUT')
    <div><input type="text" name="tps_nombre" value="{{ old('tps_nombre', $tipoServicio->tps_nombre) }}"></div>
    <div>
        <input type="submit" value="Actualizar">
        <a href="{{ route('tipo-servicios.index') }}"> Regresar </a>
    </div>
</form>