<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome', 'descricao'];

    public function eventos(){
        return $this->hasMany("App\Evento","categoria_id");
    }

    public function categoria_id(){ /*Relacionamento com a tabela categoria*/
        return $this->belongsTo("App\Categoria","categoria_id");
    }
    /*Metodo para adicionar a todos os posts*/
}
