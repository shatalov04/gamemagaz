@extends('layouts.mainlayout')

{{--@section('maincontent')--}}
    {{--<div class="middle">--}}
        {{--@include('layouts.partials.sidebar')--}}
        {{--<div class="main-content">--}}

            {{--@include('layouts.partials.last_products')--}}
            {{--<div class="content-bottom"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

@section('content')
    @include('layouts.partials.last_products')
@endsection
@section('content_bottom')

@endsection
