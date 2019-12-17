<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'data', 'imagem', 'category_id'
    ];
    /*É sempre obrigatorio indicar os campos que estão a ser preenchidos*/

    public function category(){ /*Relacionamento com a tabela Category*/
        return $this->belongsTo("App\Category","category_id");
    }
}
