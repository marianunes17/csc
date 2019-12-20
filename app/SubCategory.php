<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [ 'name', 'description' ];

    public function eventos(){
        return $this->hasMany("App\Eventos","subcategory_id");
    }
    /*Metodo para adicionar a todos os posts*/
}
