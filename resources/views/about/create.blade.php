@extends('master')

@section('content')

<form action="/about/store" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <textarea name="about" class="form-control"></textarea>
    <input type="submit" class="btn btn-default" />
</form>

@stop