<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DanTocRequest extends Request {

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
			'txtDanToc' => 'required|unique:dan_toc,ten_dan_toc'
		];
	}
	public function messages(){
		return ['txtDanToc.required'=>'Nhập tên dân tộc',
				'txtDanToc.unique'=>'Tên dân tộc vừa nhập đã tồn tại'
		];
	}


}
