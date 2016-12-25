<!DOCTYPE html>
<html>
<head>
    <title>Новый заказ</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .txt {
            text-align: left;
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h2 class="title">Заказ №{{$order->id}}</h2>
        <div class="txt">Контактное лицо: {{$order->username}}</div>
        <div class="txt">E-mail: {{$order->email}}</div>
        @foreach($orders as $item)
            {{--{{dd($item)}}--}}
            <div class="txt">Id продукта: {{$item->id}}</div>
            <div class="txt">Количество: {{$item->quantity}}</div>
            <h3></h3>
        @endforeach
    </div>
</div>
</body>
</html>