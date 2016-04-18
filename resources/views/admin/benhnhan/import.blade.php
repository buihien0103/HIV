@section('controller', 'Import')
@extends('admin.master')
@section('content')
 <div class="col-lg-7" style="padding-bottom:120px">
 	  <form action="{{URL::route('admin.benhnhan.postImport')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
      <input type="file" name="file"/><button type="submit" name="submit" class="btn btn-info" role="button" >Save</button>
    </form>
</div>
@endsection()               