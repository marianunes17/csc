<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTipoRequest extends FormRequest
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
        "nome" => 'required|min:3|max:20|regex:/^[A-ZÀ-úa-z\s]+$/',
        "descricao" => 'required',
        'tipo' => 'nullable|exists:tipos,id'
        ];
    }

    public function messages() {
        return ['name.regex' => 'O nome deve conter apenas letras e espaços'];

    }
}
