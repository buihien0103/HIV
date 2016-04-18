<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\HuongDanRequest;
use App\HuongDan;


class HuongDanController extends Controller {

	public function getList(){
		$data = HuongDan::select('ma_huong_dan','ten_benh','khai_niem','doi_tuong', 'trieu_chung', 'duong_lay', 'chuan_doan', 
	'dieu_tri', 'bien_chung', 'du_phong', 'website', 'quy_trinh')->orderBy('ma_huong_dan','DESC')->get()->toArray();
		return view('admin.huongdan.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.huongdan.add'); 
	}
	public function postAdd(HuongDanRequest $request){
		$hd = new HuongDan;
		$hd->ten_benh = $request->txtTenBenh;
		$hd->khai_niem = $request->txtKhaiNiem;
		$hd->doi_tuong = $request->txtDoiTuong;
		$hd->trieu_chung = $request->txtTrieuChung;
		$hd->duong_lay = $request->txtDuongLay;
		$hd->chuan_doan = $request->txtChuanDoan;
		$hd->dieu_tri = $request->txtDieuTri;
		$hd->bien_chung = $request->txtBienChung;
		$hd->du_phong = $request->txtDuPhong;
		$hd->website = $request->txtWeb;
		$hd->quy_trinh = $request->txtQuyTrinh;
		$hd->save();
		return redirect()->route('admin.huongdan.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin hướng dẫn']);
	}
	public function getDelete($id){
		$hd = HuongDan::where('ma_huong_dan', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.huongdan.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin hướng dẫn']);
		
	}
	public function getEdit($id){
		$data = HuongDan::where('ma_huong_dan', '=', $id)->first();
		return view('admin.huongdan.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtTenBenh"=>"required"],
			["txtTenBenh.required"=>"Vui lòng nhập tên bệnh"]
		);
		$tb = $request->txtTenBenh;
		$kn = $request->txtKhaiNiem;
		$dt = $request->txtDoiTuong;
		$tc = $request->txtTrieuChung;
		$dl = $request->txtDuongLay;
		$cd = $request->txtChuanDoan;
		$dt = $request->txtDieuTri;
		$bc = $request->txtBienChung;
		$dp = $request->txtDuPhong;
		$web = $request->txtWeb;
		$qt = $request->txtQuyTrinh;
		$hd = HuongDan::where('ma_huong_dan', '=', $id)->update(array('ten_benh'=> $tb, 'khai_niem'=>$kn, 'doi_tuong'=> $dt, 'trieu_chung'=>$tc,
		 'duong_lay'=> $dl,'chuan_doan'=>$cd, 'dieu_tri'=>$dt, 'bien_chung'=>$bc, 'du_phong'=>$dp, 'website'=>$web, 'quy_trinh'=>$qt));
		return redirect()->route('admin.huongdan.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin hướng dẫn!']);
	}

}
