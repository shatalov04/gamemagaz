@extends('layouts.dashboard.dashboard_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" style="min-height: 50px">
                        <a class="col-md-2 btn" style="min-width: 100%" href="{{route('categories.create')}}">
                            Добавить новую категорию
                        </a>
                    </div>
                </div>
            </div>
            <h3 class="row">
            </h3>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{--<div class="col-md-10 col-md-offset-1">--}}

                @foreach($categories as $category)
                    <div class="panel panel-default">
                        <div class="panel-heading"> Категория {{$category->name}}
                            <div>
                                <a href="{{route('categories.edit',$category->id)}}">
                                    Редактировать
                                </a>
                                <a href="{{route('categories.destroy',$category->id)}}">
                                    Удалить категорию и все игры в ней
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @foreach($category->products as $product)
                                <div class="col-md-2">
                                    <img class="item-product__thumbnail__link__img" src="{{$product->photo}}"
                                         alt="">
                                </div>
                                <div class="col-md-2">{{$product->name}}</div>
                                <div class="col-md-2">{{$product->price}}</div>
                                <div class="col-md-3">
                                    <a class="col-md-3" href="{{route('products.edit',$product->id)}}">
                                        Редактировать
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a class="col-md-3" href="{{route('products.destroy',$product->id)}}">
                                        Удалить
                                    </a>
                                </div>
                                <div class="col-md-12"></div>
                            @endforeach
                            <h4 class="col-md-12"></h4>
                            <a class="col-md-2 btn" href="{{route('products.create',$category->id)}}">
                                Добавить игру
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
