@section('controller', 'Thông tin chi tiết')

@extends('admin.master')
@section('content')
<style type="text/css">
    .censite{width:910px; float:left; margin-left: 15px}
    .chitiet{
    float: left;
    margin-left: 15px;

}
</style>
    <div class="censite">  
    <div class="chitiet">
         <p><font style="margin-right: 15px; font-weight: bold;">Mã nhắc nhở:</font> {!! $detail->ma_nhac_nho !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Mã bệnh nhân:</font> {!! $detail->ma_benh_nhan !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Tên thuốc: </font>
         {!! $detail->ten_thuoc !!}
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Hình ảnh :</font><img src="{!! asset('resources/upload/'.$detail->hinh_anh_thuoc)!!}
                " width="50" height="50"></td></p>
          <p><font style="margin-right: 15px; font-weight: bold;">Giờ uống :</font> {!! $detail->gio_uong !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Số lượng:</font> {!! $detail->so_luong !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Lặp lại:</font> {!! $detail->lap_lai!!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Ngày bắt đầu:</font> {!! $detail->ngay_bat_dau !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Ngày kết thúc:</font> {!! $detail->ngay_ket_thuc !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Tổng số thuốc:</font> {!! $detail->tong_so_thuoc!!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Âm thanh: </font>{!! $detail->am_thanh  !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Xác nhận: </font>
         {!! $detail->xac_nhan !!}
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Số thuốc còn lại:</font>
         {!! $detail->so_thuoc_con_lai!!}
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Ngày tái khám:</font>
         {!! $detail->ngay_tai_kham!!}
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Cơ sở tái khám:</font>
         {!! $detail->co_so_tai_kham!!}
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Địa chỉ tái khám: </font>
         {!! $detail->dia_chi_tai_kham!!}
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Bác sĩ tái khám:</font> {!! $detail->bac_si_tai_kham !!}</p>

    </div>
</div>
</div>
@endsection()