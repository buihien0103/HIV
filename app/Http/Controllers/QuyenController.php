<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Quyen;


class QuyenController extends Controller {

	public function getList(){
		$data = Quyen::select('ma_quyen','ten_quyen','trang_thai')->orderBy('ma_quyen','DESC')->get()->toArray();
		return view('admin.quyen.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.quyen.add'); 
	}
	public function postAdd(Request $request){
		$quyen = new Quyen;
		$this->validate($request,
			["txtTenQuyen"=>"required"],
			["txtTenQuyen.required"=>"Vui lòng nhập tên quyền"]
		);
		
		$quyen->ten_quyen = $request->txtTenQuyen;
		$quyen->trang_thai = $request->rdoStatus;
		
		$quyen->save();
		return redirect()->route('admin.quyen.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin quyền']);
	}
	public function getDelete($id){
		$quyen = Quyen::where('ma_quyen', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.quyen.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin quyền']);
		
	}
	public function getEdit($id){
		$data = Quyen::where('ma_quyen', '=', $id)->first();
		return view('admin.quyen.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtTenQuyen"=>"required"],
			["txtTenQuyen.required"=>"Vui lòng nhập tên quyền"]
		);
	
		$ten_quyen = $request->txtTenQuyen;
		$trang_thai = $request->rdoStatus;
		$quyen = Quyen::where('ma_quyen', '=', $id)->update(array('ten_quyen'=> $ten_quyen, 'trang_thai'=>$trang_thai));
		return redirect()->route('admin.quyen.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin quyền!']);
	}

}
