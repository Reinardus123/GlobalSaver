@extends('dashboard.layouts.main')


@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="my-5">{{$event->title}}</h2>
            <a href="/dashboard/events" class="btn btn-success mb-3">@lang('events.kembali_ke_event')</a>
            <a href="/dashboard/events/{{$event->slug}}/edit" class="btn btn-warning mb-3">Edit</a>
            <form action="/dashboard/events/{{$event->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure ?')">@lang('events.hapus')</button>
              </form>

              @if($event->image)
                <div style="max-height: 350px; overflow:hidden ">
                    <img src="{{asset('storage/' . $event->image)}}" 
                    alt="{{$event->category->name}}">
                </div>
            @endif
            
                <h6 class="my-2">@lang('events.harga') : Rp {{$event->price}}</h6>
    
                {!! $event->body !!}
                
                    
            
        </div>
    </div>

</div>

@endsection