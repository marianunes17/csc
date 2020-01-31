<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestemunhosRequest extends FormRequest
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

  "nome" => 'required|min:3|max:50|regex:/^[A-ZÀ-úa-z\s\-]+$/',
        "sobrenome" => 'required|min:3|max:50|regex:/^[A-ZÀ-úa-z\s\-]+$/',
        "email" => 'required|email',
        "testemunho"=>'required|min:3|max:150|regex:/^[A-ZÀ-úa-z\s\-\!\.\?]+$/',
        ];
    }
}
