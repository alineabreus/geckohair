<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'role' => 'required',
            'salary' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor, informe um nome.',
            'email.required' => 'Por favor, informe um e-mail.',
            'phone.required' => 'Por favor, informe um número de telefone.',
            'mobile.required' => 'Por favor, informe um número de celular.',
            'role.required' => 'Por favor, informe um cargo.',
            'salary.required' => 'Por favor, informe o salário.'
        ];
    }
}
