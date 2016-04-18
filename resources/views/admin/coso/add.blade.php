@section('controller', 'Cơ sở')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.coso.getAdd') !!}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	<div class="form-group">
        <label>Tên dịch vụ</label>
        <textarea class="form-control" name="txtTenDV" placeholder="Nhập tên dịch vụ" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <textarea class="form-control" name="txtDiaChi" placeholder="Nhập địa chỉ" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>GPS</label>
        <textarea class="form-control" name="txtGPS" placeholder="Nhập GPS" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Hoạt động</label>
        <textarea class="form-control" name="txtHoatDong" placeholder="Nhập hoạt động" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Thành lập</label>
        <textarea class="form-control" name="txtThanhLap" placeholder="Nhập thành lập" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Website</label>
        <textarea class="form-control" name="txtWeb" placeholder="Nhập Website" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Hình ảnh</label>
        <input type="file" name="fImages" >
    </div>
    <div class="form-group">
        <label>Giới thiệu</label>
        <textarea class="form-control" name="txtGioiThieu" placeholder="Nhập giới thiệu" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <textarea class="form-control" name="txtSDT" placeholder="Nhập số điện thoại" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <textarea class="form-control" name="txtEmail" placeholder="Nhập email" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Skype</label>
        <textarea class="form-control" name="txtSkype" placeholder="Nhập skype" rows="5"></textarea>
    </div>

        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        