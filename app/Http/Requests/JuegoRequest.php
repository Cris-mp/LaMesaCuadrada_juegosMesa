<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JuegoRequest extends FormRequest
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
        'nombre' => 'required|string|max:255',
        'precio' => 'required|numeric|min:0',
        'unidades' => 'required|integer|min:0', 
        'duracion' => 'required|string|max:255',
        'edad_min' => 'required|integer|min:0', 
        'jugadores_max' => 'required|integer|min:0', 
        'editorial_id' => 'required|exists:editorials,id',
        'tipo_id' => 'required|exists:tipos,id',
    ];
}
}
