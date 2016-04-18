@section('controller', 'Liên hệ')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.lienhe.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <div class="form-group">
        <label>Hotline</label>
        <textarea class="form-control" name="txtHotline" placeholder="Nhập hotline" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Câu hỏi</label>
        <textarea class="form-control" name="txtCauHoi" placeholder="Nhập câu hỏi" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Chia sẻ</label>
        <textarea class="form-control" name="txtChiaSe" placeholder="Nhập chia sẻ" rows="5"></textarea>
    </div>
   
        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        