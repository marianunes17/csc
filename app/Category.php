<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'nome', 'descricao' ];
     protected $table = 'categoria';

public function eventos(){
return $this->hasMany('App\eventos',"categoria_id");
}

}
