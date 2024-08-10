<h1> Todas las maracas </h1>

<a href="{{ route('marcas.create') }}"> Crear marcas </a>

@foreach($marcas as $marca)
<li>
    {{ $marca->mrc_nombre }} -> {{ $marca->tpv->tpv_nombre }}

    <a href="{{ route('marcas.edit', $marca) }}"> editar </a>
  


    <form action="{{ route('marcas.destroy', $marca) }}" method="post">
        @csrf()  @Method("DELETE")
        <button type="submit"> Eliminar </button>
    </form>
</li>
@endforeach