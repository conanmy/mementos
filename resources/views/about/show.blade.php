@extends('master')

@section('content')

<p>{{$about->about}}</p>
<a href="/about/edit" class="btn btn-default">Edit</a>

@stop