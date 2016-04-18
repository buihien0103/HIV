@section('controller', 'Dịch vụ')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.dichvu.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Mã bệnh nhân</th>
        <th>Ngày khám</th>
        <th>Cơ sở khám</th>
        <th>Chất lượng</th>
        <th>Hướng dẫn</th>
        <th>Dịch vụ</th>
        
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
                <td>{!! $item["ma_benh_nhan"]!!}</td>
                <td>{!! $item["ngay_kham"]!!}</td>
                <td>{!! $item["co_so_kham"]!!}</td>
                <td>{!! $item["chat_luong"]!!}</td>
                <td>{!! $item["huong_dan"]!!}</td>
                <td>{!! $item["dich_vu"]!!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.dichvu.getDelete',$item['ma_dich_vu'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.dichvu.getEdit',$item['ma_dich_vu'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()