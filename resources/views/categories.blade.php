@extends('layout.main')

@section('container')
<h1>Event Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mt-5">
            <a href="/categories/{{$category->slug}}">
            <div class="card text-bg-dark">
                <img src="/img/reboisasi.jpg" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 f-s-3" style="background-color:rgba(0,0,0,0.7 )">{{$category->name}}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection