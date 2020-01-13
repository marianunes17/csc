<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testemunho extends Model
{
   protected $fillable = [ 'nome', 'sobrenome', 'email', 'testemunho' , 'data' ];
    //protected $timestamps=false;
}
