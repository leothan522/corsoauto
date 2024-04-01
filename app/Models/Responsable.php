<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Responsable extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "responsables";
    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'telefono',
        'cargos_id',
        'sedes_id',
        'estatus',
        'adicional'
    ];

    public function cargo(): BelongsTo
    {
        return $this->belongsTo(Cargo::class, 'cargos_id', 'id');
    }

    public function sede(): BelongsTo
    {
        return $this->belongsTo(Sede::class, 'sedes_id', 'id');
    }

    public function scopeBuscar($query, $keyword)
    {
        return $query->where('cedula', 'LIKE', "%$keyword%")
            ->orWhere('nombre', 'LIKE', "%$keyword%")
            ->orWhere('apellido', 'LIKE', "%$keyword%");
    }

}
