@extends('master')

@section('content')

<form action="/about/store" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <textarea name="about"></textarea>
    <input type="submit" />
</form>

@stop