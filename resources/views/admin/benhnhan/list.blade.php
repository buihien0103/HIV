@section('controller', 'Bệnh nhân')

@extends('admin.master')
@section('content')

<p><a href="{!!URL::route('admin.benhnhan.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Họ tên</th>
        <th>Năm sinh</th>
        <th>Giới tính</th>
        <th>Mã học vấn</th>
        <th>Mã dân tộc</th>
        <th>Mã tôn giáo</th>
        <th>Mã nghề nghiệp</th>
        <th>Chiều cao</th>
        <th>Cân nặng</th>
        <th>BMI</th>
        

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
                <td><a href="{!! url('chi-tiet',[$item['ma_benh_nhan']]) !!}">{!! $item['ho_ten'] !!}</a></td>
                <td>{!! $item["nam_sinh"]!!}</td>
                <td>
                    <?php
                        if ($item["gioi_tinh"] == 1)
                            echo "Nam";
                        else
                            echo "Nữ";
                    ?>
                </td>
                <td>{!! $item['ma_hoc_van']!!}</td>
                <td>{!! $item["ma_dan_toc"]!!}</td>
                <td>{!! $item["ma_ton_giao"]!!}</td>
                <td>{!! $item["ma_nghe_nghiep"]!!}</td>
                <td>{!! $item["chieu_cao"]!!}</td>
                <td>{!! $item["can_nang"]!!}</td>
                <td>{!! $item["bmi"]!!}</td>

                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.benhnhan.getDelete',$item['ma_benh_nhan'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.benhnhan.getEdit',$item['ma_benh_nhan'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
<p style="float: right"><a href="{{URL::route('admin.benhnhan.export')}}"><button>Export</button></a></p>
<p style="float: right"><a href="{{URL::route('admin.benhnhan.getImport')}}"><button>Import</button></a></p>
@endsection()