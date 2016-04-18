@section('controller', 'Nghề nghiệp')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.nghenghiep.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Tên nghề nghiệp</th>
        <th>Trạng thái</th>
        
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
                <td>{!! $item["ten_nghe_nghiep"]!!}</td>
                <td>
                    <?php
                        if ($item["trang_thai"]== 1)
                            echo "Enable";
                        else
                            echo "Disable";
                    ?>
                </td>
    
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.nghenghiep.getDelete',$item['ma_nghe_nghiep'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.nghenghiep.getEdit',$item['ma_nghe_nghiep'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()