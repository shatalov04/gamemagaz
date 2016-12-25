@extends('layouts.dashboard.dashboard_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{--<div class="col-md-10 col-md-offset-1">--}}
                <div class="panel panel-default">
                    <div class="panel-heading">Редактирование категории {{$category->name}}
                    </div>
                    <div class="panel-body">
                        <div>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                        <form action="{{action('CategoryController@update',['id'=>$category->id])}}" method="POST"
                              enctype="multipart/form-data">
                            {{--{{csrf_field()}}--}}
                            {{--{{method_field('PUT')}}--}}
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="col-md-8 col-md-offset-2">
                                <label for="name">Наименование:</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <input type="text" required style="width: 100%" name="name" value="{{$category->name}}">
                            </div>

                            <div class="col-md-8 col-md-offset-2">
                                <label for="description">Описание:</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <textarea style="width:100%;max-width: 100%; min-height: 200px"
                                          required name="description">{{$category->description}}</textarea>
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
