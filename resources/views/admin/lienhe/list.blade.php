@section('controller', 'Liên hệ')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.lienhe.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Hotline</th>
        <th>Câu hỏi</th>
        <th>Chia sẻ</th>
        
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
                <td>{!! $item["hotline"]!!}</td>
                <td>{!! $item["cau_hoi"]!!}</td>
                <td>{!! $item["chia_se"]!!}</td>
    
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.lienhe.getDelete',$item['ma_lien_he'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.lienhe.getEdit',$item['ma_lien_he'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()