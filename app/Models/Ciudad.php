<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = "ciudades";
    protected $fillable = ['id', 'estados_id', 'nombre', 'capital'];

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estados_id', 'id');
    }

    public function sedes(): HasMany
    {
        return $this->hasMany(Sede::class, 'cuidades_id', 'id');
    }

}
