@section('controller', 'Hướng dẫn')

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
        <label>Ngày khám</label>
        <input class="form-control" name="txtNgayKham" placeholder="Nhập ngày khám" value="{!! old('txtNgayKham', isset($data)?$data['ngay_kham']:null)!!}"/>
    </div>
    <div class="form-group">
        <label>Cơ sở khám</label>
        <textarea class="form-control" name="txtCSKham" placeholder="Nhập cơ sở khám" rows="5">{!! old('txtCSKham', isset($data)?$data['co_so_kham']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Chất lượng</label>
        <textarea class="form-control" name="txtCL" placeholder="Nhập chất lượng" rows="5">{!! old('txtCL', isset($data)?$data['chat_luong']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Hướng dẫn</label>
        <textarea class="form-control" name="txtHD" placeholder="Nhập hướng dẫn" rows="5">{!! old('txtHD', isset($data)?$data['huong_dan']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Dịch vụ</label>
        <textarea class="form-control" name="txtDV" placeholder="Nhập dịch vụ" rows="5">{!! old('txtDV', isset($data)?$data['dich_vu']:null)!!}</textarea>
    </div>
        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               