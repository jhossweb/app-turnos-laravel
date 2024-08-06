<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turno extends Model
{
    use HasFactory;

    function servicio(): BelongsTo {
        return $this->belongsTo("App\Models\Servicio");
    }

    function cliente(): BelongsTo {
        return $this->belongsTo("App\Models\Cliente");
    }
}
