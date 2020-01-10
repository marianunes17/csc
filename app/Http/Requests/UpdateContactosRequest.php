<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactosRequest extends FormRequest
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

        "Nome" => 'required|min:3|max:50|regex:/^[A-ZÀ-úa-z\s\-]+$/',
        "Email" => 'required',
        "Assunto" => 'required|min:3|max:50|regex:/^[A-ZÀ-úa-z\s\-]+$/',   
        "Mensagem"=>'required|min:3|max:250|regex:/^[A-ZÀ-úa-z\s\-]+$/',
        "Data" => 'required'
    }
}