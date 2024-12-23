@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts </h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
   {{session('success')}}
  </div>
  
  @endif

  <div class="table-responsive ">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">@lang('posts.buat_post_baru')</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">@lang('posts.judul')</th>
          <th scope="col">@lang('posts.kategori')</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $post)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->category->name}}</td>
            <td>
                <a href="posts/{{$post->slug}}"><i class="bi bi-eye-fill badge-bg-info"></i></a>
                <a href="/dashboard/posts/{{$post->slug}}/edit"><i class="bi bi-pen"></i></a>
                <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge-bg-danger border-0" onclick="return conform('Are you sure ? ')">
                    <i class="bi bi-trash"></i>
                  </button>
                </form>
                
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    
     <a href="/posts" class="btn btn-primary">@lang('posts.kembali_ke_post')</a>
  </div>

  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


@endsection


  