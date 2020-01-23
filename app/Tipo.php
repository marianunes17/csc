<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = [ 'nome', 'descricao' ];

    public function Documentos(){
        return $this->hasMany("App\documento","tipo_id");
    }

    public function tipoParent(){ /*Relacionamento com a tabela tipo*/
        return $this->belongsTo("App\tipo","tipo_id");
    }
    /*Metodo para adicionar a todos os posts*/
}
