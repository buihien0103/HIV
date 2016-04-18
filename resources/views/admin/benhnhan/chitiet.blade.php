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
         <p><font style="margin-right: 15px; font-weight: bold;">Họ tên:</font> {!! $detail->ho_ten !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Năm sinh:</font> {!! $detail->nam_sinh !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Giới tính: </font>
         <?php
            if ($detail->gioi_tinh == 1)
                echo "Nam";
            else
                echo "Nữ";
        ?>
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Mã học vấn:</font> {!! $detail->ma_hoc_van !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Mã dân tộc:</font> {!! $detail->ma_dan_toc !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Mã tôn giáo:</font> {!! $detail->ma_ton_giao !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Mã nghề nghiệp:</font> {!! $detail->ma_nghe_nghiep !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Chiều cao:</font> {!! $detail->chieu_cao !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Cân nặng:</font> {!! $detail->can_nang !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">BMI: </font>{!! $detail->bmi !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Viêm gan B: </font>
         <?php
            if ($detail->viem_gan_b == 1)
                echo "Có";
            else
                echo "Không";
        ?>
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Viêm gan C:</font>
         <?php
            if ($detail->viem_gan_c == 1)
               echo "Có";
            else
                echo "Không";
        ?>
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Gia đình HIV:</font>
         <?php
            if ($detail->gd_hiv == 1)
                echo "Có";
            else
                echo "Không";
        ?>
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Gia đình viêm gan B:</font>
         <?php
            if ($detail->gd_viem_gan_b == 1)
                echo "Có";
            else
                echo "Không";
        ?>
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Gia đình viên gan C: </font>
         <?php
            if ($detail->gd_viem_gan_c == 1)
                echo "Có";
            else
                echo "Không";
        ?>
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Dị ứng thuốc:</font> {!! $detail->di_ung_thuoc !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Dị ứng thức ăn:</font> {!! $detail->di_ung_thuc_an !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Dị ứng thời tiết: </font>{!! $detail->di_ung_thoi_tiet !!}</p>
         <p><font style="margin-right: 15px; font-weight: bold;">Điều trị lao:</font>
         <?php
            if ($detail->dieu_tri_lao == 1)
                echo "Có";
            else
                echo "Không";
        ?>
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Nhiễm trùng cơ hội: </font>
         <?php
            if ($detail->nhiem_trung_co_hoi == 1)
                echo "Có";
            else
                echo "Không";
        ?>
         </p>
         <p><font style="margin-right: 15px; font-weight: bold;">Hút thuốc: </font>
         <?php
            if ($detail->hut_thuoc == 1)
                echo "Có";
            else
                echo "Không";
        ?>
         </p>

    </div>
</div>
</div>
@endsection()