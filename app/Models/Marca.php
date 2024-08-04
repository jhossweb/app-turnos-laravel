<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = ['mrc_nombre', 'tpv_id'];

    function tpv(): BelongsTo {
        return $this->belongsTo('\App\Models\TipoVehiculo', "tpv_id");
    }

    function modelos (): HasMany {
        return $this->hasMany("\App\Models\Modelo");
    }
}
