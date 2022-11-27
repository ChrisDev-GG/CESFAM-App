<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroAdminRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'nullable|unique:users,email',
            'nombre_de_usuario' => 'required|unique:users,username',
            'contraseña' => 'required|min:6|same:contraseña',
            'confirmar_contraseña' => 'required|min:6|same:contraseña',
            'telefono' => 'nullable|min:8',
            'fecha_de_nacimiento' => 'nullable',
        ];
    }
}
