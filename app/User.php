<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail{
     use Notifiable;
	 use SoftDeletes;
	 protected $fillable = ['name', 'email', 'password', 'role', 'photo'];
 	public function posts(){
	return $this->hasMany("App\Post","user_id");
 }

public function roleToStr(){
 	switch($this->role){
	 	case 'Normal':
	 	return 'Normal';
	 	case 'Administrador':
	 	return 'Admin';
 	}
 }
 public function isAdmin(){
 	return $this->role=='Administrador';
 }
}
