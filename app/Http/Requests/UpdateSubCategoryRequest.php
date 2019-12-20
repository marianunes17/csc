<?php
/*Form Request - Cria todas as validações do formulario */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubcategoryRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; /*Se não diz que o acesso é negado à validação */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return
            ["name" => 'required|min:3|max:20|unique:subcategories,name,'. $this->subcategory->id.'|
            regex:/^[A-ZÀ-úa-z\s]+$/',
            "description" => 'required',
            "data"=>'required|date|after_or_equal:today|date_format:"Y-m-d"'];
    }

    public function messages() {
        return ['name.regex' => 'Name should contain only letters and spaces'];

    }
}
