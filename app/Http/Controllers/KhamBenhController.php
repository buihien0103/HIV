<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\KhamBenh;


class KhamBenhController extends Controller {

	public function getList(){
		$data = KhamBenh::select('ma_kham_benh','ma_benh_nhan','ngay_kham','ly_do','xet_nghiem_mau','cd4', 'tai_luong_virus', 
	'nuoc_tieu', 'xet_nghiem_khac', 'kham_hiv', 'kham_viem_gan_b', 'kham_viem_gan_c')->orderBy('ma_kham_benh','DESC')->get()->toArray();
		return view('admin.khambenh.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.khambenh.add'); 
	}
	public function postAdd(Request $request){
		$kb = new KhamBenh;
		$kb->ma_benh_nhan = $request->txtMaBN;
		$kb->ngay_kham = $request->txtNgayKham;
		$kb->ly_do = $request->txtLyDo;
		$kb->xet_nghiem_mau = $request->txtXNMau;
		$kb->cd4 = $request->txtcd4;
		$kb->tai_luong_virus = $request->txttailuongVR;
		$kb->nuoc_tieu = $request->txtNuocTieu;
		$kb->xet_nghiem_khac = $request->txtXNKhac;
		$kb->kham_hiv = $request->txtHIV;
		$kb->kham_viem_gan_b = $request->txtVGB;
		$kb->kham_viem_gan_c = $request->txtVGC;
		$kb->save();
		return redirect()->route('admin.khambenh.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin khám bệnh']);
	}
	public function getDelete($id){
		$kb = KhamBenh::where('ma_kham_benh', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.khambenh.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin khám bệnh']);
		
	}
	public function getEdit($id){
		$data = KhamBenh::where('ma_kham_benh', '=', $id)->first();
		return view('admin.khambenh.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtMaBN"=>"required"],
			["txtMaBN.required"=>"Vui lòng nhập mã bệnh nhân"]
		);
		$ma = $request->txtMaBN;
		$nk = $request->txtNgayKham;
		$ld = $request->txtLyDo;
		$xnm = $request->txtXNMau;
		$cd4 = $request->txtcd4;
		$vr = $request->txttailuongVR;
		$nt = $request->txtNuocTieu;
		$xnk = $request->txtXNKhac;
		$hiv = $request->txtHIV;
		$b = $request->txtVGB;
		$c = $request->txtVGC;
		$kb = KhamBenh::where('ma_kham_benh', '=', $id)->update(array('ma_benh_nhan'=> $ma, 'ngay_kham'=>$nk, 'ly_do'=> $ld, 'xet_nghiem_mau'=>$xnm,
		 'cd4'=> $cd4,'tai_luong_virus'=>$vr, 'nuoc_tieu'=>$nt, 'xet_nghiem_khac'=>$xnk, 'kham_hiv'=>$hiv, 'kham_viem_gan_b'=>$b, 'kham_viem_gan_c'=>$c));
		return redirect()->route('admin.khambenh.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin khám bệnh!']);
	}

}
