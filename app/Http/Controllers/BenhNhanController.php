<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\BenhNhanRequest;
use App\BenhNhan;
use App\HocVan;
use App\TonGiao;
use App\DanToc;
use App\NgheNghiep;
use Excel;
use App\Import;
class BenhNhanController extends Controller {

	public function getList(){
		$data = BenhNhan::select('ma_benh_nhan','ho_ten', 'nam_sinh', 'gioi_tinh', 'ma_hoc_van', 'ma_dan_toc', 'ma_ton_giao', 'ma_nghe_nghiep', 'chieu_cao', 'can_nang',
	'bmi', 'viem_gan_b', 'viem_gan_c', 'gd_hiv', 'gd_viem_gan_b', 'gd_viem_gan_c', 'di_ung_thuoc', 'di_ung_thuc_an', 'di_ung_thoi_tiet',
	'dieu_tri_lao', 'nhiem_trung_co_hoi', 'hut_thuoc')->orderBy('ma_benh_nhan','DESC')->get()->toArray();
		return view('admin.benhnhan.list', compact('data'));
	}
	public function getAdd(){
		$hocvan = HocVan::select('ma_hoc_van','ten_hoc_van')->get()->toArray();
		$tongiao = TonGiao::select('ma_ton_giao','ten_ton_giao')->get()->toArray();
		$dantoc = DanToc::select('ma_dan_toc','ten_dan_toc')->get()->toArray();
		$nghenghiep = NgheNghiep::select('ma_nghe_nghiep','ten_nghe_nghiep')->get()->toArray();
		return view('admin.benhnhan.add', compact('data', 'hocvan', 'tongiao', 'dantoc', 'nghenghiep')); 
	}
	public function postAdd(BenhNhanRequest $request){
		$bn = new BenhNhan;
		$bn->ho_ten = $request->txtHoTen;
		$bn->nam_sinh = $request->txtNamSinh;
		$bn->gioi_tinh = $request->rdoGioiTinh;
		$bn->ma_hoc_van = $request->sltHocVan;
		$bn->ma_dan_toc = $request->sltDanToc;
		$bn->ma_ton_giao = $request->sltTonGiao;
		$bn->ma_nghe_nghiep = $request->sltNgheNghiep;
		$bn->chieu_cao = $request->txtChieuCao;
		$bn->can_nang = $request->txtCanNang;
		$bn->bmi = $request->txtBMI;
		$bn->viem_gan_b = $request->rdoVienGanB;
		$bn->viem_gan_c = $request->rdoVienGanC;
		$bn->gd_hiv = $request->rdoGdhiv;
		$bn->gd_viem_gan_b = $request->rdoGDVGB;
		$bn->gd_viem_gan_c = $request->rdoGDVGC;
		$bn->di_ung_thuoc = $request->txtDiUngThuoc;
		$bn->di_ung_thuc_an = $request->txtDiUngThucAn;
		$bn->di_ung_thoi_tiet = $request->txtDiUngThoiTiet;
		$bn->dieu_tri_lao = $request->rdoDTLao;
		$bn->nhiem_trung_co_hoi= $request->rdoNTCH;
		$bn->hut_thuoc = $request->rdoHutThuoc;

		$bn->save();
		return redirect()->route('admin.benhnhan.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin bệnh nhân']);
	}
	public function getDelete($id){
		$bn = BenhNhan::where('ma_benh_nhan', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.benhnhan.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin bệnh nhân']);
		
	}
	public function getEdit($id){
		$data = BenhNhan::where('ma_benh_nhan', '=', $id)->first();
		$hocvan = HocVan::select('ma_hoc_van','ten_hoc_van')->get()->toArray();
		$tongiao = TonGiao::select('ma_ton_giao','ten_ton_giao')->get()->toArray();
		$dantoc = DanToc::select('ma_dan_toc','ten_dan_toc')->get()->toArray();
		$nghenghiep = NgheNghiep::select('ma_nghe_nghiep','ten_nghe_nghiep')->get()->toArray();
		return view('admin.benhnhan.edit', compact('data', 'hocvan', 'tongiao', 'dantoc', 'nghenghiep')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtHoTen"=>"required"],
			["txtHoTen.required"=>"Nhập họ tên"]
		);
		$ht = $request->txtHoTen;
		$ns = $request->txtNamSinh;
		$gt = $request->rdoGioiTinh;
		$hv = $request->sltHocVan;
		$dt = $request->sltDanToc;
		$tg = $request->sltTonGiao;
		$nn = $request->sltNgheNghiep;
		$cc = $request->txtChieuCao;
		$cn = $request->txtCanNang;
		$bmi = $request->txtBMI;
		$vgb = $request->rdoVienGanB;
		$vgc = $request->rdoVienGanC;
		$gdhiv = $request->rdoGdhiv;
		$gdvgb = $request->rdoGDVGB;
		$gdvgc = $request->rdoGDVGC;
		$duthuoc = $request->txtDiUngThuoc;
		$duta = $request->txtDiUngThucAn;
		$dutt = $request->txtDiUngThoiTiet;
		$dtl = $request->rdoDTLao;
		$ntch = $request->rdoNTCH;
		$hutthuoc = $request->rdoHutThuoc;
		$bn = BenhNhan::where('ma_benh_nhan', '=', $id)->update(array('ho_ten'=> $ht, 'nam_sinh'=>$ns, 'gioi_tinh'=> $gt, 'ma_hoc_van'=>$hv, 'ma_dan_toc'=> $dt,
		'ma_ton_giao'=>$tg,'ma_nghe_nghiep'=> $nn, 'chieu_cao'=>$cc, 'can_nang'=> $cn, 'bmi'=>$bmi, 'viem_gan_b'=> $vgb, 'viem_gan_c'=>$vgc, 'gd_hiv'=> $gdhiv,
		'gd_viem_gan_b'=>$gdvgb,'gd_viem_gan_c'=> $gdvgc, 'di_ung_thuoc'=>$duthuoc,'di_ung_thuc_an'=> $duta, 'di_ung_thoi_tiet'=>$dutt, 
		'dieu_tri_lao'=> $dtl, 'nhiem_trung_co_hoi'=>$ntch, 'hut_thuoc'=> $hutthuoc));
		return redirect()->route('admin.benhnhan.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin bệnh nhân!']);
	}
	public function export(){
		

$users = BenhNhan::select('ma_benh_nhan','ho_ten', 'nam_sinh', 'gioi_tinh', 'ma_hoc_van', 'ma_dan_toc', 'ma_ton_giao', 'ma_nghe_nghiep', 'chieu_cao', 'can_nang',
	'bmi', 'viem_gan_b', 'viem_gan_c', 'gd_hiv', 'gd_viem_gan_b', 'gd_viem_gan_c', 'di_ung_thuoc', 'di_ung_thuc_an', 'di_ung_thoi_tiet',
	'dieu_tri_lao', 'nhiem_trung_co_hoi', 'hut_thuoc')->orderBy('ma_benh_nhan','DESC')->get();
Excel::create('Danh sách bệnh nhân', function($excel) use($users) {
    $excel->sheet('Sheet 1', function($sheet) use($users) {
        $sheet->fromArray($users);
    });
})->download('xlsx');
  }
  public function getImport(){
  	Excel::load('public/benhnhan.xlsx', function($i){
  		$return = $i->get();
  		foreach ($return as $key => $value) {
	  		$bn = new BenhNhan;
			$bn->ho_ten = $value->ho_ten;
			$bn->nam_sinh = $value->nam_sinh;
			$bn->gioi_tinh = $value->gioi_tinh;
			$bn->ma_hoc_van = $value->ma_hoc_van;
			$bn->ma_dan_toc = $value->ma_dan_toc;
			$bn->ma_ton_giao = $value->ma_ton_giao;
			$bn->ma_nghe_nghiep = $value->ma_nghe_nghiep;
			$bn->chieu_cao = $value->chieu_cao;
			$bn->can_nang = $value->can_nang;
			$bn->bmi = $value->bmi;
			$bn->viem_gan_b = $value->viem_gan_b;
			$bn->viem_gan_c = $value->viem_gan_c;
			$bn->gd_hiv = $value->gd_hiv;
			$bn->gd_viem_gan_b = $value->gd_viem_gan_b;
			$bn->gd_viem_gan_c = $value->gd_viem_gan_c;
			$bn->di_ung_thuoc = $value->di_ung_thuoc ;
			$bn->di_ung_thuc_an = $value->di_ung_thuc_an;
			$bn->di_ung_thoi_tiet = $value->di_ung_thoi_tiet;
			$bn->dieu_tri_lao = $value->dieu_tri_lao ;
			$bn->nhiem_trung_co_hoi= $value->nhiem_trung_co_hoi;
			$bn->hut_thuoc = $value->hut_thuoc;
			$bn->save();
			
  		}
  	})->get();
return redirect()->route('admin.benhnhan.list');
  }
  public function postImport(){

  	
  }

}
