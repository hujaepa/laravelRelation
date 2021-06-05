<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($customers as $cust)
            <li>{{$cust->name}}</li>
            @if (count($cust->orders) > 0)
                <ol>
                    @foreach ($cust->orders as $order)
                        <li>{{$order->name}}</li>
                    @endforeach
                </ol>
            @endif
        @endforeach
    </ul>
</body>
</html>