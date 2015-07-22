@extends('master')

@section('content')

<form action="/pic/handleAdd" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <img src="{{route('getentry', $filename)}}" style="width:100px" />
    <input type="hidden" name="filename" value="{{$filename}}" />
    <textarea name="desc"></textarea>
    <input type="submit" />
</form>

@stop
