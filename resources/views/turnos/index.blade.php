@foreach($turnos as $turno)
<li>
    <strong> Cliente: </strong> {{ $turno->cliente->clt_correo }} - 
    <strong> Placa: </strong> {{ $turno->servicio->vehiculo->vhl_placa }} -
    <strong> Tipo de Vehículo: </strong> {{ $turno->servicio->vehiculo->tpv->tpv_nombre }} - 
    <strong> Tipo de Servicio: </strong> {{ $turno->servicio->tipoServicio->tps_nombre }} - 
    <strong> Precio por Servicio: </strong> {{ $turno->servicio->srv_precio }}
</li>
@endforeach