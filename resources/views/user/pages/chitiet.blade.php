@extends('user.master')
@section('content')
<div class="censite">  
<div class="box w578"><h3 class="headbox">Chi tiết tin tức</h3>
    <div class="chitiet">
        <h2>{!! $property_detail->fld_property_title !!}</h2>
        <p class="dientich">Diện tích: {!! $property_detail->fld_property_square !!}</p>
        <p class="price">Giá: {!! $property_detail->fld_property_price !!}</p>
        <p><font color="#ccc" size="2" style="font-weight:bold">Thông tin mô tả:</font><br> {!! $property_detail->fld_property_description !!}</p> 
        <p><font color="#007AFF" size="2" style="font-weight:bold">Đặc điểm dự án:</font>
            <br>Thuộc dự án: {!! $property_detail->fld_property_project !!}
            <br>Địa chỉ: {!! $property_detail->fld_property_address !!}
        </p> 
        <p><font color="#007AFF" size="2" style="font-weight:bold">Liên hệ:</font>
            <br>Tên liên lạc: {!! $property_detail->fld_property_contact !!}
            <br>Điện thoại: {!! $property_detail->fld_property_mobile !!}
            <br>Email: {!! $property_detail->fld_property_email !!}
        </p>    
    </div>
</div>
</div>
   
@endsection()