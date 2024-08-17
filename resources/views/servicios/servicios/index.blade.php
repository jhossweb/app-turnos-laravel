
<a href="{{ route('servicios.create') }}"> Crear </a>
{{ auth("clientes")->user()->clt_correo }}

@foreach($srvs as $srv)
    <li>
        <strong> Nombre Servicio </strong> : {{ $srv->tipoServicio->tps_nombre }} - 
        <strong> Precio </strong>: {{ $srv->srv_precio }} - 
        <strong> Tipo Vehículo </strong>: {{ $srv->vehiculo->tpv->tpv_nombre }}-
        <strong> Cliente </strong>:  {{ $srv->vehiculo->cliente->clt_correo }}
    </li>
@endforeach