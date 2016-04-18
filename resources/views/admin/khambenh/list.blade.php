@section('controller', 'Khám bệnh')

@extends('admin.master')
@section('content')
<p><a href="{!!URL::route('admin.khambenh.getAdd')!!}" style="font-size:14px;">Thêm mới</a></p>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
        <th>ID</th>
        <th>Mã bệnh nhân</th>
        <th>Ngày khám</th>
        <th>Lý do</th>
        <th>Xét nghiệm máu</th>
        <th>CD4</th>
        <th>Tải lượng virus</th>
        <th>Nước tiểu</th>
        <th>Xét nghiệm khác</th>
        <th>Khám HIV</th>
        <th>Khám viêm gan B</th>
        <th>Khám viêm gan C</th>
        
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
                <td>{!! $item["ly_do"]!!}</td>
                <td>{!! $item["xet_nghiem_mau"]!!}</td>
                <td>{!! $item["cd4"]!!}</td>
                <td>{!! $item["tai_luong_virus"]!!}</td>
                <td>{!! $item["nuoc_tieu"]!!}</td>
                <td>{!! $item["xet_nghiem_khac"]!!}</td>
                <td>{!! $item["kham_hiv"]!!}</td>
                <td>{!! $item["kham_viem_gan_b"]!!}</td>
                <td>{!! $item["kham_viem_gan_c"]!!}</td>
    
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="{!!URL::route('admin.khambenh.getDelete',$item['ma_kham_benh'])!!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('admin.khambenh.getEdit',$item['ma_kham_benh'])!!}">Edit</a></td>
            </tr>
        @endforeach()
    
    </tbody>
</table>
@endsection()