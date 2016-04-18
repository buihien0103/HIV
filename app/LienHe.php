<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class LienHe extends Model {
	protected $table = 'lien_he';
	protected $fillable = ['ma_lien_he','hotline','cau_hoi','chia_se'];
	public $timestamps = false;
	
}

?>