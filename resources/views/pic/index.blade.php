@extends('master')

@section('content')

<form id="pic-uploader" action="/fileentry/add" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="file" name="filefield" />
    <input type="submit" />
</form>

<h1>Pictures list</h1>

<div class="row">
    <ul>
        @foreach($pics as $pic)
        <li>
            <img src="{{route('getentry', $pic->filename)}}" style="width:100px" />
            <p>{{$pic->desc}}</p>
        </li>
        @endforeach
    </ul>
</div>

@stop