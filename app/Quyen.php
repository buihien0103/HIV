<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Quyen extends Model {
	protected $table = 'quyen';
	protected $fillable = ['ma_quyen','ten_quyen','trang_thai'];
	public $timestamps = false;
	
}

?>