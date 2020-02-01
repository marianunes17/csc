<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = [ 'nome'];

    public function Documentos(){
        return $this->hasMany("App\Documento","tipo_id");
    }

    public function tipoParent(){ /*Relacionamento com a tabela tipo*/
        return $this->belongsTo("App\Tipo","tipo_id");
    }
    /*Metodo para adicionar a todos os posts*/
}
