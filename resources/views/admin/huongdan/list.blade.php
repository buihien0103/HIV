@section('controller', 'Hướng dẫn')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.huongdan.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Tên bệnh</th>
        <th>Khái niệm</th>
        <th>Đối tượng</th>
        <th>Triệu chứng</th>
        <th>Đường lây</th>
        <th>Chuẩn đoán</th>
        <th>Điều trị</th>
        <th>Biến chứng</th>
        <th>Dự phòng</th>
        <th>Website</th>
        <th>Quy trình</th>
        
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
                <td>{!! $item["ten_benh"]!!}</td>
                <td>{!! $item["khai_niem"]!!}</td>
                <td>{!! $item["doi_tuong"]!!}</td>
                <td>{!! $item["trieu_chung"]!!}</td>
                <td>{!! $item["duong_lay"]!!}</td>
                <td>{!! $item["chuan_doan"]!!}</td>
                <td>{!! $item["dieu_tri"]!!}</td>
                <td>{!! $item["bien_chung"]!!}</td>
                <td>{!! $item["du_phong"]!!}</td>
                <td>{!! $item["website"]!!}</td>
                <td>{!! $item["quy_trinh"]!!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.huongdan.getDelete',$item['ma_huong_dan'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.huongdan.getEdit',$item['ma_huong_dan'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()