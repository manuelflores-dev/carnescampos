<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'rfc',
        'telefono',
        'direccion',
        'correo'

    ];

    public function facturas(): HasMany
    {
        return $this->hasMany(Factura::class);
    }
    public function pagarcuentas(): HasMany
    {
        return $this->hasMany(Factura::class);
    }
}
