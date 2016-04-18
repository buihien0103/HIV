<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller {

	public function getList(){
		$data = User::select('user_id','ma_benh_nhan','username','password','email','access_token','expired_in','device_id')->orderBy('user_id','DESC')->get()->toArray();
		return view('admin.user.list', compact('data'));
	}
	public function getAdd(){
		return view('admin.user.add'); 
	}
	public function postAdd(UserRequest $request){
		$dv = new User;
		$dv->ma_benh_nhan = $request->txtMaBN;
		$dv->username = $request->txtUsername;
		$dv->password = $request->txtpassword;
		$dv->email = $request->txtemail;
	
		$dv->save();
		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Thêm mới thành công thông tin user']);
	}
	public function getDelete($id){
		$dv = User::where('user_id', '=', $id)->delete();
		//$cate->delete($id);
		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>' Xóa thành công thông tin user']);
		
	}
	public function getEdit($id){
		$data = User::where('user_id', '=', $id)->first();
		return view('admin.user.edit', compact('data')); 
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtMaBN"=>"required"],
			["txtMaBN.required"=>"Vui lòng nhập mã bệnh nhân"]
		);
		$this->validate($request,
			["txtUsername"=>"required"],
			["txtUsername.required"=>"Vui lòng nhập username"]
		);
		$ma_benh_nhan = $request->txtMaBN;
		$username = $request->txtUsername;
		$password = $request->txtpassword;
		$email = $request->txtemail;
		$dv = User::where('user_id', '=', $id)->update(array('ma_benh_nhan'=> $ma_benh_nhan, 'username'=>$username, 'password'=> $password, 'email'=>$email));
		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công thông tin user!']);
	}

}
