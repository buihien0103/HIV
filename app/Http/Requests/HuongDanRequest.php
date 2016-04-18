<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class HuongDanRequest extends Request {

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
			'txtTenBenh' => 'required|unique:huong_dan,ten_benh'
		];
	}
	public function messages(){
		return ['txtTenBenh.required'=>'Vui lòng nhập tên bệnh',
				'txtTenBenh.unique'=>'Tên bệnh vừa nhập bị trùng nhau'
		];
	}


}
