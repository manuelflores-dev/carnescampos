<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'area',
        'telefono',
        'direccion',
        'estatus'
    ];

    public function recorridos(): HasMany
    {
        return $this->hasMany(Recorrido::class);
    }
}
