<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormConcurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'curp' => 'required|max:18',
            'telefono_titular' => 'required',
            'domicilio_casa' => 'required',
            'correo_titular' => 'required',
            'nombre_personaje' => 'required',
            'valores_personaje' => 'required',
            'descripcion_personaje' => 'required',
        ];
    }
}
