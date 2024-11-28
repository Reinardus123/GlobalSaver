@extends('dashboard.layouts.main')


@section('container')
<div class="row my-3">
    <div class="col-lg-8">
        <h2 class="mb-5">{{$post->title}}</h2>
        <a href="/dashboard/posts" class="btn btn-success">Back to my posts</a>
        <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning">Edit</a>
        <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return conform('Are you sure ? ')">
              <i class="bi bi-trash"></i> Delete
            </button>
          </form>
          @if($post->image)
          <div style="max-height: 350px; overflow:hidden;">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}">
          </div>
          @endif
            {!! $post->body !!}
            
    </div>
</div>

@endsection