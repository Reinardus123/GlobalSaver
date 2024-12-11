@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Events </h1>
  </div>


  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{session('success')}}
  </div>

  @endif

  <div class="table-responsive">
    <a href="/dashboard/events/create" class="btn btn-primary mb-3">@lang('events.buat_event_baru')</a>    
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">@lang('events.judul')</th>
          <th scope="col">@lang('events.kategori')</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $events as $event )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$event->title}}</td>
            <td>{{$event->category->name}}</td>
            <td>
                <a href="/dashboard/events/{{$event->slug}}">
                  <button class="d-inline border-0 badge-bg-danger">
                    <i class="bi-eye-fill"></i></a>
                  </button>
                <a href="/dashboard/events/{{$event->slug}}/edit"><i class="bi bi-pen"></i></a>
                <form action="/dashboard/events/{{$event->slug}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge-bg-danger border-0" onclick="return confirm('Are you sure ?')"><i class="bi bi-trash"></i></button>
                </form>
              
            </td>
          </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>

  <a href="/events" class="btn btn-primary">@lang('events.kembali_ke_event')</a>

@endsection


