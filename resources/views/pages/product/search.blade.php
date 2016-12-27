@extends('layouts.mainlayout')

@section('content')

    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Результаты поиска</div>
            </div>
            @include('layouts.partials.search')
        </div>
        <div class="content-main__container">
            <div class="products-category__list">
                @foreach ($products as $product)
                    <div class="products-category__list__item">
                        <div class="products-category__list__item__title-product">
                            <a href="{{route('products.show',$product->id)}}">{{$product->name}}</a>
                        </div>
                        <div class="products-category__list__item__thumbnail">
                            <a href="{{route('products.show',$product->id)}}"
                               class="products-category__list__item__thumbnail__link">
                                <img src="{{$product->photo}}" alt="Preview-image">
                            </a>
                        </div>
                        <div class="products-category__list__item__description">
                            <span class="products-price">{{$product->price}} руб.</span>
                            <a href="{{route('cart.add',$product->id)}}" class="btn btn-blue">Добавить в корзину</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="content-footer__container">
            {{ $products->links() }}
        </div>
    </div>
@endsection
@section('content_bottom')

@endsection