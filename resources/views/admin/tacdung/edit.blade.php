@section('controller', 'Tác dụng')

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
        <label>Ngày gặp</label>
        <input type="date" class="form-control" name="txtNgay" placeholder="Nhập ngày gặp" value="{!! old('txtNgay', isset($data)?$data['ngay_gap']:null)!!}" />
    </div>
    <div class="form-group">
        <label>Đơn thuốc</label>
        <textarea class="form-control" name="txtDonThuoc" placeholder="Nhập đơn thuốc" rows="5">{!! old('txtDonThuoc', isset($data)?$data['don_thuoc']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" name="txtMoTa" placeholder="Nhập mô tả" rows="5">{!! old('txtMoTa', isset($data)?$data['mo_ta']:null)!!}</textarea>
    </div>
        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               