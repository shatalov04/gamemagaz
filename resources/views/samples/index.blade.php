@extends('layouts.mainlayout')

@section('maincontent')
    <div class="middle">
        <div class="sidebar">
            <div class="sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <div class="sidebar-item__content">
                    <ul class="sidebar-category">
                        <li class="sidebar-category__item"><a href="#" class="sidebar-category__item__link">Action</a></li>
                        <li class="sidebar-category__item"><a href="#" class="sidebar-category__item__link">RPG</a></li>
                        <li class="sidebar-category__item"><a href="#" class="sidebar-category__item__link">Квесты</a></li>
                        <li class="sidebar-category__item"><a href="#" class="sidebar-category__item__link">Онлайн-игры</a></li>
                        <li class="sidebar-category__item"><a href="#" class="sidebar-category__item__link">Стратегии</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item__title">Последние новости</div>
                <div class="sidebar-item__content">
                    <div class="sidebar-news">
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="img/cover/game-2.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="img/cover/game-1.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="img/cover/game-4.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры недорого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
                <div class="slider"><img src="img/slider.png" alt="Image" class="image-main"></div>
            </div>
            <div class="content-middle">
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title">Последние товары</div>
                    </div>
                    <div class="content-head__search-block">
                        <div class="search-container">
                            <form class="search-container__form">
                                <input type="text" class="search-container__form__input">
                                <button class="search-container__form__btn">search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="content-main__container">
                    <div class="products-columns">
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">The Witcher 3: Wild Hunt</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-1.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Overwatch</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-2.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Deus Ex: Mankind Divided</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-3.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">World of WarCraft</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-4.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Call of Duty: Black ops II</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-5.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Batman</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-6.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                    </div>
                </div>
                <div class="content-footer__container">
                    <ul class="page-nav">
                        <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
                        <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
                        <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
                        <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
                        <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
                        <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="content-bottom"></div>
        </div>
    </div>
@endsection