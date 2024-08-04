<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoVehiculo extends Model
{
    use HasFactory;

    protected $fillable = ['vhl_nombre'];

    function vehiculos(): HasMany {
        return $this->hasMany('\App\Models\Vehiculo', "tpv_id");
    }

    function marcas(): HasMany {
        return $this->hasMany("\App\Models\Marca", "tpv_id");
    }
}