<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEquipaDirecaoRequest extends FormRequest
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
        "titulo" => 'required|min:3|max:30|regex:/^[A-ZÀ-úa-z\s\-\ª\º\.]+$/',
        "cargo" => 'required|min:3|max:30|regex:/^[A-ZÀ-úa-z\s\-\ª\º\.]+$/',
        "file" => 'required',
        "imagem"=>'required',
        ];
    }
}
