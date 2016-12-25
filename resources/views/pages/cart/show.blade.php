@extends('layouts.mainlayout')
@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Мои заказы</div>
            </div>
        </div>
        </div>
        <div class="content-main__container">
            @include('layouts.cart.list')
            <div class="content-footer__container">
                <div class="btn-buy-wrap"><a href="{{route('cart.order')}}" class="btn-buy-wrap__btn-link">Оформить заказ</a></div>
            </div>
        </div>
    </div>
@endsection
@section('content_bottom')

@endsection
