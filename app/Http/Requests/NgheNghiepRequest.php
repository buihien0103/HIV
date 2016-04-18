<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NgheNghiepRequest extends Request {

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
			'txtNgheNghiep' => 'required|unique:nghe_nghiep,ten_nghe_nghiep'
		];
	}
	public function messages(){
		return ['txtNgheNghiep.required'=>'Nhập tên nghề nghiệp',
				'txtNgheNghiep.unique'=>'Tên nghề nghiệp vừa nhập đã tồn tại'
		];
	}


}
