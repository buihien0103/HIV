@section('controller', 'Dịch vụ')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.dichvu.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	<div class="form-group">
        <label>Mã bệnh nhân</label>
        <input class="form-control" name="txtMaBN" placeholder="Nhập mã bệnh nhân" />
    </div>
    <div class="form-group">
        <label>Ngày khám</label>
        <input type="date" class="form-control" name="txtNgayKham" placeholder="Nhập ngày khám" />
    </div>
    <div class="form-group">
        <label>Cơ sở khám</label>
        <textarea class="form-control" name="txtCSKham" placeholder="Nhập cơ sở khám" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Chất lượng</label>
        <textarea class="form-control" name="txtCL" placeholder="Nhập chất lượng" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Hướng dẫn</label>
        <textarea class="form-control" name="txtHD" placeholder="Nhập hướng dẫn" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Dịch vụ</label>
        <textarea class="form-control" name="txtDV" placeholder="Nhập dịch vụ" rows="5"></textarea>
    </div>

        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        