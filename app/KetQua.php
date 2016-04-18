<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class KetQua extends Model {
	protected $table = 'ket_qua';
	protected $fillable = ['ma_ket_qua','ma_benh_nhan','cd4','tai_luong_virus','suc_khoe','tuan_thu_dieu_tri'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>