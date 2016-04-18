<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Import extends Model {
	protected $table = 'benh_nhan';
	protected $fillable =array('ma_benh_nhan','ho_ten', 'nam_sinh', 'gioi_tinh', 'ma_hoc_van', 'ma_dan_toc', 'ma_ton_giao', 'ma_nghe_nghiep', 'chieu_cao', 'can_nang',
	'bmi', 'viem_gan_b', 'viem_gan_c', 'gd_hiv', 'gd_viem_gan_b', 'gd_viem_gan_c', 'di_ung_thuoc', 'di_ung_thuc_an', 'di_ung_thoi_tiet',
	'dieu_tri_lao', 'nhiem_trung_co_hoi', 'hut_thuoc');
	
}

?>