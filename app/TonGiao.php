<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class TonGiao extends Model {
	protected $table = 'ton_giao';
	protected $fillable = ['ma_ton_giao','ten_ton_giao','trang_thai'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>