<header class="main-header">
    <div class="logotype-container"><a href="{{route('home')}}" class="logotype-link"><img src="{{asset('/img/logo.png')}}"
                                                                           alt="Логотип"></a></div>
    <div class="header-container">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <div class="authorization-block"><a href="{{ url('/register') }}" class="authorization-block__link">Регистрация</a><a
                        href="{{ url('/login') }}" class="authorization-block__link">Войти</a></div>
        @else
            <div class="authorization-block"><a href="#" class="authorization-block__link">{{ Auth::user()->name }}</a><a
                        href="{{ url('/logout') }}" class="authorization-block__link">Выйти</a></div>
        @endif
    </div>
</header>