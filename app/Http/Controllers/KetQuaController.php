<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\KetQua;


class KetQuaController extends Controller {

	public function getList(){
		$data = KetQua::select('ma_ket_qua','ma_benh_nhan','cd4','tai_luong_virus','suc_khoe','tuan_thu_dieu_tri')->orderBy('ma_ket_qua','DESC')->get()->toArray();
		return view('admin.ketqua.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.ketqua.add'); 
	}
	public function postAdd(Request $request){
		$kq = new KetQua;
		$this->validate($request,
			["txtMaBN"=>"required"],
			["txtMaBN.required"=>"Vui lòng nhập mã bệnh nhân"]
		);
		$kq->ma_benh_nhan = $request->txtMaBN;
		$kq->cd4 = $request->txtcd4;
		$kq->tai_luong_virus = $request->txttailuongVR;
		$kq->suc_khoe = $request->txtSK;
		$kq->tuan_thu_dieu_tri = $request->txtTTDT;
		
		$kq->save();
		return redirect()->route('admin.ketqua.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin kết quả']);
	}
	public function getDelete($id){
		$kq = KetQua::where('ma_ket_qua', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.ketqua.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin kết quả']);
		
	}
	public function getEdit($id){
		$data = KetQua::where('ma_ket_qua', '=', $id)->first();
		return view('admin.ketqua.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtMaBN"=>"required"],
			["txtMaBN.required"=>"Vui lòng nhập mã bệnh nhân"]
		);
		$ma = $request->txtMaBN;
		$cd4 = $request->txtcd4;
		$vr = $request->txttailuongVR;
		$sk = $request->txtSK;
		$tt = $request->txtTTDT;
		$kq = KetQua::where('ma_ket_qua', '=', $id)->update(array('ma_benh_nhan'=> $ma, 'cd4'=>$cd4, 'tai_luong_virus'=> $vr, 'suc_khoe'=>$sk,
		 'tuan_thu_dieu_tri'=> $tt));
		return redirect()->route('admin.ketqua.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin kết quả!']);
	}

}
