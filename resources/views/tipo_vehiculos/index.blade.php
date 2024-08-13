<h1> todos los vehículos </h1>

<a href="{{ route('tipo-vehiculos.create') }}"> Crear </a>

<ul>

    @foreach($tpvs as $tpv)
        <li>
            Nombre: {{ $tpv->tpv_nombre }}

            <a href="{{ route('tipo-vehiculos.edit', $tpv) }}"> editar </a>

            <form action="{{ route('tipo-vehiculos.destroy', $tpv) }}" method="post">
                @csrf()  @Method("DELETE")
                <button type="submit"> Eliminar </button>
            </form>
        </li>
    @endforeach
</ul>