<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['clt_correo', 'password'];

    function vehiculos(): HasMany {
        return $this->hasMany("\App\Models\Vehiculo");
    }

    function servicios(): HasMany {
        return $this->hasMany("App\Models\Servicio");
    }

    function turnos(): HasMany {
        return $this->hasMany("App\Models\Turno");
    }


    // Mutators
    function setPasswordAttribute(string $pass) {
        $this->attributes["password"] = Hash::make($pass);
    }
}
