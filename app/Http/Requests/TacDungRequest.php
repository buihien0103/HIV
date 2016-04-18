<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DichVuRequest extends Request {

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
			'txtMaBN' => 'required:tac_dung'
		];
	}
	public function messages(){
		return ['txtMaBN.required'=>'Vui lòng nhập mã bệnh nhân',
				
		];
	}


}
