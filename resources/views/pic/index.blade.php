@extends('master')

@section('content')

<form id="pic-uploader" action="/fileentry/add" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
    <label for="exampleInputFile">Add picture</label>
    <input type="file" name="filefield" />
    </div>
    <input type="submit" class="btn btn-default" />
</form>

<h1>Pictures list</h1>

<div class="row">
    <ul>
        @foreach($pics as $pic)
        <li>
            <img src="{{route('getentry', $pic->filename)}}" class="img-responsive" />
            <blockquote><p>{{$pic->desc}}</p></blockquote>
            <a href="/pic/edit/{{$pic->id}}" class="btn btn-default">Edit</a>
        </li>
        @endforeach
    </ul>
</div>

@stop