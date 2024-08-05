<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['clt_correo', 'password'];

    function vehiculos(): HasMany {
        return $this->hasMany("\App\Models\Vehiculo");
    }
}
