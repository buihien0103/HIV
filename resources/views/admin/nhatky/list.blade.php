@section('controller', 'Nhật ký')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.nhatky.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Mã bệnh nhân</th>
        <th>Ngày</th>
        <th>Tình trạng sức khỏe</th>
        <th>VAS</th>
        <th>Tâm trạng</th>
        <th>Tập thể dục</th>
        <th>Hút thuốc</th>
        <th>Uống rượu</th>
        <th>Ghi chú</th>
        
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
                <td>{!! $item["ngay"]!!}</td>
                <td>{!! $item["tinh_trang_suc_khoe"]!!}</td>
                <td>{!! $item["vas"]!!}</td>
                <td>{!! $item["tam_trang"]!!}</td>
                <td>{!! $item["tap_the_duc"]!!}</td>
                <td>{!! $item["hut_thuoc"]!!}</td>
                <td>{!! $item["uong_ruou"]!!}</td>
                <td>{!! $item["ghi_chu"]!!}</td>
    
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.nhatky.getDelete',$item['ma_nhat_ky'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.nhatky.getEdit',$item['ma_nhat_ky'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()