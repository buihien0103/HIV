@section('controller', 'Tác dụng')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.tacdung.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <div class="form-group">
        <label>Mã bệnh nhân</label>
        <input class="form-control" name="txtMaBN" placeholder="Nhập mã bệnh nhân" />
    </div>
    <div class="form-group">
        <label>Ngày gặp</label>
        <input type="date" class="form-control" name="txtNgay" placeholder="Nhập ngày gặp" />
    </div>
    <div class="form-group">
        <label>Đơn thuốc</label>
        <textarea class="form-control" name="txtDonThuoc" placeholder="Nhập đơn thuốc" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" name="txtMoTa" placeholder="Nhập mô tả" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-default">Thêm mới</button>
    <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        