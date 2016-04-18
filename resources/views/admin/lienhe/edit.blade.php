@section('controller', 'Liên hệ')

@extends('admin.master')
@section('content')

</style>
 <div class="col-lg-7" style="padding-bottom:120px">
 	@include('admin.blocks.error')
    <form action="" method="POST" >
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

    <div class="form-group">
        <label>Hotline</label>
        <textarea class="form-control" name="txtHotline" placeholder="Nhập hotline" rows="5">{!! old('txtHotline', isset($data)?$data['hotline']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Câu hỏi</label>
        <textarea class="form-control" name="txtCauHoi" placeholder="Nhập câu hỏi" rows="5">{!! old('txtCauHo', isset($data)?$data['cau_hoi']:null)!!}</textarea>
    </div>
    <div class="form-group">
        <label>Chia sẻ</label>
        <textarea class="form-control" name="txtChiaSe" placeholder="Nhập chia sẻ" rows="5">{!! old('txtChiaSe', isset($data)?$data['chia_se']:null)!!}</textarea>
    </div>
        <button type="submit" class="btn btn-default">Cập nhật</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()               