@section('controller', 'Khám bệnh')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.khambenh.getAdd') !!}" method="POST">
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
        <label>Lý do</label>
        <textarea class="form-control" name="txtLyDo" placeholder="Nhập lý do" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Xét nghiệm máu</label>
        <textarea class="form-control" name="txtXNMau" placeholder="Nhập xét nghiệm máu" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>CD4</label>
        <textarea class="form-control" name="txtcd4" placeholder="Nhập CD4" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Tải lượng virus</label>
        <textarea class="form-control" name="txttailuongVR" placeholder="Nhập tải lượng virut" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Nước tiểu</label>
        <textarea class="form-control" name="txtNuocTieu" placeholder="Nhập nước tiểu" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Xét nghiệm khác</label>
        <textarea class="form-control" name="txtXNKhac" placeholder="Nhập xét nghiệm khác" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Khám HIV</label>
        <textarea class="form-control" name="txtHIV" placeholder="Nhập khám HIV" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Khám viêm gan B</label>
        <textarea class="form-control" name="txtVGB" placeholder="Nhập khám viêm gan B" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Khám viêm gan C</label>
        <textarea class="form-control" name="txtVGC" placeholder="Nhập khám viêm gan C" rows="5"></textarea>
    </div>
   
        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        