<h1> Editar Tipo de Vehículo </h1>

<form action="{{ route('tipo-vehiculos.update', $tipoVehiculo) }}" method="POST">
    @csrf()
    @Method('PUT')
    <div><input type="text" name="tpv_nombre" value="{{ old('tpv_nombre', $tipoVehiculo->tpv_nombre) }}"></div>
    <div>
        <input type="submit" value="Actualizar">
        <a href="{{ route('tipo-vehiculos.index') }}"> Regresar </a>
    </div>
</form>