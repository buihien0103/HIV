<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class KhamBenh extends Model {
	protected $table = 'kham_benh';
	protected $fillable = ['ma_kham_benh','ma_benh_nhan','ngay_kham','ly_do','xet_nghiem_mau','cd4', 'tai_luong_virus', 
	'nuoc_tieu', 'xet_nghiem_khac', 'kham_hiv', 'kham_viem_gan_b', 'kham_viem_gan_c'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>