<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class NhatKy extends Model {
	protected $table = 'nhat_ky';
	protected $fillable = ['ma_nhat_ky','ma_benh_nhan','ngay','tinh_trang_suc_khoe','vas','tam_trang', 'tap_the_duc', 'hut_thuoc', 
	'uong_ruou', 'ghi_chu'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>