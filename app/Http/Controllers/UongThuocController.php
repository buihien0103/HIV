<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UongThuocRequest;
use App\UongThuoc;

class UongThuocController extends Controller {

	public function getList(){
		$data = UongThuoc::select('ma_nhac_nho','ma_benh_nhan','ten_thuoc','hinh_anh_thuoc','gio_uong','so_luong',
	'lap_lai','ngay_bat_dau','ngay_ket_thuc','tong_so_thuoc','am_thanh','xac_nhan','so_thuoc_con_lai','ngay_tai_kham',
	'co_so_tai_kham','dia_chi_tai_kham','bac_si_tai_kham')->orderBy('ma_nhac_nho','DESC')->get()->toArray();
		return view('admin.uongthuoc.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.uongthuoc.add'); 
	}
	public function postAdd(UongThuocRequest $request){
		$file_name = $request->file('fImages')->getClientOriginalName();
		$ut = new UongThuoc;
		$ut->ma_nhac_nho = $request->txtNhacNho;
		$ut->ma_benh_nhan = $request->txtMaBN;
		$ut->ten_thuoc = $request->txtTenThuoc;
		$ut->hinh_anh_thuoc = $file_name;
		$ut->gio_uong = $request->txtGioUong;
		$ut->so_luong = $request->txtSL;
		$ut->lap_lai = $request->txtLapLai;
		$ut->ngay_bat_dau = $request->txtBatDau;
		$ut->ngay_ket_thuc = $request->txtKetThuc;
		$ut->tong_so_thuoc = $request->txTST;
		$ut->am_thanh = $request->txtAmThanh;
		$ut->xac_nhan = $request->txtXacNhan;
		$ut->so_thuoc_con_lai = $request->txtConLai;
		$ut->ngay_tai_kham = $request->txtNgayTaiKham;
		$ut->co_so_tai_kham = $request->txtCSTK;
		$ut->dia_chi_tai_kham = $request->txtDCTK;
		$ut->bac_si_tai_kham = $request->txtBSTK;
		$request->file('fImages')->move('resources/upload/',$file_name);
		$ut->save();
		return redirect()->route('admin.uongthuoc.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin uống thuốc']);
	}
	public function getDelete($id){
		$ut = UongThuoc::where('ma_nhac_nho', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.uongthuoc.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin uống thuốc']);
		
	}
	public function getEdit($id){
		$data = UongThuoc::where('ma_nhac_nho', '=', $id)->first();
		return view('admin.uongthuoc.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$file_name = $request->file('fImages')->getClientOriginalName();
		$this->validate($request,
			["txtMaBN"=>"required"],
			["txtMaBN.required"=>"Vui lòng nhập mã bệnh nhân"]
		);
		$this->validate($request,
			["txtSL"=>"required"],
			["txtSL.required"=>"Vui lòng nhập số lượng"]
		);
		$this->validate($request,
			["txtBatDau"=>"required"],
			["txtBatDau.required"=>"Vui lòng nhập ngày bắt đầu"]
		);
		$this->validate($request,
			["txtKetThuc"=>"required"],
			["txtKetThuc.required"=>"Vui lòng nhập ngày kết thúc"]
		);
		$this->validate($request,
			["txTST"=>"required"],
			["txTST.required"=>"Vui lòng nhập tổng số thuốc"]
		);
		$this->validate($request,
			["txtConLai"=>"required"],
			["txtConLai.required"=>"Vui lòng nhập số thuốc còn lại"]
		);
		$this->validate($request,
			["txtNgayTaiKham"=>"required"],
			["txtNgayTaiKham.required"=>"Vui lòng nhập ngày tái khám"]
		);
		$ma_benh_nhan = $request->txtMaBN;
		$ten_thuoc = $request->txtTenThuoc;
		$hinh_anh_thuoc = $file_name;
		$gio_uong = $request->txtGioUong;
		$so_luong = $request->txtSL;
		$lap_lai = $request->txtLapLai;
		$ngay_bat_dau = $request->txtBatDau;
		$ngay_ket_thuc = $request->txtKetThuc;
		$tong_so_thuoc = $request->txTST;
		$am_thanh = $request->txtAmThanh;
		$xac_nhan = $request->txtXacNhan;
		$so_thuoc_con_lai = $request->txtConLai;
		$ngay_tai_kham = $request->txtNgayTaiKham;
		$co_so_tai_kham = $request->txtCSTK;
		$dia_chi_tai_kham = $request->txtDCTK;
		$bac_si_tai_kham = $request->txtBSTK;
		$request->file('fImages')->move('resources/upload/',$file_name);
		$ut = UongThuoc::where('ma_nhac_nho', '=', $id)->update(array('ma_benh_nhan'=> $ma_benh_nhan, 'ten_thuoc'=>$ten_thuoc, 'hinh_anh_thuoc'=> $hinh_anh_thuoc, 'gio_uong'=> $gio_uong,
		'so_luong'=>$so_luong,'lap_lai'=> $lap_lai, 'ngay_bat_dau'=>$ngay_bat_dau, 'ngay_ket_thuc'=> $ngay_ket_thuc, 'tong_so_thuoc'=>$tong_so_thuoc, 'am_thanh'=> $am_thanh,
		 'xac_nhan'=> $xac_nhan, 'so_thuoc_con_lai'=> $so_thuoc_con_lai, 'ngay_tai_kham'=> $ngay_tai_kham, 'co_so_tai_kham'=> $co_so_tai_kham, 'dia_chi_tai_kham'=> $dia_chi_tai_kham, 'bac_si_tai_kham'=> $bac_si_tai_kham));
		return redirect()->route('admin.uongthuoc.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin uống thuốc!']);
	}

}
