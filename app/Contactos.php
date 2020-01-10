<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $fillable = [ 'Nome', 'Email', 'Assunto', 'Mensagem' , 'Data' ];
    //protected $timestamps=false;
}
