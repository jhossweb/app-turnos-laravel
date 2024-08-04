<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = ['mdl_nombre', 'marca_id'];

    function marcas(): BelongsTo {
        return $this->belongsTo('\App\Models\Marca');
    }
}
