<form action="{{ route('marcas.store') }}" method="post">
    @csrf()

    <div><input type="text" name="mrc_nombre" ></div>

    <div>
        <select name="tpv_id" id="">
            <option > Seleccionar </option>

            @foreach($tpvs as $tpv)
                <option value="{{ $tpv->id }}"> {{ $tpv->tpv_nombre }} </option>
            @endforeach
        </select>
    </div>

    <div> <input type="submit" value="Crear"> </div>
</form>