@extends('master')

@section('content')

<form action="/pic/store" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <img src="{{route('getentry', $filename)}}" class="responsive" />
    </div>
    <input type="hidden" name="filename" value="{{$filename}}" />
    <div class="form-group">
        <textarea name="desc" class="form-control"></textarea>
    </div>
    <input type="submit" class="btn btn-default" />
</form>

@stop
