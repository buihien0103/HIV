<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TacDung;


class TacDungController extends Controller {

	public function getList(){
		$data = TacDung::select('ma_tac_dung','ma_benh_nhan','ngay_gap','don_thuoc','mo_ta')->orderBy('ma_tac_dung','DESC')->get()->toArray();
		return view('admin.tacdung.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.tacdung.add'); 
	}
	public function postAdd(Request $request){
		$td = new TacDung;
		
		$td->ma_benh_nhan = $request->txtMaBN;
		$td->ngay_gap = $request->txtNgay;
		$td->don_thuoc = $request->txtDonThuoc;
		$td->mo_ta = $request->txtMoTa;
		
		$td->save();
		return redirect()->route('admin.tacdung.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin tác dụng']);
	}
	public function getDelete($id){
		$td = TacDung::where('ma_tac_dung', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.tacdung.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin tác dụng']);
		
	}
	public function getEdit($id){
		$data = TacDung::where('ma_tac_dung', '=', $id)->first();
		return view('admin.tacdung.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtMaBN"=>"required"],
			["txtMaBN.required"=>"Vui lòng nhập tên quyền"]
		);
	
		$ma_benh_nhan = $request->txtMaBN;
		$ngay_gap = $request->txtNgay;
		$don_thuoc = $request->txtDonThuoc;
		$mo_ta = $request->txtMoTa;
		$td = TacDung::where('ma_tac_dung', '=', $id)->update(array('ma_benh_nhan'=> $ma_benh_nhan, 'ngay_gap'=>$ngay_gap,
		'don_thuoc'=>$don_thuoc, 'mo_ta'=>$mo_ta));
		return redirect()->route('admin.tacdung.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin tác dụng!']);
	}

}
