@section('controller', 'Nghề nghiệp')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.nghenghiep.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <div class="form-group">
        <label>Tên nghề nghiệp</label>
        <input class="form-control" name="txtNgheNghiep" placeholder="Nhập tên nghề nghiệp" />
    </div>
    <div class="form-group">
        <label>Trạng thái</label>
        <label class="radio-inline">
        <input name="rdoStatus" value="1" checked="" type="radio">Enable
        </label>
        <label class="radio-inline">
        <input name="rdoStatus" value="0" type="radio">Disable
        </label>
    </div>
   
        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        