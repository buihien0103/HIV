@section('controller', 'User')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.user.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Mã bệnh nhân</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        
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
                <td>{!! $item["username"]!!}</td>
                <td>{!! $item["password"]!!}</td>
                <td>{!! $item["email"]!!}</td>
                
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.user.getDelete',$item['user_id'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.user.getEdit',$item['user_id'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()