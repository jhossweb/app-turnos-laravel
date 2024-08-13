<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoServicio extends Model
{
    use HasFactory;

    protected $fillable = ["tps_nombre"];

    function servicios(): HasMany {
        return $this->hasMany("App\Models\Servicio");
    }
}
