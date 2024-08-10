<form action="{{ route('modelos.store') }}" method="post">
    @csrf()

    <div><input type="text" name="mdl_nombre" ></div>

    <div>
        <select name="marca_id" id="">
            <option > Seleccionar </option>

            @foreach($mrcs as $mrc)
                <option value="{{ $mrc->id }}"> {{ $mrc->mrc_nombre }} </option>
            @endforeach
        </select>
    </div>

    <div> <input type="submit" value="Crear"> </div>
</form>