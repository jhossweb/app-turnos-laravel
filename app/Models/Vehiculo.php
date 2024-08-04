<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'vhl_placa',
        'vhl_year',
        'tpv_id'
    ];

   
    function tpv(): BelongsTo {
        return $this->belongsTo("\App\Models\TipoVehiculo", "tpv_id");
    }
}
