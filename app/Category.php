<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'name', 'description' ];

    public function eventos(){
        return $this->hasMany("App\Eventos","category_id");
    }
    /*Metodo para adicionar a todos os posts*/
}
