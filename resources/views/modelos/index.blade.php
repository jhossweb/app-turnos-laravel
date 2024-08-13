<h1>Todos los modelos</h1>

<a href="{{ route('modelos.create') }}"> Crear </a>

@foreach($mdls as $mdl)
<li>
    Nombre: {{ $mdl->mdl_nombre }}

    <a href="{{ route('modelos.edit', $mdl) }}"> edit </a>
    <form action="{{ route('modelos.destroy', $mdl) }}" method="post">
        @csrf() @method("delete")
        <button type="submit"> Eliminar </button>
    </form>
    
</li>
@endforeach