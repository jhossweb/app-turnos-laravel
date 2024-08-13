<a href="{{ route('tipo-servicios.create') }}"> Crear </a>

@foreach($tipoServicios as $tps)
    <li>
        {{ $tps->tps_nombre }} 
        <a href="{{ route('tipo-servicios.edit', $tps) }}"> edit </a>
        <form action="{{ route('tipo-servicios.destroy', $tps) }}" method="post">
            @csrf() @method("delete")
            <button type="submit"> Eliminar </button>
        </form>
    </li>
@endforeach