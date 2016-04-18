<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NhatKy;

class NhatKyController extends Controller {

	public function getList(){
		$data = NhatKy::select('ma_nhat_ky','ma_benh_nhan','ngay','tinh_trang_suc_khoe','vas','tam_trang', 'tap_the_duc', 'hut_thuoc', 
	'uong_ruou', 'ghi_chu')->orderBy('ma_nhat_ky','DESC')->get()->toArray();
		return view('admin.nhatky.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.nhatky.add'); 
	}
	public function postAdd(Request $request){
		$nk = new NhatKy;
		$nk->ma_benh_nhan = $request->txtMaBN;
		$nk->ngay = $request->txtNgay;
		$nk->tinh_trang_suc_khoe = $request->txtTinhTrang;
		$nk->vas = $request->txtVAS;
		$nk->tam_trang = $request->txtTamTrang;
		$nk->tap_the_duc = $request->txtTD;
		$nk->hut_thuoc = $request->txtHutThuoc;
		$nk->uong_ruou = $request->txtUongRuou;
		$nk->ghi_chu = $request->txtGhiChu;

		$nk->save();
		return redirect()->route('admin.nhatky.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin nhật ký']);
	}
	public function getDelete($id){
		$nk = NhatKy::where('ma_nhat_ky', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.nhatky.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin nhật ký']);
		
	}
	public function getEdit($id){
		$data = NhatKy::where('ma_nhat_ky', '=', $id)->first();
		return view('admin.nhatky.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtMaBN"=>"required"],
			["txtMaBN.required"=>"Vui lòng nhập mã bệnh nhân"]
		);
		$ma = $request->txtMaBN;
		$ngay = $request->txtNgay;
		$tinh_trang_suc_khoe = $request->txtTinhTrang;
		$vas = $request->txtVAS;
		$tam_trang = $request->txtTamTrang;
		$tap_the_duc = $request->txtTD;
		$hut_thuoc = $request->txtHutThuoc;
		$uong_ruou = $request->txtUongRuou;
		$ghi_chu = $request->txtGhiChu;

		$nk = NhatKy::where('ma_nhat_ky', '=', $id)->update(array('ma_benh_nhan'=> $ma, 'ngay'=>$ngay, 'tinh_trang_suc_khoe'=> $tinh_trang_suc_khoe, 'vas'=>$vas,
		 'tam_trang'=> $tam_trang,'tap_the_duc'=>$tap_the_duc, 'hut_thuoc'=>$hut_thuoc, 'uong_ruou'=>$uong_ruou, 'ghi_chu'=>$ghi_chu));
		return redirect()->route('admin.nhatky.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin nhật ký!']);
	}

}
