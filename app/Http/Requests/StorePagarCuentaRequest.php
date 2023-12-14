<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePagarCuentaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'proveedor_id' => ['required', 'numeric'], // Ejemplo de regla de validación
            'numero_factura' => ['required', 'unique:pagar_cuentas'], // Validar como único en la tabla cuentas_por_cobrar
            'fecha_emision' => ['required', 'date'],
            'fecha_vencimiento' => ['required', 'date', 'after_or_equal:fecha_emision'], // Fecha de vencimiento posterior o igual a la de emisión
            'monto_total' => ['required', 'numeric', 'min:0'],
            'monto_pagado' => ['nullable', 'numeric', 'min:0'],
            'detalles_adicionales' => ['required'],
            'estatus' => ['required'],
        ];
    }
}
