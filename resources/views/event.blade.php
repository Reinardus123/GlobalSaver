@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-5 title-event">{{$event->title}}</h2>
            <p>By. <a href="/authors/{{$event->author->username}}" class="text-decoration-none" style="color: white">
                {{$event->author->name}}</a> in <a href="/categories/{{$event->category->slug}}" class="text-decoration-none" style="color: white">{{$event->category->name}}</a></p>
                <h6 class="my-2">Price : Rp {{$event->price}}</h6>
                @if($event->image)
                    <div style="max-height: 350px; overflow:hidden; ">
                        <img src="{{asset('storage/' . $event->image)}}" alt="{{$event->category->name}}">
                    </div>
                 @endif
                {!! $event->body !!}
                
                <div class=" d-flex justify-content-center">
                    <a href="/book/{{$event->slug}}" class="mt-3 btn btn-primary" >@lang('events.book')</a>
                </div>
                
        </div>
    </div>

</div>

@endsection





