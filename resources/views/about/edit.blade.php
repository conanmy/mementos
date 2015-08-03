@extends('master')

@section('content')

<form action="/about/update" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <textarea name="about" class="form-control">{{$about->about}}</textarea>
    <input type="submit" class="btn btn-default" />
</form>

@stop