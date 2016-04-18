<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\HocVanRequest;
use App\HocVan;


class HocVanController extends Controller {

	public function getList(){
		$data = HocVan::select('ma_hoc_van','ten_hoc_van','trang_thai')->orderBy('ma_hoc_van','DESC')->get()->toArray();
		return view('admin.hocvan.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.hocvan.add'); 
	}
	public function postAdd(HocVanRequest $request){
		$quyen = new HocVan;
		
		$quyen->ten_hoc_van = $request->txtHocVan;
		$quyen->trang_thai = $request->rdoStatus;
		
		$quyen->save();
		return redirect()->route('admin.hocvan.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin học vấn']);
	}
	public function getDelete($id){
		$quyen = HocVan::where('ma_hoc_van', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.hocvan.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin học vấn']);
		
	}
	public function getEdit($id){
		$data = HocVan::where('ma_hoc_van', '=', $id)->first();
		return view('admin.hocvan.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtHocVan"=>"required"],
			["txtHocVan.required"=>"Vui lòng nhập tên học vấn!"]
		);
		$ten_hv = $request->txtHocVan;
		$trang_thai = $request->rdoStatus;
		$quyen = HocVan::where('ma_hoc_van', '=', $id)->update(array('ten_hoc_van'=> $ten_hv, 'trang_thai'=>$trang_thai));
		return redirect()->route('admin.hocvan.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin học vấn!']);
	}

}
