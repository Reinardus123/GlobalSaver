@extends('layout.main')


@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-xl-6 card1">
            
                <p>{{$book->title}}</p>
                <p>{{$book->price}}</p>

                <div class="card text-bg-secondary mb-3 card2">
                    <div class="card-header d-flex justify-content-center">Confirmation payment</div>
                    <div class="card-body">
                      <h6 class="card-title mb-4 title-event1">@lang('events.nama_depan')     : {{$book->first_name}}</h6>
                      <h6 class="card-title mb-4 title-event1">@lang('events.nama_belakang')  : {{$book->last_name}}</h6>
                      <h6 class="card-title mb-4 title-event1">@lang('events.nomor_handphone')  : {{$book->email}}</h6>
                      <h6 class="card-title title-event1">@lang('events.Email')  : {{$book->phone}}</h6>
                    </div>
                  




                <div class=" d-flex justify-content-center my-3">
                    <button id="pay-button" class="mt-3 btn btn-primary" >@lang('events.pay')</button>
                </div>
                

                                
                <!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->
                <div id="snap-container"></div>

                <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
                <script type="text/javascript"
                src="https://app.sandbox.midtrans.com/snap/snap.js"
                data-client-key="{{config('midtrans.client_key')}}">
                </script>
                <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->


                <script type="text/javascript">
                    // For example trigger on button clicked, or any time you need
                    var payButton = document.getElementById('pay-button');
                    payButton.addEventListener('click', function () {
                        console.log("clicked")
                    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
                    // Also, use the embedId that you defined in the div above, here.
                    window.snap.embed('{{$snapToken}}', {
                        embedId: 'snap-container',
                        onSuccess: function (result) {
                        /* You may add your own implementation here */
                        alert("payment success!"); console.log(result);
                        },
                        onPending: function (result) {
                        /* You may add your own implementation here */
                        alert("wating your payment!"); console.log(result);
                        },
                        onError: function (result) {
                        /* You may add your own implementation here */
                        alert("payment failed!"); console.log(result);
                        },
                        onClose: function () {
                        /* You may add your own implementation here */
                        alert('you closed the popup without finishing the payment');
                        }
                    });
                    });
                </script>
                
        </div>
    </div>

</div>

@endsection



