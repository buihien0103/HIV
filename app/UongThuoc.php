<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class UongThuoc extends Model {
	protected $table = 'uong_thuoc';
	protected $fillable = ['ma_nhac_nho','ma_benh_nhan','ten_thuoc','hinh_anh_thuoc','gio_uong','so_luong',
	'lap_lai','ngay_bat_dau','ngay_ket_thuc','tong_so_thuoc','am_thanh','xac_nhan','so_thuoc_con_lai','ngay_tai_kham',
	'co_so_tai_kham','dia_chi_tai_kham','bac_si_tai_kham'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>