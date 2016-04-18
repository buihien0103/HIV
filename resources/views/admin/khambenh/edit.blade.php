@section('controller', 'Khám bệnh')

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
        <input type="date" class="form-control" name="txtNgayKham" placeholder="Nhập ngày khám" value="{!! old('txtNgayKham', isset($data)?$data['ngay_kham']:null)!!}"/>
    </div>
    <div class="form-group">
        <label>Lý do</label>
        <textarea class="form-control" name="txtLyDo" placeholder="Nhập lý do" rows="5">{!! old('txtLyDo', isset($data)?$data['ly_do']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Xét nghiệm máu</label>
        <textarea class="form-control" name="txtXNMau" placeholder="Nhập xét nghiệm máu" rows="5">{!! old('txtXNMau', isset($data)?$data['xet_nghiem_mau']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>CD4</label>
        <textarea class="form-control" name="txtcd4" placeholder="Nhập CD4" rows="5">{!! old('txtcd4', isset($data)?$data['cd4']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Tải lượng virus</label>
        <textarea class="form-control" name="txttailuongVR" placeholder="Nhập tải lượng virut" rows="5">{!! old('txttailuongVR', isset($data)?$data[' tai_luong_virus']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Nước tiểu</label>
        <textarea class="form-control" name="txtNuocTieu" placeholder="Nhập nước tiểu" rows="5">{!! old('txtNuocTieu', isset($data)?$data['nuoc_tieu']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Xét nghiệm khác</label>
        <textarea class="form-control" name="txtXNKhac" placeholder="Nhập xét nghiệm khác" rows="5">{!! old('txtXNKhac', isset($data)?$data['xet_nghiem_khac']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Khám HIV</label>
        <textarea class="form-control" name="txtHIV" placeholder="Nhập khám HIV" rows="5">{!! old('txtHIV', isset($data)?$data['kham_hiv']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Khám viêm gan B</label>
        <textarea class="form-control" name="txtVGB" placeholder="Nhập khám viêm gan B" rows="5">{!! old('txtVGB', isset($data)?$data['kham_viem_gan_b']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Khám viêm gan C</label>
        <textarea class="form-control" name="txtVGC" placeholder="Nhập khám viêm gan C" rows="5">{!! old('txtVGC', isset($data)?$data['kham_viem_gan_c']:null)!!}</textarea>
    </div>
        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               