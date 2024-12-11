@extends('layout.main')

@section('container')

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner m-0">
      <div class="carousel-item active c-item">
        <img src="img/reforestation.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">@lang('events.event_available')</p>
          <h1 class="display-1 fw-bolder text-capitalize">@lang('events.reboisasi')</h1>
          {{-- <button class="btn btn-dark px-4 py-2 fs-5 mt-5">Book Event</button> --}}
        </div>  
      </div>
      <div class="carousel-item c-item">
        <img src="img/eco-tourism.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">@lang('events.event_available')</p>
          <h1 class="display-1 fw-bolder text-capitalize">@lang('events.eco_tourism')</h1>
          {{-- <button class="btn btn-dark px-4 py-2 fs-5 mt-5">Book Event</button> --}}
        </div>  
      </div>
      <div class="carousel-item c-item">
        <img src="img/recycle.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">@lang('events.event_available')</p>
          <h1 class="display-1 fw-bolder text-capitalize">@lang('events.recycle')</h1>
          {{-- <button class="btn btn-dark px-4 py-2 fs-5 mt-5">Book Event</button> --}}
        </div>
  
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container py-4">
    <div class="row align-items-md-stretch">
      <div class="col-md-6 mb-3">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>@lang('posts.global')</h2>
          <p>@lang('posts.reforest')</p>
          <button class="btn btn-outline-light" type="button">@lang('posts.baca')</button>
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>@lang('posts.nature') </h2>
          <p>@lang('posts.nature1')</p>
          <button class="btn btn-outline-light" type="button">@lang('posts.baca')</button>
        </div>
      </div>
    </div>

  

  
    <footer class="pt-3 mt-4 text-body-secondary border-top">
      <p style="color:white";> Global Saver ©2024</p>
    </footer>
  </div>

  

   
@endsection