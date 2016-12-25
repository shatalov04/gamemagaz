<header class="main-header">
    <div class="logotype-container"><a href="{{route('home')}}" class="logotype-link"><img
                    src="{{asset('/img/logo.png')}}"
                    alt="Логотип"></a></div>
    <nav class="main-navigation">
        <ul class="nav-list">
            <li class="nav-list__item"><a href="{{route('home')}}" class="nav-list__item__link">Главная</a></li>
            <li class="nav-list__item"><a href="{{route('cart.show')}}" class="nav-list__item__link">Мои заказы</a></li>
            <li class="nav-list__item"><a href="{{route('articles')}}" class="nav-list__item__link">Новости</a></li>
            <li class="nav-list__item"><a href="{{route('about')}}" class="nav-list__item__link">О компании</a></li>
        </ul>
    </nav>
    <div class="header-contact">
        <div class="header-contact__phone"><a href="tel:+33333333" class="header-contact__phone-link">Телефон:
                33-333-33</a>
        </div>
    </div>
    <div class="header-container">
        <div class="payment-container">
            <div class="payment-basket__status">
                <div class="payment-basket__status__icon-block"><a href="{{route('cart.show')}}"
                            class="payment-basket__status__icon-block__link"><i
                                class="fa fa-shopping-basket"></i></a></div>

                <div class="payment-basket__status__basket"><span class="payment-basket__status__basket-value">
                        @if (!count($cart))
                            0
                        @else
                            {{count($cart)}}
                        @endif </span>
                    {{--<span class="payment-basket__status__basket-value-descr">товаров</span>--}}
                </div>
            </div>
        </div>
        <!-- Authentication Links -->
        @if (Auth::guest())
            <div class="authorization-block"><a href="{{ url('/register') }}" class="authorization-block__link">Регистрация</a><a
                        href="{{ url('/login') }}" class="authorization-block__link">Войти</a></div>
        @else
            <div class="authorization-block"><a href="#"
                                                class="authorization-block__link">{{ Auth::user()->name }}</a><a
                        href="{{ url('/logout') }}" class="authorization-block__link">Выйти</a></div>
        @endif
    </div>
</header>