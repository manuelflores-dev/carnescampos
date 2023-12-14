<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            //return [
            'nombre' => ['required', 'string', 'max:255'],
            'rfc' => ['required', 'string', 'min:13', 'max:13', 'uppercase', 'unique:clientes'],
            'telefono' => ['required', 'string', 'min:10', 'max:10'],
            'direccion' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:clientes']

        ];
    }
}
