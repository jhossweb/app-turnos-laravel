<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tpv_id',
        'vhl_placa',
        'vhl_year',
        'cliente_id'
    ];

   
    function tpv(): BelongsTo {
        return $this->belongsTo("\App\Models\TipoVehiculo", "tpv_id");
    }

    function servicios(): HasMany {
        return $this->hasMany("App\Models\Servicio");
    }

    function cliente(): BelongsTo {
        return $this->belongsTo("\App\Models\Cliente");
    }
}
