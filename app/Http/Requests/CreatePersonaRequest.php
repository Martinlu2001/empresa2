<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
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
            'cPerApellido' => 'required', 
            'cPerNombre' => 'required', 
            'cPerDireccion' => 'required', 
            'dPerFecNac' => 'required',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'nPerEstado' => 'required', 
            'cPerRnd' => 'required',
            'image' =>[ 
                $this->route('persona') ? 'nullable' : 'required',
            'mimes:jpeg,png']
        ];
    }

    public function messages(){
        return [
            'cPerApellido.required' => 'Se necesita los apellidos', 
            'cPerNombre.required' => 'Se necesita el nombre', 
            'cPerDireccion.required' => 'Se necesita la direccion', 
            'dPerFecNac.required' => 'Se necesita la fecha de nacimiento',
            'nPerEdad.required' => 'Se necesita la edad',
            'nPerSueldo.required' => 'Se necesita el sueldo',
            'nPerEstado.required' => 'Se necesita el estado',
            'image.required' => 'Debe subirse la imagen'
        ];
    }
}
