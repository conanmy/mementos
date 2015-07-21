@extends('master')

@section('content')

<form action="/fileentry/add" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="file" name="filefield" />
    <input type="submit" />
</form>

<h1>Pictures list</h1>

<div class="row">
    <ul>
        @foreach($entries as $entry)
        <li>
            <img src="{{route('getentry', $entry->filename)}}" style="width:100px" />
            <p>{{$entry->filename}}</p>
        </li>
        @endforeach
    </ul>
</div>

@stop