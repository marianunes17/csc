<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipa extends Model
{
    protected $fillable = [ 'titulo','cargo', 'descricao', 'imagem' ];
    //protected $timestamps=false;
}
