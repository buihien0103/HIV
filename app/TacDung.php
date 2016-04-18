<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class TacDung extends Model {
	protected $table = 'tac_dung';
	protected $fillable = ['ma_tac_dung','ma_benh_nhan','ngay_gap','don_thuoc','mo_ta'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>