<h2> Detalle marcas </h2>

<p>
    {{$marca->mrc_nombre}}
    {{ $marca->tpv->tpv_nombre }}
</p>

<a href="{{ route('marcas.index') }}"> Regresar </a>