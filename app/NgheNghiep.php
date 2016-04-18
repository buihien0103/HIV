<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class NgheNghiep extends Model {
	protected $table = 'nghe_nghiep';
	protected $fillable = ['ma_nghe_nghiep','ten_nghe_nghiep','trang_thai'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>