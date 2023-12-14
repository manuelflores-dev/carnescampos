<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_mantenimiento',
        'detalle_mantenimiento',
        'kilometraje',
        'costo_mantenimiento',
        'fecha_mantenimiento',
        'vehiculo_id'
    ];

    public function vehiculo(): BelongsTo
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
