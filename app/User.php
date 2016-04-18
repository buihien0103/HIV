<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class User extends Model {
	protected $table = 'users';
	protected $fillable = ['user_id','ma_benh_nhan','username','password','email','access_token','expired_in','device_id'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>