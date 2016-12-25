<!DOCTYPE html>
<html lang="ru">
@section('head')
    <head>
        <title>main - ГеймсМаркет</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="{{asset('/css/libs.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('/css/media.css')}}">

    </head>
@show
<body>
<div class="main-wrapper">
    @section('header')
        @include('layouts.partials.header')
    @show
    @section('maincontent')
        <div class="middle">
            @include('layouts.partials.sidebar')
            <div class="main-content">
                @include('layouts.partials.content_top')

                @yield('content')
                @yield('content_bottom')
            </div>
        </div>
    @show
    @section('footer')
        @include('layouts.partials.footer')
    @show
</div>
<script src="{{asset('/js/main.js')}}"></script>
</body>
</html>