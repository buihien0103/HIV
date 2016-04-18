@section('controller', 'Nhật ký')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.nhatky.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	<div class="form-group">
        <label>Mã bệnh nhân</label>
        <input class="form-control" name="txtMaBN" placeholder="Nhập mã bệnh nhân" />
    </div>
    <div class="form-group">
        <label>Ngày</label>
        <input class="form-control" type="date" name="txtNgay" placeholder="Nhập ngày" />
    </div>
    <div class="form-group">
        <label>Tình trạng sức khỏe</label>
        <textarea class="form-control" name="txtTinhTrang" placeholder="Nhập tình trạng" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>VAS</label>
        <textarea class="form-control" name="txtVAS" placeholder="Nhập VAS" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Tâm trạng</label>
        <textarea class="form-control" name="txtTamTrang" placeholder="Nhập tâm trạng" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Tập thể dục</label>
        <textarea class="form-control" name="txtTD" placeholder="Nhập tập thể dục" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Hút thuốc</label>
        <textarea class="form-control" name="txtHutThuoc" placeholder="Nhập hút thuốc" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Uống rượu</label>
        <textarea class="form-control" name="txtUongRuou" placeholder="Nhập uống rượu" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Ghi chú</label>
        <textarea class="form-control" name="txtGhiChu" placeholder="Nhập ghi chú" rows="5"></textarea>
    </div>
    
        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        