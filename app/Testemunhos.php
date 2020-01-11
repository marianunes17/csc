<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testemunhos extends Model
{
   protected $fillable = [ 'Nome', 'Sobrenome', 'Email', 'Testemunho' , 'Data' ];
    //protected $timestamps=false;
}
