@extends('layouts.dashboard.dashboard_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{--<div class="col-md-10 col-md-offset-1">--}}
                <div class="panel panel-default">
                    <div class="panel-heading">Добавление новой игры в категорию {{$category->name}}
                    </div>
                    <div class="panel-body">
                        <div>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                        <form action="{{route('products.store',$category->id)}}" method="POST"
                              enctype="multipart/form-data">
                            {{--{{csrf_field()}}--}}
                            {{--{{method_field('PUT')}}--}}
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input type="hidden" name="_method" value="POST">
                            <div class="col-md-8 col-md-offset-2">
                                <label for="name">Наименование:</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <input type="text" required style="width: 100%"
                                       name="name"> {{--value="{{$product->name}}">--}}
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <label for="price">Цена:</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <input type="text" required style="width: 100%"
                                       name="price"> {{--value="{{$product->price}}">--}}
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <label for="photo">Изображение:
                                    {{--<img src="{{$product->photo}}" alt="">--}}
                                </label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <input required type="file" accept="image/*" style="width: 100%" name="photo">
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <label for="description">Описание:</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <textarea style="width:100%;max-width: 100%; min-height: 200px"
                                          required name="description"></textarea>
                                {{--required name="description">{{$product->description}}</textarea>--}}
                            </div>
                            <div class="col-md-6 col-md-offset-2">
                                <input type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
