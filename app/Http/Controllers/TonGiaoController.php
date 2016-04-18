<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\TonGiaoRequest;
use App\TonGiao;


class TonGiaoController extends Controller {

	public function getList(){
		$data = TonGiao::select('ma_ton_giao','ten_ton_giao','trang_thai')->orderBy('ma_ton_giao','DESC')->get()->toArray();
		return view('admin.tongiao.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.tongiao.add'); 
	}
	public function postAdd(TonGiaoRequest $request){
		$tongiao = new TonGiao;
		
		$tongiao->ten_ton_giao = $request->txtTonGiao;
		$tongiao->trang_thai = $request->rdoStatus;
		
		$tongiao->save();
		return redirect()->route('admin.tongiao.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin tôn giáo']);
	}
	public function getDelete($id){
		$tongiao = TonGiao::where('ma_ton_giao', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.tongiao.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin tôn giáo']);
		
	}
	public function getEdit($id){
		$data = TonGiao::where('ma_ton_giao', '=', $id)->first();
		return view('admin.tongiao.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtTonGiao"=>"required"],
			["txtTonGiao.required"=>"Vui lòng nhập tên tôn giáo!"]
		);
		$ten_tg = $request->txtTonGiao;
		$trang_thai = $request->rdoStatus;
		$tongiao = TonGiao::where('ma_ton_giao', '=', $id)->update(array('ten_ton_giao'=> $ten_tg, 'trang_thai'=>$trang_thai));
		return redirect()->route('admin.tongiao.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin tôn giáo!']);
	}

}
