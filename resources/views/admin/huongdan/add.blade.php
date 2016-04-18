@section('controller', 'Hướng dẫn')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.huongdan.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	<div class="form-group">
        <label>Tên bệnh</label>
        <textarea class="form-control" name="txtTenBenh" placeholder="Nhập tên bệnh" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Khái niệm</label>
        <textarea class="form-control" name="txtKhaiNiem" placeholder="Nhập khái niệm" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Đối tượng</label>
        <textarea class="form-control" name="txtDoiTuong" placeholder="Nhập đối tượng" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Triệu chứng</label>
        <textarea class="form-control" name="txtTrieuChung" placeholder="Nhập triệu chứng" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Đường lây</label>
        <textarea class="form-control" name="txtDuongLay" placeholder="Nhập đường lây" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Chuẩn đoán</label>
        <textarea class="form-control" name="txtChuanDoan" placeholder="Nhập chuẩn đoán" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Điều trị</label>
        <textarea class="form-control" name="txtDieuTri" placeholder="Nhập điều trị" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Biến chứng</label>
        <textarea class="form-control" name="txtBienChung" placeholder="Nhập biến chứng" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Dự phòng</label>
        <textarea class="form-control" name="txtDuPhong" placeholder="Nhập dự phòng" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Website</label>
        <textarea class="form-control" name="txtWeb" placeholder="Nhập website" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Quy trình</label>
        <textarea class="form-control" name="txtQuyTrinh" placeholder="Nhập quy trình" rows="5"></textarea>
    </div>

        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        