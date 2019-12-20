<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubCategoryRequest extends FormRequest
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
    public function rules(){
        return [ "name" => 'required|min:3|max:20|unique:subcategories,name|regex:/^[A-ZÀ-úa-z\s]+$/',
            "description" => 'required'];
    }
/**regex:/^[A-ZÀ-úa-z0-9\s]+$/' - 0-9 - Aceita numeros */

    public function messages(){
        return ['name.regex' => 'Name should contain only letters and spaces'];
    }
}
