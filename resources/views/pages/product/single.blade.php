@extends('layouts.mainlayout')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">{{$product->name}} в разделе {{$product->category->name}}</div>
                {{--{{$category->name}}--}}
            </div>
            @include('layouts.partials.search')
        </div>
        <div class="content-main__container">
            <div class="product-container">
                <div class="product-container__image-wrap"><img src="{{$product->photo}}" class="image-wrap__image-product"></div>
                <div class="product-container__content-text">
                    <div class="product-container__content-text__title">{{$product->name}}</div>
                    <div class="product-container__content-text__price">
                        <div class="product-container__content-text__price__value">
                            Цена: <b>{{$product->price}}</b>
                            руб
                        </div><a href="{{route('cart.add',$product->id)}}" class="btn btn-blue">Добавить в корзину</a>
                    </div>
                    <div class="product-container__content-text__description">
                        <p>
                            {{$product->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content_bottom')
    @include('layouts.partials.our_products')
@endsection