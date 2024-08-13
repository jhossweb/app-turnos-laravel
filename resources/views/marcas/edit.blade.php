<h2> editar marcas </h2>


<form action="{{ route('marcas.update', $marca) }}" method="POST">
    @csrf()
    @Method('PUT')
    <div>
        <input type="text" name="mrc_nombre" value="{{ old('mrc_nombre', $marca->mrc_nombre) }}">
        <p>
            {{ $marca->tpv->tpv_nombre }}
        </p>
    </div>

    <div>
        <select name="tpv_id" id="">
            <option value="{{ $marca->tpv_id }}"> Selectionar </option>
            @foreach($tpvs as $tpv)
                <option value="{{ $tpv->id }}"> {{ old('tpv_nombre', $tpv->tpv_nombre) }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <input type="submit" value="Actualizar">
        <a href="{{ route('marcas.index') }}"> Regresar </a>
    </div>
</form>