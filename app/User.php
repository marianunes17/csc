 <?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
     use Notifiable;
	 use SoftDeletes;
	 protected $fillable = ['name', 'email', 'password', 'role', 'photo'];
 	public function posts(){
	return $this->hasMany("App\Post","user_id");
 }

public function roleToStr(){
 	switch($this->role){
	 	case 'N':
	 	return 'Normal';
	 	case 'A':
	 	return 'Admin';
 	}
 }
 public function isAdmin(){
 	return $this->role=='A';
 }
}
