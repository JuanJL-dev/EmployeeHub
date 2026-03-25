<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmpleadoRequest extends FormRequest
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
    // 'sometimes' le dice a Laravel: "Valida este campo SOLO si el usuario lo envió"
    return [
        'nombre' => 'sometimes|required|string|max:255',
        'apellido' => 'sometimes|required|string|max:255',
        'correo' => 'sometimes|required|email|max:255',
        'cargo' => 'sometimes|required|string|max:255',
        'salario' => 'sometimes|required|numeric',
        'activo' => 'sometimes|boolean',
        'departamento_id' => 'sometimes|required|integer|exists:departamentos,id'
    ];
}
}
