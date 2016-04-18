@section('controller', 'Uống thuốc')

@extends('admin.master')
@section('content')

</style>
 <div class="col-lg-7" style="padding-bottom:120px">
 	@include('admin.blocks.error')
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    
    <div class="form-group">
        <label>Mã bệnh nhân</label>
        <input type="text" class="form-control" name="txtMaBN" placeholder="Nhập mã bệnh nhân" value="{!! old('txtMaBN', isset($data)?$data['ma_benh_nhan']:null)!!}" >
    </div>
    <div class="form-group">
        <label>Tên thuốc</label>
        <textarea class="form-control" name="txtTenThuoc" placeholder="Nhập tên thuốc" rows="5">{!! old('txtTenThuoc', isset($data)?$data['ten_thuoc']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Hình ảnh hiện tại</label>
        <img src="{!! asset('resources/upload/'.$data['hinh_anh_thuoc'])!!}" width="50" height="50">
    </div>
    <div class="form-group">
        <label>Hình ảnh cần sửa</label>
        <input type="file" name="fImages" >
    </div>
    <div class="form-group">
        <label>Giờ uống</label>
        <textarea class="form-control" name="txtGioUong" placeholder="Nhập giờ uống" rows="5">{!! old('txtGioUong', isset($data)?$data['gio_uong']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Số lượng</label>
        <input type="text" class="form-control" name="txtSL" placeholder="Nhập số lượng" value="{!! old('txtSL', isset($data)?$data['so_luong']:null)!!}" >
    </div>
    <div class="form-group">
        <label>Lặp lại</label>
        <textarea class="form-control" name="txtLapLai" placeholder="Nhập lặp lại" rows="5">{!! old('txtLapLai', isset($data)?$data['lap_lai']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Ngày bắt đầu</label>
        <input type="text" type="date" class="form-control" name="txtBatDau" placeholder="Nhập ngày bắt đầu" value="{!! old('txtBatDau', isset($data)?$data['ngay_bat_dau']:null)!!}" >
    </div>
    <div class="form-group">
        <label>Ngày kết thúc</label>
        <input type="text" type="date" class="form-control" name="txtKetThuc" placeholder="Nhập ngày kết thúc" value="{!! old('txtKetThuc', isset($data)?$data['ngay_ket_thuc']:null)!!}" >
    </div>
    <div class="form-group">
        <label>Tổng số thuốc</label>
        <input type="text" class="form-control" name="txTST" placeholder="Nhập tổng số thuốc" value="{!! old('txTST', isset($data)?$data['tong_so_thuoc']:null)!!}" >
    </div>
    <div class="form-group">
        <label>Âm thanh</label>
        <textarea class="form-control" name="txtAmThanh" placeholder="Nhập âm thanh" rows="5">{!! old('txtAmThanh', isset($data)?$data['am_thanh']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Xác nhận</label>
        <textarea class="form-control" name="txtXacNhan" placeholder="Nhập xác nhận" rows="5">{!! old('txtXacNhan', isset($data)?$data['xac_nhan']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Số thuốc còn lại</label>
        <input type="text" class="form-control" name="txtConLai" placeholder="Nhập số thuốc còn lại" value="{!! old('txtConLai', isset($data)?$data['so_thuoc_con_lai']:null)!!}" >
    </div>
    <div class="form-group">
        <label>Ngày tái khám</label>
        <input type="text" type="date" class="form-control" name="txtNgayTaiKham" placeholder="Nhập ngày tái khám" value="{!! old('txtNgayTaiKham', isset($data)?$data['ngay_tai_kham']:null)!!}" >
    </div>
    <div class="form-group">
        <label>Cơ sở tái khám</label>
        <textarea class="form-control" name="txtCSTK" placeholder="Nhập cơ sở tái khám" rows="5">{!! old('txtCSTK', isset($data)?$data['co_so_tai_kham']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Địa chỉ tái khám</label>
        <textarea class="form-control" name="txtDCTK" placeholder="Nhập số địa chỉ tái khám" rows="5">{!! old('txtDCTK', isset($data)?$data['dia_chi_tai_kham']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Bác sĩ tái khám</label>
        <textarea class="form-control" name="txtBSTK" placeholder="Nhập bác sĩ tái khám" rows="5">{!! old('txtBSTK', isset($data)?$data['bac_si_tai_kham']:null)!!}</textarea>
    </div>

        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               