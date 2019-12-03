<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model {
    protected $fillable = [ 'nome', 'descricao', 'data', 'categoria'];

    public function posts(){
        return $this->hasMany("App\Post","eventos_id");
    }
}
