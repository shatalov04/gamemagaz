@extends('layouts.mainlayout')
@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Оформление заказа</div>
            </div>
        </div>
        <div class="content-main__container">
            @include('layouts.cart.order_form')
        </div>
    </div>
@endsection
@section('content_bottom')

@endsection
