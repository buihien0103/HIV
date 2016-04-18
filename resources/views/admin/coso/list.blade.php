@section('controller', 'Cơ sở')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.coso.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Tên dịch vụ</th>
        <th>Địa chỉ</th>
        <th>GPS</th>
        <th>Hoạt động</th>
        <th>Thành lập</th>
        <th>Website</th>
        <th>Hình ảnh</th>
        <th>Giới thiệu</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Skype</th>
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
                <td>{!! $item["ten_dich_vu"]!!}</td>
                <td>{!! $item["dia_chi"]!!}</td>
                <td>{!! $item["gps"]!!}</td>
                <td>{!! $item["hoat_dong"]!!}</td>
                <td>{!! $item["thanh_lap"]!!}</td>
                <td>{!! $item["website"]!!}</td>
                <td><img src="{!! asset('resources/upload/'.$item['hinh_anh'])!!}
                " width="50" height="50"></td>
                <td>{!! $item["gioi_thieu"]!!}</td>
                <td>{!! $item["so_dien_thoai"]!!}</td>
                <td>{!! $item["email"]!!}</td>
                <td>{!! $item["skype"]!!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.coso.getDelete',$item['ma_co_so'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.coso.getEdit',$item['ma_co_so'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()