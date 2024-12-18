@extends('layout.main')


@section('container')



<body class="bg-body-tertiary">
<div class="container col-lg-8">
    <div class="book py-5">
      <h2 class="book">Book Event</h2>
      
        <div class="img-event">
          <img src="{{asset('storage/' . $events->image)}}" class= "mt-2" width="300" alt="{{$events->category->name}}">
        </div>
      <h4 class="title-event mb-3">{{$events->title}}</h4>
      <h4 class="title-event mb-3">@lang('events.harga') : {{$events->price}}</h4>
      <h4 class="title-event">@lang('events.date') : {{$events->created_at}}</h4>
    </div>
    <div class="row g-5 justify-content-center">
      <div class="col-md-7 col-lg-8 mb-5">
        <h4 class="mb-3">Billing address</h4>
        <form method="post" action="/book">
            @csrf
          <input class="d-none" type="number" id="gross_amount"  name="gross_amount" value="{{$events->price}}">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="first_name" class="form-label">@lang('events.nama_depan')</label>
              <input type="text" class="form-control input" id="first_name"  name="first_name" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="last_name" class="form-label">@lang('events.nama_belakang')</label>
              <input type="text" class="form-control input" id="last_name" name="last_name" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="phone" class="form-label">@lang('events.nomor_handphone')</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control input" id="phone" name="phone" required value="">
              <div class="invalid-feedback">
               Valid Phone Number is required.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">@lang('events.Email') <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control input" id="email" name="email"placeholder="you@gmail.com" value="">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                 </div>
            </div>
            <hr>
                <button class="btn btn-light btn-lg input" type="submit" id="pay-button" style="color:white">@lang('events.checkout')</button>
            </div>
             </form>
        </div>
     
    </div> 
 </div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="checkout.js"></script>






</body>


@endsection