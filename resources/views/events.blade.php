@extends('layout.main')

@section('container')

<h1 class="mb-3 text-center">{{$title}}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/events">
      @if (request('category'))
      <input type="hidden" name="category" value="{{request('category')}}">
      @endif
      @if (request('author'))
      <input type="hidden" name="author" value="{{request('author')}}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>      
    </form>
  </div>
</div>


@if ($events->count() > 0)
<div class="card mb-3">
  @if($events[0]->image)
          <div style="max-height: 350px; overflow:hidden;">
            <img src="{{asset('storage/' . $events[0]->image)}}" alt="{{$events[0]->category->name}}">
          </div>
          @endif
    <div class="card-body text-center">
      <h5 class="card-title"><a href="events/{{$events[0]->slug}}" class="text-decoration-none text-dark">{{$events[0]->title}}</a></h5>
      <p>
        <small class="text-muted">
            By <a href="authors/{{$events[0]->author->username}}" 
                class="text-decoration-none">{{$events[0]->author->name}}</a> in 
        <a href="/events?category={{$events[0]->category->slug}}" class="text-decoration-none">{{$events[0]->category->name}}</a> {{$events[0]->created_at->diffForHumans()}}
    </small>
    </p>
      <p class="card-text">{{$events[0]->excerpt}}</p>
      <a href="/events/{{$events[0]->slug}}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>



<div class="container">
    <div class="row">
        @foreach ($events->skip(1) as $event)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color :rgba(0,0,0,0.7 green, blue, alpha)"><a href="/posts?category={{$event->category->slug}}">{{ $event->category->name}}</a></div>
                @if($event->image)
                    <img src="{{asset('storage/' . $event->image)}}" alt="{{$event->category->name}}">
                 
                  @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $event->title }}</h5>
                  <p>
                    <small class="text-muted">
                        By <a href="/authors/{{$event->author->username}}" 
                            class="text-decoration-none">{{$event->author->name}}</a> {{$event->created_at->diffForHumans()}}
                </small>
                </p>
                  <p class="card-text">{{$event->excerpt}}</p>
                  <a href="/events/{{$event->slug}}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
            
        @endforeach

    </div>

</div>
@else
    <p class="text-center fs-4">No Post Found.</p>
@endif

<div class="d-flex justify-content-end">
{{-- {{ $posts->links()}} --}}
</div>
@endsection


{{-- @foreach ($posts->skip(1) as $post)

    <article class="mb-5 border-bottom pb-4">
        <h2> 
            <a href="/posts/{{$post->slug}}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>

        <p>By <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>
        <p>{{$post->excerpt}}</p>

        <a href="/posts/{{$post->slug}}" class="text-decoration-none">Read More....</a>
    </article>
@endforeach --}}
    
  







