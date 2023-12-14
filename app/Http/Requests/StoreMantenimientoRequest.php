<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMantenimientoRequest extends FormRequest
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
            'tipo_mantenimiento' => ['required'],
            'detalle_mantenimiento' => ['required'],
            'kilometraje' => ['required'],
            'costo_mantenimiento' => ['required'],
            'fecha_mantenimiento' => ['required'],
            'vehiculo_id' => ['required']
        ];
    }
}
