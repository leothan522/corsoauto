<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sede extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sedes';
    protected $fillable = [
        'codigo',
        'nombre',
        'direccion',
        'adicional',
        'estatus',
        'estados_id',
        'municipios_id',
        'parroquias_id',
        'ciudades_id'
    ];

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estados_id', 'id');
    }

    public function municipio(): BelongsTo
    {
        return $this->belongsTo(Municipio::class, 'municipios_id', 'id');
    }

    public function parroquia(): BelongsTo
    {
        return $this->belongsTo(Parroquia::class, 'parroquias_id', 'id');
    }

    public function ciudad(): BelongsTo
    {
        return $this->belongsTo(Ciudad::class, 'ciudades_id', 'id');
    }

    public function scopeBuscar($query, $keyword)
    {
        return $query->where('nombre', 'LIKE', "%$keyword%")
            ->orWhere('codigo', 'LIKE', "%$keyword%");
    }

}
