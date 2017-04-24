<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class livroRequest extends FormRequest
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
           'titulo' => 'required|min:2|max:50',
            'autor' => 'required|min:2|max:50',
            'qtd' => 'required|numeric',
            'disponivel' => 'required',
        ];
    }
    
    public function messages() {
        return [
            'titulo.required' => 'O campo Titulo é de preenchimento obrigatorio',
            'autor.required' => 'O campo Autor é de preenchimento obrigatorio',
            'qtd.required' => 'O campo Quantidade é de preenchimento obrigatorio',
            'qtd.numeric' => 'O campo Quantidade deve conter apenas números'
        ];
    }
}
