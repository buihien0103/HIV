<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CoSoRequest extends Request {

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
			'txtTenDV' => 'required:co_so'
		];
	}
	public function messages(){
		return ['txtTenDV.required'=>'Nhập tên dịch vụ'
		];
	}


}
