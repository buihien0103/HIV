@section('controller', 'Nghề nghiệp')

@extends('admin.master')
@section('content')
 <div class="col-lg-7" style="padding-bottom:120px">
 	@include('admin.blocks.error')
    <form action="" method="POST" >
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

    <div class="form-group">
        <label>Tên nghề nghiệp</label>
        <input class="form-control" name="txtNgheNghiep" placeholder="Nhập tên quyền" value="{!! old('txtNgheNghiep', isset($data)?$data['ten_nghe_nghiep']:null)!!}" />
    </div>
    <div class="form-group">
        <label>Trạng thái</label>
        <label class="radio-inline">
        <input name="rdoStatus" value="1" <?php if($data['trang_thai']=='1') echo "checked='checked'";?> type="radio">Enable
        </label>
        <label class="radio-inline">
        <input name="rdoStatus" value="0" <?php if($data['trang_thai']=='0') echo "checked='checked'";?> type="radio">Disable
        </label>
    </div>
        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               