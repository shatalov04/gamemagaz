<div class="cart-product-list">
    {{Debugbar::info($cart)}}
    @if(count($cart))
        @foreach ($cart as $item)
            <div class="cart-product-list__item">
                <div class="cart-product__item__product-photo"><img src="{{$item->model->photo}}"
                                                                    class="cart-product__item__product-photo__image">
                </div>
                <div class="cart-product__item__product-name">
                    <div class="cart-product__item__product-name__content"><a
                                href="{{route('products.show',$item->model->id)}}">{{$item->model->name}}</a>
                    </div>
                </div>

                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content">{{$item->price}} рублей</div>
                </div>
                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content">{{$item->qty}} шт.</div>
                </div>
                <div class="cart-product__item__product-price"><span
                            class="product-price__value">{{$item->subtotal}} рублей</span>
                </div>
                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content"><a class="btn btn-blue" style="min-width: 70px"
                                                                           href="{{route('cart.delete',$item->model->id)}}">удалить</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="cart-product-list__result-item">
            <div class="cart-product-list__result-item__text">Итого</div>
            <div class="cart-product-list__result-item__value">{{Cart::subtotal(0,null,'')}} рублей</div>
        </div>
    @else
        <div class="cart-product-list__item">
            <div class="cart-product__item__product-name">
                <div class="cart-product__item__product-name__content">В корзине отсутствуют товары
                </div>
            </div>
        </div>
    @endif
</div>
