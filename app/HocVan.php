<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class HocVan extends Model {
	protected $table = 'hoc_van';
	protected $fillable = ['ma_hoc_van','ten_hoc_van','trang_thai'];
	public $timestamps = false;
	public function benhnhan(){
		return $this->belongTo('App\BenhNhan');
	}
	
}

?>