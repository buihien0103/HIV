<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\DanTocRequest;
use App\DanToc;


class DanTocController extends Controller {

	public function getList(){
		$data = DanToc::select('ma_dan_toc','ten_dan_toc','trang_thai')->orderBy('ma_dan_toc','DESC')->get()->toArray();
		return view('admin.dantoc.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.dantoc.add'); 
	}
	public function postAdd(DanTocRequest $request){
		$quyen = new DanToc;
		
		$quyen->ten_dan_toc = $request->txtDanToc;
		$quyen->trang_thai = $request->rdoStatus;
		
		$quyen->save();
		return redirect()->route('admin.dantoc.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin dân tộc']);
	}
	public function getDelete($id){
		$quyen = DanToc::where('ma_dan_toc', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.dantoc.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin dân tộc']);
		
	}
	public function getEdit($id){
		$data = DanToc::where('ma_dan_toc', '=', $id)->first();
		return view('admin.dantoc.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtDanToc"=>"required"],
			["txtDanToc.required"=>"Vui lòng nhập tên dân tộc!"]
		);
	
		$ten_dt = $request->txtDanToc;
		$trang_thai = $request->rdoStatus;
		$quyen = DanToc::where('ma_dan_toc', '=', $id)->update(array('ten_dan_toc'=> $ten_dt, 'trang_thai'=>$trang_thai));
		return redirect()->route('admin.dantoc.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin dân tộc!']);
	}

}
