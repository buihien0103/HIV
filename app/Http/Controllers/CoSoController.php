<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CoSoRequest;
use App\CoSo;

class CoSoController extends Controller {

	public function getList(){
		$data = CoSo::select('ma_co_so','ten_dich_vu','dia_chi','gps','hoat_dong','thanh_lap','website','hinh_anh',
		 'gioi_thieu', 'so_dien_thoai', 'email', 'skype')->orderBy('ma_co_so','DESC')->get()->toArray();
		return view('admin.coso.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.coso.add'); 
	}
	public function postAdd(CoSoRequest $request){
		$file_name = $request->file('fImages')->getClientOriginalName();
		$cs = new CoSo;
		$cs->ten_dich_vu = $request->txtTenDV;
		$cs->dia_chi = $request->txtDiaChi;
		$cs->gps = $request->txtGPS;
		$cs->hoat_dong = $request->txtHoatDong;
		$cs->thanh_lap = $request->txtThanhLap;
		$cs->website = $request->txtWeb;
		$cs->hinh_anh = $file_name;
		$cs->gioi_thieu = $request->txtGioiThieu;
		$cs->so_dien_thoai = $request->txtSDT;
		$cs->email = $request->txtEmail;
		$cs->skype = $request->txtSkype;
		$request->file('fImages')->move('resources/upload/',$file_name);
		$cs->save();
		return redirect()->route('admin.coso.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin cơ sở']);
	}
	public function getDelete($id){
		$bn = CoSo::where('ma_co_so', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.coso.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin cơ sở']);
		
	}
	public function getEdit($id){
		$data = CoSo::where('ma_co_so', '=', $id)->first();
		return view('admin.coso.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$file_name = $request->file('fImages')->getClientOriginalName();
		$this->validate($request,
			["txtTenDV"=>"required"],
			["txtTenDV.required"=>"Nhập tên dịch vụ"]
		);
		$dv= $request->txtTenDV;
		$dc = $request->txtDiaChi;
		$gps = $request->txtGPS;
		$hd = $request->txtHoatDong;
		$tl = $request->txtThanhLap;
		$web = $request->txtWeb;
		$ha = $file_name;
		$gt = $request->txtGioiThieu;
		$sdt = $request->txtSDT;
		$email = $request->txtEmail;
		$skype = $request->txtSkype;
		$request->file('fImages')->move('resources/upload/',$file_name);
		$cs = CoSo::where('ma_co_so', '=', $id)->update(array('ten_dich_vu'=> $dv, 'dia_chi'=>$dc, 'gps'=> $gps, 'hoat_dong'=>$hd, 'thanh_lap'=> $tl,
		'website'=>$web,'hinh_anh'=> $ha, 'gioi_thieu'=>$gt, 'so_dien_thoai'=> $sdt, 'email'=>$email, 'skype'=> $skype));
		return redirect()->route('admin.coso.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin cơ sở!']);
	}

}
