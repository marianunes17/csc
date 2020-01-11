<?php
/*Form Request - Cria todas as validações do formulario */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest {
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
        return[
            "name" => 'required|min:3|max:20|unique:categories,name,'. $this->category->id.'|
            regex:/^[A-ZÀ-úa-z\s]+$/',
            "description" => 'required',
            'category' => 'nullable|exists:categories,id'
            ]
    }
    /*unique:categories,name - Unico na tabela das categories,  no campo name
    ,'. $this->category->id.' - Terceiro parametro do unique (Depois do 'name')
        Exclui a linha que tem aquele id */

    /**regex - Define quais os carateres que podem ser utilizados */

    public function messages() {
        return ['name.regex' => 'Name should contain only letters and spaces'];

    }
}
