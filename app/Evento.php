<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'data', 'imagem', 'categoria_id'
    ];
    /*É sempre obrigatorio indicar os campos que estão a ser preenchidos*/

    public function categoria(){ /*Relacionamento com a tabela categoria*/
        return $this->belongsTo("App\Categoria","categoria_id");
    }
}
