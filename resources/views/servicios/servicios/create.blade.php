<form action="{{ route('servicios.store') }}" method="post">
    @csrf()

    <div><input type="text" name="srv_precio" ></div>

    <div>
        <select name="tps_id" id="">
            <option > Seleccionar </option>

            @foreach($tipoServicios as $tipoServicio)
                <option value="{{ $tipoServicio->id }}"> {{ $tipoServicio->tps_nombre }} </option>
            @endforeach
        </select>
    </div>

    <div> <input type="submit" value="Crear"> </div>
</form>