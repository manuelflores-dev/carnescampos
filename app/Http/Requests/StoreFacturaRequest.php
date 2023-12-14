<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFacturaRequest extends FormRequest
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
            'numero_factura' => ['required'],
            'fecha_factura' => ['required'],
            'monto_factura' => ['required'],
            'detalles_factura' => ['required'],
            'estatus_factura' => ['required'],
            'proveedor_id' => ['required']
        ];
    }
}
