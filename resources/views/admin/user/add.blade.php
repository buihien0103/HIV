@section('controller', 'User')

@extends('admin.master')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
<form action="{!! route('admin.user.getAdd') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	<div class="form-group">
        <label>Mã bệnh nhân</label>
        <input class="form-control" name="txtMaBN" placeholder="Nhập mã bệnh nhân" />
    </div>
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" name="txtUsername" placeholder="Nhập Username" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="txtpassword" placeholder="Nhập Password" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="txtemail" placeholder="Nhập Email" />
    </div>

        <button type="submit" class="btn btn-default">Thêm mới</button>
        <button type="reset" class="btn btn-default">Reset</button>
<form>
</div>
@endsection()        