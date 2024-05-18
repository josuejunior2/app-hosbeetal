<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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
            'nome' => 'required|min:10|max:60',
            'especialidade' => 'required|min:5|max:60',
            'UF' => 'required|in:AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO',
            'numero_crm' => 'required|numeric|digits:6'
        ];
    }
    /**
     * Get the messages array.
     *
     */
    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute deve ser preenchido.',
            'nome.min' => 'O campo nome deve ter no mínimo 10 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 60 caracteres.',
            'especialidade.min' => 'O campo especialidade deve ter no mínimo 5 caracteres.',
            'especialidade.max' => 'O campo especialidade deve ter no máximo 60 caracteres.',
            'numero_crm.digits' => 'O número de CRM deve ter 6 dígitos numéricos.',
            'numero_crm.numeric' => 'O número de CRM deve ter 6 dígitos numéricos.',
            'UF.in' => 'Selecione o UF do estado.'
        ];
    }
    // public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    // {
    //     dd($validator->errors());
    // }
}
