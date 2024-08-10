<h2> editar modelos </h2>

<form action="{{ route('modelos.update', $modelo) }}" method="POST">
    @csrf()
    @Method('PUT')
    <div>
        <input type="text" name="mdl_nombre" value="{{ old('mdl_nombre', $modelo->mdl_nombre) }}">
        <p>
            {{ $modelo->marcas->mrc_nombre }}
        </p>
    </div>

    <div>
        <select name="marca_id" id="">
            <option value="{{ $modelo->marca_id }}"> Selectionar </option>
            @foreach($mrcs as $mrc)
                <option value="{{ $mrc->id }}"> {{ old('mrc_nombre', $mrc->mrc_nombre) }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <input type="submit" value="Actualizar">
        <a href="{{ route('marcas.index') }}"> Regresar </a>
    </div>
</form>