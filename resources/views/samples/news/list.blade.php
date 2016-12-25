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
                            <div class="sidebar-news__item__preview-news"><img src="/img/cover/game-2.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="/img/cover/game-1.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="/img/cover/game-4.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="content-top">
                <h3 class="title">Купить игры недорого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</h3>
                <div class="slider"><img src="/img/slider.png" alt="Image" class="image-main"></div>
            </div>
            <div class="content-middle">
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title">Новости</div>
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
                    <div class="news-list__container">
                        <div class="news-list__item">
                            <div class="news-list__item__thumbnail"><img src="/img/news/ps_vr.jpg"></div>
                            <div class="news-list__item__content">
                                <div class="news-list__item__content__news-title">О новых играх в режиме VR</div>
                                <div class="news-list__item__content__news-date">04.12.2016</div>
                                <div class="news-list__item__content__news-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                            <div class="news-list__item__content__news-btn-wrap"><a href="#" class="btn btn-brown">Подробнее</a></div>
                        </div>
                        <div class="news-list__item">
                            <div class="news-list__item__thumbnail"><img src="/img/news/ps4-pro_01.jpg"></div>
                            <div class="news-list__item__content">
                                <div class="news-list__item__content__news-title">О новой PS4 Pro</div>
                                <div class="news-list__item__content__news-date">04.12.2016</div>
                                <div class="news-list__item__content__news-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                            <div class="news-list__item__content__news-btn-wrap"><a href="#" class="btn btn-brown">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-bottom"></div>
        </div>
    </div>
@endsection