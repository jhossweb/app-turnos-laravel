<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'srv_precio',
        'tipo_servicio_id',
        'vehiculo_id',
        'cliente_id'
    ];

    function mecanicos(): BelongsToMany {
        return $this->belongsToMany("App\Models\Mecanico");
    }

    function tps(): BelongsTo {
        return $this->belongsTo("App\Models\TipoServicio");
    }


    function vehiculo(): BelongsTo {
        return $this->belongsTo("App\Models\Vehiculo");
    }

    function cliente(): BelongsTo {
        return $this->belongsTo("App\Models\Cliente");
    }
}
