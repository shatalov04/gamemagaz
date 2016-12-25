@extends('layouts.dashboard.dashboard_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($orders as $order)
                    <div class="panel panel-default">
                        <div class="panel-heading">Заказ № {{$order->id}}
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">Клиент: {{$order->username}}</div>
                            <div class="col-md-12">E-mail: {{$order->email}}</div>

                            @foreach($order->items as $item)
                                <div class="col-md-4">{{$item->name}}</div>
                                <div class="col-md-2">{{$item->price}} рублей</div>
                                <div class="col-md-2">{{$item->quantity}} шт.</div>
                                <div class="col-md-4">{{$item->price*$item->quantity}} рублей</div>
                            @endforeach
                            <h4 class="col-md-12"></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
