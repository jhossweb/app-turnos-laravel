$turnos = Turno::with(['servicio.mecanico', 'cliente'])->get();
