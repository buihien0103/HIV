@section('controller', 'Kết quả')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.ketqua.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	<div class="form-group">
        <label>Mã bệnh nhân</label>
        <input class="form-control" name="txtMaBN" placeholder="Nhập mã bệnh nhân" />
    </div>
    <div class="form-group">
        <label>CD4</label>
        <textarea class="form-control" name="txtcd4" placeholder="Nhập CD4" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Tải lượng virut</label>
        <textarea class="form-control" name="txttailuongVR" placeholder="Nhập tải lượng virut" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Sức khỏe</label>
        <textarea class="form-control" name="txtSK" placeholder="Nhập sức khỏe" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Tuân thủ điều trị</label>
        <textarea class="form-control" name="txtTTDT" placeholder="Nhập tuân thủ điều trị" rows="5"></textarea>
    </div>
   
        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        