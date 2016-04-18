<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BenhNhanRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtHoTen' => 'required|unique:benh_nhan,ho_ten'
		];
	}
	public function messages(){
		return ['txtHoTen.required'=>'Nhập họ tên',
				'txtHoTen.unique'=>'Họ tên vừa nhập bị trùng nhau'
		];
	}


}
