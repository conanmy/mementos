@extends('master')

@section('content')

<form action="/pic/update" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <img src="{{route('getentry', $pic->filename)}}" style="width:100px" />
    <input type="hidden" name="fileid" value="{{$pic->id}}" />
    <textarea name="desc">{{$pic->desc}}</textarea>
    <input type="submit" />
</form>

@stop
