
<form action="{{ route('servicios.store') }}" method="post">
    @csrf()

    <div><input type="text" name="srv_precio" ></div>

    <div>
        <select name="tipo_servicio_id" id="">
            <option > Seleccionar </option>

            @foreach($tipoServicios as $tipoServicio)
                <option value="{{ $tipoServicio->id }}"> {{ $tipoServicio->tps_nombre }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <select name="vehiculo_id" id="">
            <option > Seleccionar </option>

            @foreach($vehiculos as $vh)
                <option value="{{ $vh->id }}"> {{ $vh->tpv->tpv_nombre }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <input type="number" name="cliente_id">
    </div>

    <div> <input type="submit" value="Crear"> </div>
</form>