<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [ 'nome', 'email', 'assunto', 'mensagem' , 'data' ];
    //protected $timestamps=false;
}
