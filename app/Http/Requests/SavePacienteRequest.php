<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePacienteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'cnombre'=>'required',
            'cprimerapellido'=>'required',
            'csegundoapellido'=>'required',
            'dfechanacimiento'=>'required',
            'csexo'=>'required',
            'cemail'=>['unique:pacientes,cemail','nullable'],
            'idusuario'=>'required',
            'ctelefono'=>'nullable','max:10',
            'cobservacion'=>'nullable','max:255',
        ];
    }
}
