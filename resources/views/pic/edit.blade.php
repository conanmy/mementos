@extends('master')

@section('content')

<form action="/pic/update" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <img src="{{route('getentry', $pic->filename)}}" class="responsive" />
    </div>
    <input type="hidden" name="fileid" value="{{$pic->id}}" />
    <div class="form-group">
        <textarea name="desc" class="form-control">{{$pic->desc}}</textarea>
    </div>
    <input type="submit" class="btn btn-default" />
</form>

@stop
