<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {
	use Authenticatable, CanResetPassword;
	protected $table = 'tbl_users';
	protected $fillable = ['fld_username','fld_password','fld_email'];
	public $timestamps = false;
	public function property(){
		return $this->hasMany('App\Property');
	}
	
}

?>