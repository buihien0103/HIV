<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class DichVu extends Model {
	protected $table = 'dich_vu';
	protected $fillable = ['ma_dich_vu', 'ma_benh_nhan', 'ngay_kham', 'co_so_kham', 'chat_luong', 'huong_dan', 'dich_vu'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>