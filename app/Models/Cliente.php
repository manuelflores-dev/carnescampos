<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'rfc',
        'telefono',
        'direccion',
        'correo'

    ];

    public function cobrarcuentas(): HasMany
    {
        return $this->hasMany(CobrarCuenta::class);
    }
}
