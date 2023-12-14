<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recorrido extends Model
{
    use HasFactory;

    protected $fillable = [
        'kilometraje_actual',
        'kilometraje_regreso',
        'litros_combustible',
        'costo_combustible',
        'gasolinera',
        'estatus',
        'empleado_id',
        'vehiculo_id',
    ];

    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Empleado::class);
    }

    public function vehiculo(): BelongsTo
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
