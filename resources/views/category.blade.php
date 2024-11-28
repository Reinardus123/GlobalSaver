@extends('layout.main')

@section('container')

@foreach ($events as $event)
<h1>Event Category : {{$category}}</h1>
    <article class="mb-2">
        <h2> 
            <a href="/events/{{$event->slug}}">{{ $event->title }}</a>
        </h2>
        <p>{{$event->excerpt}}</p>
    </article>
@endforeach
    






@endsection