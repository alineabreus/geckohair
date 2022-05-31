<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'observacao' => 'required',
            'birthday' => 'required',
            'city' => 'required',
            'district' => 'required',
            'street' => 'required',
            'number' => 'required',
            'comp' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor, informe um nome.',
            'email.required' => 'Por favor, informe um e-mail.',
            'phone.required' => 'Por favor, informe um número de telefone.',
            'mobile.required' => 'Por favor, informe um número de celular.',
            'observacao.required' => 'Por favor, informe uma observação.',
            'birthday.required' => 'Por favor, informe a data de nascimento do cliente.',
            'city.required' => 'Por favor, informe a cidade.',
            'district.required' => 'Por favor, informe o bairro.',
            'street.required' => 'Por favor, informe a rua.',
            'number.required' => 'Por favor, informe um número.',
            'comp.required' => 'Por favor, informe o complemento.',
        ];
    }
}
