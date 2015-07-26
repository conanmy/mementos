@extends('master')

@section('content')

<form action="/about/update" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <textarea name="about">{{$about->about}}</textarea>
    <input type="submit" />
</form>

@stop