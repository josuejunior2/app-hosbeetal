<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'email' => 'required|email',
            'cpf' => 'required|regex:/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/',
            'data_nascimento' => 'required',
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
            'cpf.regex' => 'O campo CPF deve ter 11 caracteres numéricos, 2 pontos e 1 hífen.',
            'nome.min' => 'O campo nome deve ter no mínimo 10 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 60 caracteres.',
            'email.email' => 'O campo email deve ser preenchido com um endereço de email.',
            'data_nascimento.required' => 'O campo data de nascimento deve ser preenchido.',
        ];
    }
    // public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    // {
    //     dd($validator->errors());
    // }
}
