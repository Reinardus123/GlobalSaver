@extends('layout.main')


@section('container')

<div class="success-card">
    <div class="icon-container">
        <div class="checkmark">&#10004;</div>
    </div>
    <h1 class="success">@lang('payment.pembayaran-berhasil')</h1>
    <p class="success1">@lang('payment.terima kasih')<br>
    {{-- <p class="success1">{{$book->first_name}}<br>
    <p class="success1">{{$book->last_name}}<br>
    <p class="success1">{{$book->email}}<br> --}}
        
    
    <a href="/" class="dashboard-button mt-4">@lang('payment.ke-home')</a>
</div>


@endsection