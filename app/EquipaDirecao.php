<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipaDirecao extends Model
{
    protected $table = 'teamdirect';
    protected $fillable = [ 'titulo','cargo', 'imagem' ];
}
