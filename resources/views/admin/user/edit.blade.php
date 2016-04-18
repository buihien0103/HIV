@section('controller', 'User')

@extends('admin.master')
@section('content')

</style>
 <div class="col-lg-7" style="padding-bottom:120px">
 	@include('admin.blocks.error')
    <form action="" method="POST" >
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <div class="form-group">
        <label>Mã bệnh nhân</label>
        <input class="form-control" name="txtMaBN" placeholder="Nhập mã bệnh nhân" value="{!! old('txtMaBN', isset($data)?$data['ma_benh_nhan']:null)!!}" />
    </div>
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" name="txtUsername" placeholder="Nhập Username" value="{!! old('txtUsername', isset($data)?$data['username']:null)!!}" />
    </div>
    
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="txtemail" placeholder="Nhập Email" value="{!! old('txtemail', isset($data)?$data['email']:null)!!}" />
    </div>

        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               