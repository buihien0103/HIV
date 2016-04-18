<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\LienHe;


class LienHeController extends Controller {

	public function getList(){
		$data = LienHe::select('ma_lien_he','hotline','cau_hoi','chia_se')->orderBy('ma_lien_he','DESC')->get()->toArray();
		return view('admin.lienhe.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.lienhe.add'); 
	}
	public function postAdd(Request $request){
		$lh = new LienHe;
		$this->validate($request,
			["txtHotline"=>"required"],
			["txtHotline.required"=>"Vui lòng nhập hotline"]
		);
		$this->validate($request,
			["txtCauHoi"=>"required"],
			["txtCauHoi.required"=>"Vui lòng nhập câu hỏi"]
		);
		$this->validate($request,
			["txtChiaSe"=>"required"],
			["txtChiaSe.required"=>"Vui lòng nhập chia sẻ"]
		);
		$lh->hotline = $request->txtHotline;
		$lh->cau_hoi = $request->txtCauHoi;
		$lh->chia_se = $request->txtChiaSe;
		
		$lh->save();
		return redirect()->route('admin.lienhe.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin liên hệ']);
	}
	public function getDelete($id){
		$lh = LienHe::where('ma_lien_he', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.lienhe.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin liên hệ']);
		
	}
	public function getEdit($id){
		$data = LienHe::where('ma_lien_he', '=', $id)->first();
		return view('admin.lienhe.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtHotline"=>"required"],
			["txtHotline.required"=>"Vui lòng nhập hotline"]
		);
		$this->validate($request,
			["txtCauHoi"=>"required"],
			["txtCauHoi.required"=>"Vui lòng nhập câu hỏi"]
		);
		$this->validate($request,
			["txtChiaSe"=>"required"],
			["txtChiaSe.required"=>"Vui lòng nhập chia sẻ"]
		);
		$hotline = $request->txtHotline;
		$cau_hoi = $request->txtCauHoi;
		$chia_se = $request->txtChiaSe;
		$lh = LienHe::where('ma_lien_he', '=', $id)->update(array('hotline'=> $hotline, 'cau_hoi'=>$cau_hoi, 'chia_se'=> $chia_se));
		return redirect()->route('admin.lienhe.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin liên hệ!']);
	}

}
