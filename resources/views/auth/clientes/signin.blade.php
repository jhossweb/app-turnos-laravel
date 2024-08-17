<form action="{{ route('auth.cliente.login') }}" method="post">

    @csrf()
    <div><input type="email" name="clt_correo"></div>
    <div><input type="password" name="password"></div>
    <div><input type="submit" value="Registrarse"></div>
</form>