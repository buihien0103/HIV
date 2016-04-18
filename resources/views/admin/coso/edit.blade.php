@section('controller', 'Cơ sở')

@extends('admin.master')
@section('content')

</style>
 <div class="col-lg-7" style="padding-bottom:120px">
 	@include('admin.blocks.error')
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
        <div class="form-group">
        <label>Tên dịch vụ</label>
        <textarea class="form-control" name="txtTenDV" placeholder="Nhập tên dịch vụ" rows="5">{!! old('txtTenDV', isset($data)?$data['ten_dich_vu']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <textarea class="form-control" name="txtDiaChi" placeholder="Nhập địa chỉ" rows="5">{!! old('txtDiaChi', isset($data)?$data['dia_chi']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>GPS</label>
        <textarea class="form-control" name="txtGPS" placeholder="Nhập GPS" rows="5">{!! old('txtGPS', isset($data)?$data['gps']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Hoạt động</label>
        <textarea class="form-control" name="txtHoatDong" placeholder="Nhập hoạt động" rows="5">{!! old('txtHoatDong', isset($data)?$data['hoat_dong']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Thành lập</label>
        <textarea class="form-control" name="txtThanhLap" placeholder="Nhập thành lập" rows="5">{!! old('txtThanhLap', isset($data)?$data['thanh_lap']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Website</label>
        <textarea class="form-control" name="txtWeb" placeholder="Nhập Website" rows="5">{!! old('txtWeb', isset($data)?$data['website']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Hình ảnh hiện tại</label>
        <img src="{!! asset('resources/upload/'.$data['hinh_anh'])!!}" width="50" height="50">
    </div>
  	<div class="form-group">
        <label>Hình ảnh cần sửa</label>
        <input type="file" name="fImages" >
    </div>
    <div class="form-group">
        <label>Giới thiệu</label>
        <textarea class="form-control" name="txtGioiThieu" placeholder="Nhập giới thiệu" rows="5">{!! old('txtGioiThieu', isset($data)?$data['gioi_thieu']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <textarea class="form-control" name="txtSDT" placeholder="Nhập số điện thoại" rows="5">{!! old('txtSDT', isset($data)?$data['so_dien_thoai']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <textarea class="form-control" name="txtEmail" placeholder="Nhập email" rows="5">{!! old('txtEmail', isset($data)?$data['email']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Skype</label>
        <textarea class="form-control" name="txtSkype" placeholder="Nhập skype" rows="5">{!! old('txtSkype', isset($data)?$data['skype']:null)!!}</textarea>
    </div>

        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               