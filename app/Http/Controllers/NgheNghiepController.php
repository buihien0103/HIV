<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\NgheNghiepRequest;
use App\NgheNghiep;


class NgheNghiepController extends Controller {

	public function getList(){
		$data = NgheNghiep::select('ma_nghe_nghiep','ten_nghe_nghiep','trang_thai')->orderBy('ma_nghe_nghiep','DESC')->get()->toArray();
		return view('admin.nghenghiep.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.nghenghiep.add'); 
	}
	public function postAdd(NgheNghiepRequest $request){
		$nn = new NgheNghiep;
		
		$nn->ten_nghe_nghiep = $request->txtNgheNghiep;
		$nn->trang_thai = $request->rdoStatus;
		
		$nn->save();
		return redirect()->route('admin.nghenghiep.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin nghề nghiệp']);
	}
	public function getDelete($id){
		$nn = NgheNghiep::where('ma_nghe_nghiep', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.nghenghiep.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin nghề nghiệp']);
		
	}
	public function getEdit($id){
		$data = NgheNghiep::where('ma_nghe_nghiep', '=', $id)->first();
		return view('admin.nghenghiep.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtNgheNghiep"=>"required"],
			["txtNgheNghiep.required"=>"Vui lòng nhập tên nghề nghiệp!"]
		);
		$ten_nn = $request->txtNgheNghiep;
		$trang_thai = $request->rdoStatus;
		$nn = NgheNghiep::where('ma_nghe_nghiep', '=', $id)->update(array('ten_nghe_nghiep'=> $ten_nn, 'trang_thai'=>$trang_thai));
		return redirect()->route('admin.nghenghiep.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin nghề nghiệp!']);
	}

}
