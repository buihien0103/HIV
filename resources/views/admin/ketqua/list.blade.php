@section('controller', 'Kết quả')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.ketqua.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Mã bệnh nhân</th>
        <th>CD4</th>
        <th>Tải lượng virus</th>
        <th>Sức khỏe</th>
        <th>Tuân thủ điều trị</th>
        
        
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
                <td>{!! $item["cd4"]!!}</td>
                <td>{!! $item["tai_luong_virus"]!!}</td>
                <td>{!! $item["suc_khoe"]!!}</td>
                <td>{!! $item["tuan_thu_dieu_tri"]!!}</td>
    
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.ketqua.getDelete',$item['ma_ket_qua'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.ketqua.getEdit',$item['ma_ket_qua'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()