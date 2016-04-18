<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CoSoRequest;
use App\DichVu;

class DichVuController extends Controller {

	public function getList(){
		$data = DichVu::select('ma_dich_vu', 'ma_benh_nhan', 'ngay_kham', 'co_so_kham', 'chat_luong', 'huong_dan', 'dich_vu')->orderBy('ma_dich_vu','DESC')->get()->toArray();
		return view('admin.dichvu.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.dichvu.add'); 
	}
	public function postAdd(DichVuRequest $request){
		$dv = new DichVu;
		$dv->ma_benh_nhan = $request->txtMaBN;
		$dv->ngay_kham = $request->txtNgayKham;
		$dv->co_so_kham = $request->txtCSKham;
		$dv->chat_luong = $request->txtCL;
		$dv->huong_dan = $request->txtHD;
		$dv->dich_vu = $request->txtDV;
		$dv->save();
		return redirect()->route('admin.dichvu.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin dịch vụ']);
	}
	public function getDelete($id){
		$dv = DichVu::where('ma_dich_vu', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.dichvu.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin dịch vụ']);
		
	}
	public function getEdit($id){
		$data = DichVu::where('ma_dich_vu', '=', $id)->first();
		return view('admin.dichvu.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtMaBN"=>"required"],
			["txtMaBN.required"=>"Vui lòng nhập mã bệnh nhân"]
		);
		$maBN= $request->txtMaBN;
		$nk = $request->txtNgayKham;
		$CSK = $request->txtCSKham;
		$cl = $request->txtCL;
		$hd = $request->txtHD;
		$dvu = $request->txtDV;
		$dv = DichVu::where('ma_dich_vu', '=', $id)->update(array('ma_benh_nhan'=> $maBN, 'ngay_kham'=>$nk, 'co_so_kham'=> $CSK, 'chat_luong'=>$cl, 'huong_dan'=> $hd,
		'dich_vu'=>$dvu));
		return redirect()->route('admin.dichvu.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin dịch vụ!']);
	}

}
