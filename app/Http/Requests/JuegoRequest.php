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
			'nombre' => 'required|string',
			'precio' => 'required',
			'unidades' => 'required',
			'duracion' => 'required',
			'edad_min' => 'required',
			'jugadores_max' => 'required',
			'editorial_id' => 'required',
			'tipo_id' => 'required',
        ];
    }
}
