<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usuarioRequest extends FormRequest
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
           'login' => 'required|min:2|max:50',       
            'senha' => 'required|min:3|max:30',
            'email' => 'max:50',
        ];
    }
    
    public function messages() {
        return [
            'login.required' => 'O login é de preenchimento obrigatorio',
            'senha.required' => 'A senha é de preenchimento obrigatorio',
            'email.max' => 'O email deve conter no maximo 50 caracteres',
            'senha.min' => 'A senha deve conter no minimo 3 caracteres',
            'senha.max' => 'A senha deve conter no maximo 30 caracteres'
        ];
    }
}
