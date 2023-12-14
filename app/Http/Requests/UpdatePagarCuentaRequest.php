<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePagarCuentaRequest extends FormRequest
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
            'cliente_id' => ['sometimes', 'required', 'exists:proveedor,id'],
            'numero_factura' => ['sometimes', 'required', 'unique:pagar_cuentas,numero_factura,' . $this->route('pagar_cuentas')],
            'fecha_emision' => ['sometimes', 'required', 'date'],
            'fecha_vencimiento' => ['sometimes', 'required', 'date', 'after_or_equal:fecha_emision'],
            'monto_total' => ['sometimes', 'required', 'numeric', 'min:0'],
            'monto_pagado' => ['nullable', 'numeric', 'min:0'],
            'detalles_adicionales' => ['required'],
            'estatus' => ['required'],
        ];
    }
}
