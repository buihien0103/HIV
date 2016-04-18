@section('controller', 'Dân tộc')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.dantoc.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Tên dân tộc</th>
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
                <td>{!! $item["ten_dan_toc"]!!}</td>
                <td>
                    <?php
                        if ($item["trang_thai"]== 1)
                            echo "Enable";
                        else
                            echo "Disable";
                    ?>
                </td>
    
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.dantoc.getDelete',$item['ma_dan_toc'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.dantoc.getEdit',$item['ma_dan_toc'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()