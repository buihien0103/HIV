@section('controller', 'Uống thuốc')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.uongthuoc.getAdd') !!}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	<div class="form-group">
        <label>Mã nhắc nhở</label>
        <input type="text" class="form-control" class="form-control" name="txtNhacNho" placeholder="Nhập mã nhắc nhở" value="" >
    </div>
    <div class="form-group">
        <label>Mã bệnh nhân</label>
        <input type="text" class="form-control" name="txtMaBN" placeholder="Nhập mã bệnh nhân" value="" >
    </div>
    <div class="form-group">
        <label>Tên thuốc</label>
        <textarea class="form-control" name="txtTenThuoc" placeholder="Nhập tên thuốc" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Hình ảnh thuốc</label>
        <input type="file" name="fImages" >
    </div>
    <div class="form-group">
        <label>Giờ uống</label>
        <textarea class="form-control" name="txtGioUong" placeholder="Nhập giờ uống" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Số lượng</label>
        <input type="text" class="form-control" name="txtSL" placeholder="Nhập số lượng" value="" >
    </div>
    <div class="form-group">
        <label>Lặp lại</label>
        <textarea class="form-control" name="txtLapLai" placeholder="Nhập lặp lại" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Ngày bắt đầu</label>
        <input type="date"  class="form-control" name="txtBatDau" placeholder="Nhập ngày bắt đầu" value="" >
    </div>
    <div class="form-group">
        <label>Ngày kết thúc</label>
        <input type="date" class="form-control" name="txtKetThuc" placeholder="Nhập ngày kết thúc" value="" >
    </div>
    <div class="form-group">
        <label>Tổng số thuốc</label>
        <input class="form-control" name="txTST" placeholder="Nhập tổng số thuốc" value="" >
    </div>
    <div class="form-group">
        <label>Âm thanh</label>
        <textarea class="form-control" name="txtAmThanh" placeholder="Nhập âm thanh" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Xác nhận</label>
        <textarea class="form-control" name="txtXacNhan" placeholder="Nhập xác nhận" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Số thuốc còn lại</label>
        <input type="text" class="form-control" name="txtConLai" placeholder="Nhập số thuốc còn lại" value="" >
    </div>
    <div class="form-group">
        <label>Ngày tái khám</label>
        <input type="date" class="form-control" name="txtNgayTaiKham" placeholder="Nhập ngày tái khám" value="" >
    </div>
    <div class="form-group">
        <label>Cơ sở tái khám</label>
        <textarea class="form-control" name="txtCSTK" placeholder="Nhập cơ sở tái khám" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Địa chỉ tái khám</label>
        <textarea class="form-control" name="txtDCTK" placeholder="Nhập số địa chỉ tái khám" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Bác sĩ tái khám</label>
        <textarea class="form-control" name="txtBSTK" placeholder="Nhập bác sĩ tái khám" rows="5"></textarea>
    </div>
    
        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        