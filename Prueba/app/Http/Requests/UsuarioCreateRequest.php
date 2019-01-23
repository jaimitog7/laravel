<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioCreateRequest extends FormRequest
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
          'nombres' => 'required|max:40',
          'apellido_paterno' => 'required|max:40',
          'apellido_materno'=> 'required|max:40',
          'rut'=> 'required|string|max:13|min:10|',
          'telefono'=> 'required|numeric',
          'email'=> 'required|email|max:40',
          'status'=> 'required|boolean',
        //    'fecha_nacimiento'=> 'date'
        ];
    }
}
