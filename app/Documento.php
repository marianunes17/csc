<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
    'nome', 'descricao','file', 'data', 'tipo_id'
    ];
    /*É sempre obrigatorio indicar os campos que estão a ser preenchidos*/

    public function tipo(){ /*Relacionamento com a tabela Tipo*/
        return $this->belongsTo("App\Tipo","tipo_id");
    }
}
