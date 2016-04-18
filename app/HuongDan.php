<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class HuongDan extends Model{
	protected $table = 'huong_dan';
	protected $fillable = ['ma_huong_dan','ten_benh','khai_niem','doi_tuong', 'trieu_chung', 'duong_lay', 'chuan_doan', 
	'dieu_tri', 'bien_chung', 'du_phong', 'website', 'quy_trinh'];
	public $timestamps = false;
	public function group(){
		return $this->hasMany('App\Group');
	}
	
}

?>