<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TonGiaoRequest extends Request {

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
			'txtTonGiao' => 'required|unique:ton_giao,ten_ton_giao'
		];
	}
	public function messages(){
		return ['txtTonGiao.required'=>'Nhập tên tôn giáo',
				'txtTonGiao.unique'=>'Tên tôn giáo vừa nhập đã tồn tại'
		];
	}


}
