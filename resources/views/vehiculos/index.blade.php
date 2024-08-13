<h1> Todos los vehículos </h1>

@foreach($vhls as $vhl)
<li>
    {{ $vhl->vhl_placa }} - {{ $vhl->cliente->clt_correo }}

    @foreach($vhl->servicios as $srv)
        <p>
            Precio: {{ $srv->srv_precio }} -
            Nombre Servicio: {{ $srv->tipoServicio->tps_nombre }}
        </p>
    @endforeach

</li>
@endforeach