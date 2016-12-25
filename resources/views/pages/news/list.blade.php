@extends('layouts.mainlayout')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Новости</div>
            </div>
            @include('layouts.partials.search')
        </div>
        <div class="content-main__container">
            <div class="news-list__container">
                @foreach ($articles as $article)
                    <div class="news-list__item">
                        <div class="news-list__item__thumbnail"><img src={{$article->photo}}></div>
                        <div class="news-list__item__content">
                            <div class="news-list__item__content__news-title">{{$article->name}}</div>
                            <div class="news-list__item__content__news-date">{{$article->publishedon}}</div>
                            <div class="news-list__item__content__news-content">
                                {{$article->description}}
                            </div>
                        </div>
                        <div class="news-list__item__content__news-btn-wrap"><a href="{{route('article',$article->id)}}"
                                                                                class="btn btn-brown">Подробнее</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="content-footer__container">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
@section('content_bottom')

@endsection