<form id="order_form" action="{{action('OrderController@store')}}" method="POST"
      enctype="multipart/form-data">
    {{--{{csrf_field()}}--}}
    {{--{{method_field('PUT')}}--}}
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    {{--<input type="hidden" name="_method" value="PUT">--}}
    <div class="cart-product-list">
        <h3>
            <label class="products-columns__item__title-product" for="username">Укажите ваше имя:</label>
        </h3>
        <div class="cart-product-list__item">
            <div class="cart-product__item__product-name">
                <div class="cart-product__item__product-date__content">
                    @if (Auth::user())
                        <input type="text" required style="width: 100%" name="username"
                               value="{{ Auth::user()->name }}">
                    @else
                        <input type="text" required style="width: 100%" name="username">
                    @endif
                </div>
            </div>
        </div>
        <h3>
            <label class="products-columns__item__title-product" for="email">Укажите ваш e-mail:</label>
        </h3>
        <div class="cart-product-list__item">
            <div class="cart-product__item__product-name">
                <div class="cart-product__item__product-date__content">
                    @if (Auth::user())
                        <input type="text" required style="width: 100%" name="email" value="{{Auth::user()->email}}">
                    @else
                        <input type="text" required style="width: 100%" name="email">
                    @endif
                </div>
            </div>
        </div>

        <h3>
            <label class="products-columns__item__title-product">Информация о заказе:</label>
        </h3>
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
                        <div class="cart-product__item__cart-date__content">{{$item->qty}} шт.</div>
                    </div>
                    <div class="cart-product__item__product-price"><span
                                class="product-price__value">{{$item->subtotal}} рублей</span>
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
        <div class="content-footer__container">
            {{--<div class="btn-buy-wrap"><a href="<a href={{route('cart.order')}}" class="btn-buy-wrap__btn-link">Оформить заказ</a></div>--}}
            <div class="btn-buy-wrap"><a href="javascript:{}"
                                         onclick="document.getElementById('order_form').submit(); return false;"
                                         class="btn-buy-wrap__btn-link">Перейти к оплате</a></div>
        </div>
    </div>
</form>