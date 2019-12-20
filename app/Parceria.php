<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parceria extends Model
{
    protected $fillable = [ 'titulo', 'descricao', 'imagem' ];
}
