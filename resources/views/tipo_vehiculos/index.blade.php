<h1> todos los vehículos </h1>

<a href="{{ route('tipo-vehiculos.create') }}"> Crear </a>

<ul>

    @foreach($tpvs as $tpv)
        <li>
            Nombre: {{ $tpv->tpv_nombre }}

            <a href="{{ route('tipo-vehiculos.edit', $tpv) }}"> editar </a>
        </li>
    @endforeach
</ul>