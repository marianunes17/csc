<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model {
    protected $fillable = [
        'nome', 'descricao', 'data', 'imagem', 'categoria_id'];

    public function categoria(){
        return $this->hasMany("App\category","categoria_id");
    }
}
