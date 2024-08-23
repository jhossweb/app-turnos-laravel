<?php

namespace App\Listeners;

use App\Events\GenerarTurnoEvent;
use App\Models\Turno;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerarTurnoListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(GenerarTurnoEvent $event): void
    {
        Turno::create([
            "cliente_id" => $event->service->cliente_id,
            "servicio_id" => $event->service->id,
            "estado" => "activo"
        ]);
    }
}
