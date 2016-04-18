<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class CoSo extends Model {
	protected $table = 'co_so';
	protected $fillable = ['ma_co_so','ten_dich_vu','dia_chi','gps','hoat_dong','thanh_lap','website','hinh_anh', 'gioi_thieu', 'so_dien_thoai', 'email', 'skype'];
	public $timestamps = false;
}

?>