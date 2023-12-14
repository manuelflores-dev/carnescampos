<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PagarCuenta extends Model
{
    use HasFactory;
    protected $fillable = [
        'proveedor_id',
        'numero_factura',
        'fecha_emision',
        'fecha_vencimiento',
        'monto_total',
        'monto_pagado',
        'detalles_adicionales',
        'estatus',
        // Otros campos que puedan ser llenados masivamente (mass assignment)
    ];

    // Relación con el modelo Cliente (puedes ajustar el nombre y la relación según tu estructura)
    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }
}
