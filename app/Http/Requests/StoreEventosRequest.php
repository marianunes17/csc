<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventosRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [

            "titulo" => 'required|min:3|max:20|unique:eventos,name|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descricao" => 'required'
        ];
    }

    public function messages() {
        return ['titulo.regex' => 'Name should contain only letters and spaces'];
    }
}
