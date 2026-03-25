<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleadoRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'correo' => 'required|email|max:255|unique:empleados,correo', 
        'cargo' => 'required|string|max:255',
        'salario' => 'required|numeric|min:0',
        'departamento_id' => 'required|integer|exists:departamentos,id'
    ];
}
}
