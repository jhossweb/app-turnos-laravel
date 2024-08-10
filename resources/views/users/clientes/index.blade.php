<h1>Todos los clientes</h1>

<a href="{{ route('clientes.create') }}"> Crear </a>

@foreach($clts as $clt)
<li>
    Nombre: {{ $clt->clt_correo }}

    <a href="{{ route('clientes.edit', $clt) }}"> edit </a>
    <form action="{{ route('clientes.destroy', $clt) }}" method="post">
        @csrf() @method("delete")
        <button type="submit"> Eliminar </button>
    </form>
    
</li>
@endforeach