<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactosRequest extends FormRequest
{ protected $redirect = "/#zonaContactos";
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
        "Email" => 'required|email',
        "Assunto" => 'required|min:3|max:50|regex:/^[A-ZÀ-úa-z\s\-]+$/',   
        "Mensagem"=>'required|min:3|max:500|regex:/^[A-ZÀ-úa-z\s\-]+$/',
         ];
    }
}