<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadRequest extends FormRequest
{
    
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
            'nombre'=>'required|string|max:255',
            'descripcion'=> 'nullable|string|max
            :1000,',
            'dia_semana'=>'required|string',
            'horaio'=>'required|string|max100'
            
        ];
    }
}
