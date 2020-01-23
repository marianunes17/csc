<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipa extends Model
{
    protected $fillable = [ 'nome', 'descricao', 'imagem' ];
    //protected $timestamps=false;
}
