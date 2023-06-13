<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveConsultaRequest extends FormRequest
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
            'paciente_id'=>'required',
            'dtalla'=>'nullable|decimal:2,4',
            'dpeso'=>'nullable|nullable|decimal:2,4',
            'eedad'=>'nullable|max:3',
            'calergias'=>'nullable',
            'cpresion'=>'nullable',
            'cdiagnostico'=>'required',
            'ctratamiento'=>'required',
            'cobservacion'=>'nullable',
            'idusuario'=>'required|numeric',
        ];
    }
}
