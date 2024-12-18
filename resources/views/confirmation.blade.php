@extends('layout.main')


@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="payment-popup mt-5">
            
            <h2>Confirm your payment</h2>
            <p class="subtext">Quickly and secure, free transactions.</p>
                    <div class="details">
                        <p><strong>@lang('events.nama_depan') </strong> <span>{{$book->first_name}}</span></p>
                        <p><strong>@lang('events.nama_belakang')</strong> <span>{{$book->last_name}}</span></p>
                        <p><strong>@lang('events.nomor_handphone')</strong> <span>{{$book->phone}}</span></p>
                        <p><strong>@lang('events.Email')</strong> <span>{{$book->email}}</span></p>
                    </div>
                        <div class=" d-flex justify-content-center my-3">
                            <button id="pay-button" class="mt-3 btn btn-secondary" >@lang('events.pay')</button>
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
                    window.snap.pay('{{$snapToken}}', {
                        onSuccess: function (result) {
                        /* You may add your own implementation here */
                        alert("payment success!"); console.log(result);
                        window.location.href = '/invoice'
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



