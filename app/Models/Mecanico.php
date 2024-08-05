<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mecanico extends Model
{
    use HasFactory;

    protected $fillable = [
        'mnc_nombre',
        'mnc_apellido',
        'mnc_correo',
        'mnc_telefono',
        'mnc_password'
    ];

    function servicios(): BelongsToMany {
        return $this->belongsToMany("App\Models\Servicio");
    }
}
