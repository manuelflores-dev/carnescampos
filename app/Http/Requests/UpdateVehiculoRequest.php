<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehiculoRequest extends FormRequest
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
            'marca' => ['required', 'max:30'],
            'modelo' => ['required', 'max:30'],
            'serie' => ['required', 'max:30'],
            'year' => ['required', 'max:4'],
            'placas' => ['required', 'max:30'],
            'kilometros' => ['required', 'max:30'],
            'estatus' => ['required', 'max:30']
        ];
    }
}
