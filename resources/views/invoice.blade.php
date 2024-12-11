@extends('layout.main')


@section('container')

<h1>{{$book->first_name}}</h1>
<h1>{{$book->last_name}}</h1>
<h1>{{$book->phone}}</h1>
<h1>{{$book->email}}</h1>


@endsection