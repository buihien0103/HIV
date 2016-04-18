<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UongThuocRequest extends Request {

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
		return ['txtNhacNho' => 'required:uong_thuoc'
		];
		return [
			'txtMaBN' => 'required:uong_thuoc'
		];
		return ['txtSL' => 'required:uong_thuoc'
		];
		return ['txtBatDau' => 'required:uong_thuoc'
		];
		return ['txtKetThuc' => 'required:uong_thuoc'
		];
		return ['txTST' => 'required:uong_thuoc'
		];
		return ['txtConLai' => 'required:uong_thuoc'
		];
		return ['txtNgayTaiKham' => 'required:uong_thuoc'
		];
	
	}
	public function messages(){
		return ['txtNhacNho.required'=>'Nhập mã nhắc nhở'
		];
		return ['txtMaBN.required'=>'Nhập mã bệnh nhân'
		];
		return ['txtSL.required' => 'Nhập số lượng'
		];
		return ['txtBatDau.required' => 'Nhập ngày bắt đầu'
		];
		return ['txtKetThuc.required' => 'Nhập ngày kết thúc'
		];
		return ['txTST.required' => 'Nhập tổng số lượng'
		];
		return ['txtConLai.required' => 'Nhập số thuốc còn lại'
		];
		return ['txtNgayTaiKham.required' => 'Nhập ngày tái khám'
		];
	}
}
