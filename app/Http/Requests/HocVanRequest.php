<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class HocVanRequest extends Request {

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
			'txtHocVan' => 'required|unique:hoc_van,ten_hoc_van'
		];
	}
	public function messages(){
		return ['txtHocVan.required'=>'Nhập học vấn',
				'txtHocVan.unique'=>'Học vấn vừa nhập đã tồn tại'
		];
	}


}
