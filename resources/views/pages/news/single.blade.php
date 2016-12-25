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
            <div class="news-block content-text">
                <h3 class="content-text__title">
                    {{$article->name}}
                </h3><img src="{{$article->photo}}" alt="Image" class="alignleft img-news">
                <p>
                {{$article->content}}
                </p>
            </div>
        </div>
    </div>
@endsection
@section('content_bottom')
    @include('layouts.partials.our_products')
@endsection