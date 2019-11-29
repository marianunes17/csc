<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model {
    protected $fillable = [ 'name', 'description' ];
    
    public function posts(){
        return $this->hasMany("App\Post","eventos_id");
    }
}
