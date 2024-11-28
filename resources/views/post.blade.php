@extends('layout.main')

@section('container')

<div class="container">
    {{-- <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-5"></h2>
            <p>By. <a href="/authors/{{$post->author->username}}" class="text-decoration-none">
                {{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>
                @if($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}">
                    </div>
                 @endif
                {!! $post->body !!}
                <a href="/posts" class="d-block mt-3">Back to post</a>
        </div> --}}

    {{-- </div> --}}
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p>By. <a href="/authors/{{$post->author->username}}" class="text-decoration-none">
            {{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>
            @if($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}">
            </div>
         @endif
          <p class="card-text"> {!! $post->body !!}</p>
          
        </div>
      </div>

</div>

  

@endsection





