<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class DanToc extends Model {
	protected $table = 'dan_toc';
	protected $fillable = ['ma_dan_toc','ten_dan_toc','trang_thai'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>