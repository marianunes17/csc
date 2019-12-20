<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'name', 'description' ];

    public function eventos(){
        return $this->hasMany("App\Eventos","category_id");
    }
    public function categoryParent(){ /*Relacionamento com a tabela Category*/
        return $this->belongsTo("App\Category","category_id");
    }
    /*Metodo para adicionar a todos os posts*/
}
