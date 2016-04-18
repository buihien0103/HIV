@section('controller', 'Bệnh nhân')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.benhnhan.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	<div class="form-group">
    	<label>Họ tên</label>
     	<input class="form-control" name="txtHoTen" placeholder="Nhập họ tên" />
    </div>
    <div class="form-group">
        <label>Năm sinh</label>
        <input class="form-control" name="txtNamSinh" placeholder="Nhập năm sinh" />
    </div>
    <div class="form-group">
        <label>Giới tính</label>
        <label class="radio-inline">
        <input name="rdoGioiTinh" value="1" checked="" type="radio">Nam
        </label>
        <label class="radio-inline">
        <input name="rdoGioiTinh" value="0" type="radio">Nữ
        </label>
    </div>    
    <div class="form-group">
       <label>Học vấn</label>
       <select class="form-control" name="sltHocVan">
       <option value="0">Chọn học vấn</option>
       @foreach($hocvan as $item)
       		<option value="{!!$item["ma_hoc_van"]!!}">{!!$item["ten_hoc_van"]!!}</option>
       @endforeach()
       </select>
   </div>
   <div class="form-group">
       <label>Dân tộc</label>
       <select class="form-control" name="sltDanToc">
       <option value="0">Chọn dân tộc</option>
       @foreach($dantoc as $item)
       		<option value="{!!$item["ma_dan_toc"]!!}">{!!$item["ten_dan_toc"]!!}</option>
       @endforeach()
       </select>
   </div>
   <div class="form-group">
       <label>Tôn giáo</label>
       <select class="form-control" name="sltTonGiao">
       <option value="0">Chọn tôn giáo</option>
       @foreach($tongiao as $item)
       		<option value="{!!$item["ma_ton_giao"]!!}">{!!$item["ten_ton_giao"]!!}</option>
       @endforeach()
       </select>
   </div>
   <div class="form-group">
       <label>Nghề nghiệp</label>
       <select class="form-control" name="sltNgheNghiep">
       <option value="0">Chọn nghề nghiệp</option>
       @foreach($nghenghiep as $item)
       		<option value="{!!$item["ma_nghe_nghiep"]!!}">{!!$item["ten_nghe_nghiep"]!!}</option>
       @endforeach()
       </select>
   </div>
    <div class="form-group">
        <label>Chiều cao</label>
        <input class="form-control" name="txtChieuCao" placeholder="Nhập chiều cao" />
    </div>
    <div class="form-group">
        <label>Cân nặng</label>
        <input class="form-control" name="txtCanNang" placeholder="Nhập cân nặng" />
    </div>
    <div class="form-group">
        <label>BMI</label>
        <input class="form-control" name="txtBMI" placeholder="Nhập BMI" />
    </div>
    <div class="form-group">
        <label>Viêm gan B</label>
        <label class="radio-inline">
        <input name="rdoVienGanB" value="1" checked="" type="radio">Có
        </label>
        <label class="radio-inline">
        <input name="rdoVienGanB" value="0" type="radio">Không
        </label>
    </div>
    <div class="form-group">
        <label>Viêm gan C</label>
        <label class="radio-inline">
        <input name="rdoVienGanC" value="1" checked="" type="radio">Có
        </label>
        <label class="radio-inline">
        <input name="rdoVienGanC" value="0" type="radio">Không
        </label>
    </div>    
    <div class="form-group">
        <label>Gia đình HIV</label>
        <label class="radio-inline">
        <input name="rdoGdhiv" value="1" checked="" type="radio">Có
        </label>
        <label class="radio-inline">
        <input name="rdoGdhiv" value="0" type="radio">Không
        </label>
    </div>    
    <div class="form-group">
        <label>Gia đình viên gan B</label>
        <label class="radio-inline">
        <input name="rdoGDVGB" value="1" checked="" type="radio">Có
        </label>
        <label class="radio-inline">
        <input name="rdoGDVGB" value="0" type="radio">Không
        </label>
    </div>    
    <div class="form-group">
        <label>Gia đình viêm gan C</label>
        <label class="radio-inline">
        <input name="rdoGDVGC" value="1" checked="" type="radio">Có
        </label>
        <label class="radio-inline">
        <input name="rdoGDVGC" value="0" type="radio">Không
        </label>
    </div> 

    <div class="form-group">
        <label>Dị ứng thuốc</label>
        <textarea class="form-control" name="txtDiUngThuoc" placeholder="Nhập dị ứng thuốc" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Dị ứng thức ăn</label>
        <textarea class="form-control" name="txtDiUngThucAn" placeholder="Nhập dự ứng thức ăn" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Dị ứng thời tiết</label>
        <textarea class="form-control" name="txtDiUngThoiTiet" placeholder="Nhập dị ứng thời tiết" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Điều trị lao</label>
        <label class="radio-inline">
        <input name="rdoDTLao" value="1" checked="" type="radio">Có
        </label>
        <label class="radio-inline">
        <input name="rdoDTLao" value="0" type="radio">Không
        </label>
    </div>  
    <div class="form-group">
        <label>Nhiễm trùng cơ hội</label>
        <label class="radio-inline">
        <input name="rdoNTCH" value="1" checked="" type="radio">Có
        </label>
        <label class="radio-inline">
        <input name="rdoNTCH" value="0" type="radio">Không
        </label>
    </div>  
    <div class="form-group">
        <label>Hút thuốc</label>
        <label class="radio-inline">
        <input name="rdoHutThuoc" value="1" checked="" type="radio">Có
        </label>
        <label class="radio-inline">
        <input name="rdoHutThuoc" value="0" type="radio">Không
        </label>
    </div>       
        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        