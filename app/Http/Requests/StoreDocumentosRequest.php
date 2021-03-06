<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentosRequest extends FormRequest
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
            "nome" => 'required|min:3|max:150|unique:documentos,nome|regex:/^[A-ZÀ-úa-z0-9\s]+$/',
            "descricao" => 'nullable',
            "file" => 'required',
            "tipo"=>'required',
            "data"=>'required|date|after_or_equal:today|date_format:"Y-m-d"'
        ];
    }
    public function messages() {
        return ['name.regex' => 'Name should contain only letters and spaces'];
    }
}
