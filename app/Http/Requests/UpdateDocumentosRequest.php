<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocumentosRequest extends FormRequest
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
            "nome" => 'required|min:3|max:150|unique:documentos,nome,' .
                $this->documento->id . '|regex:/^[A-ZÀ-úa-z0-9\s]+$/',
            "file" => 'required',
            "tipo" => 'required',

        ];
    }

    public function messages()
    {
        return ['name.regex' => 'Name should contain only letters and spaces'];
    }
}
