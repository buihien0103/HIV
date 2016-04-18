@section('controller', 'Nhật ký')

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
        <label>Ngày</label>
        <input class="form-control" type="date" name="txtNgay" placeholder="Nhập ngày" value="{!! old('txtNgay', isset($data)?$data['ngay']:null)!!}" />
    </div>
    <div class="form-group">
        <label>Tình trạng sức khỏe</label>
        <textarea class="form-control" name="txtTinhTrang" placeholder="Nhập tình trạng" rows="5">{!! old('txtTinhTrang', isset($data)?$data['tinh_trang_suc_khoe']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>VAS</label>
        <textarea class="form-control" name="txtVAS" placeholder="Nhập VAS" rows="5">{!! old('txtVAS', isset($data)?$data['vas']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Tâm trạng</label>
        <textarea class="form-control" name="txtTamTrang" placeholder="Nhập tâm trạng" rows="5">{!! old('txtTamTrang', isset($data)?$data['tam_trang']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Tập thể dục</label>
        <textarea class="form-control" name="txtTD" placeholder="Nhập tập thể dục" rows="5">{!! old('txtTD', isset($data)?$data['tap_the_duc']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Hút thuốc</label>
        <textarea class="form-control" name="txtHutThuoc" placeholder="Nhập hút thuốc" rows="5">{!! old('txtHutThuoc', isset($data)?$data['hut_thuoc']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Uống rượu</label>
        <textarea class="form-control" name="txtUongRuou" placeholder="Nhập uống rượu" rows="5">{!! old('txtUongRuou', isset($data)?$data['uong_ruou']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Ghi chú</label>
        <textarea class="form-control" name="txtGhiChu" placeholder="Nhập ghi chú" rows="5">{!! old('txtGhiChu', isset($data)?$data['ghi_chu']:null)!!}</textarea>
    </div>
        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               