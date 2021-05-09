<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="mt-4 mb-5 container">
        <div class="row text-600 text-white bgc-default-tp1 py-25 bg-info">
            <div class="d-none d-sm-block col-1 text-dark">Serial</div>
            <div class="col-9 col-sm-5 text-dark">Food Item Name</div>
            <div class="d-none d-sm-block col-4 col-sm-2 text-dark">Qty</div>
            <div class="d-none d-sm-block col-sm-2 text-dark">Unit Price</div>
            <div class="col-2 text-dark">Subtotal</div>
        </div>


        <div class="text-95 text-secondary-d3 mt-5">

            @foreach($orderList  as $key=> $order)

            {{-- @dd($order->food); --}}
                <div class="row mb-2 mb-sm-0 py-25">
                    <div class="d-none d-sm-block col-1">{{ $key+1 }}</div>
                    <div class="col-9 col-sm-5">{{ $order->food->name }}</div>
                    <div class="d-none d-sm-block col-2">{{ $order->quantity }}</div>
                    <div class="d-none d-sm-block col-2 text-95">{{ $order->food->price }}</div>
                    <div class="col-2 text-secondary-d2">{{ $order->sub_total }}</div>
                </div>
                <hr />

                @endforeach
        </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</body>
</html>
