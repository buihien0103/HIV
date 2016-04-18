@section('controller', 'Uống thuốc')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.uongthuoc.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Mã nhắc nhở</th>
        <th>Mã bệnh nhân</th>
        <th>Tên thuốc</th>
        <th>Hình ảnh thuốc</th>
        <th>Giờ uống</th>
        <th>Số lượng/th>
        <th>Lặp lại</th>
        <th>Ngày bắt đầu</th>
        <th>Ngày kết thúc</th>
        <th>Tổng số thuốc</th>
        

        <th>Delete</th>
        <th>Edit</th>
        </tr>
    </thead>
    <tbody>
		<?php $stt=0?>
        @foreach ($data as $item)
			<?php $stt = $stt + 1 ?>
            <tr class="odd gradeX" align="center">
                <td>{!! $stt!!}</td>
                <td><a href="{!! url('chi-tiet-uong-thuoc',[$item['ma_nhac_nho']]) !!}">{!! $item["ma_nhac_nho"]!!}</a></td>
                <td>{!! $item["ma_benh_nhan"]!!}</td>
                <td>{!! $item["ten_thuoc"]!!}</td>
                <td><img src="{!! asset('resources/upload/'.$item['hinh_anh_thuoc'])!!}
                " width="50" height="50"></td>
                <td>{!! $item["gio_uong"]!!}</td>
                <td>{!! $item["so_luong"]!!}</td>
                <td>{!! $item["lap_lai"]!!}</td>
                
                <td>{!! $item["ngay_bat_dau"]!!}</td>
                <td>{!! $item["ngay_ket_thuc"]!!}</td>
                <td>{!! $item["tong_so_thuoc"]!!}</td>
                
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.uongthuoc.getDelete',$item['ma_nhac_nho'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.uongthuoc.getEdit',$item['ma_nhac_nho'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()