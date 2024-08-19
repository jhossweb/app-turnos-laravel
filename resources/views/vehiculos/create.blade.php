{{ auth("clientes")->user()->id }}
<form action="{{ route('auth.cliente.logout') }}" method="post">
    @csrf()
    <input type="submit" value="Salir">
</form>



<form action="{{ route('vehiculos.store') }}" method="post">
    @csrf()

    <select name="tpv_id" id="">
        <option value=""> tipo de vehiculo </option>

        
        @foreach($tipoVehiculos as $tpv)
            <option value="{{ $tpv->id }}"> {{ $tpv->tpv_nombre }}</option>
        @endforeach
    </select>

    <div>
        <input type="text" name="vhl_placa">
    </div>
    <div>
        <input type="text" name="vhl_year">
    </div>
    
    <div>
        <input type="text" name="cliente_id">
    </div>

    <div>
        <input type="submit" value="guardar">
    </div>
</form>