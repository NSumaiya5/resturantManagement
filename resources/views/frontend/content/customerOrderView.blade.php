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


        <div class="row container text-center ms-5 ">

            <div class="col-md-11 ms-5 ">

              {{-- @dd($showOrder); --}}
              <h1 class="text-center fs-1 mt-5">Order Details</h1>
              <div class="mt-4 mb-5">
                <p class="text-dark">Name:{{auth()->user()->name}} </p>
                <p class="text-dark">email:{{auth()->user()->email}} </p>
                <p class="text-dark">Phone:{{auth()->user()->phone}} </p>
                <p class="text-dark">address:{{auth()->user()->address}} </p>

        <table class="table table-bordered table-striped table-success">
            <thead>
              <tr>
                <th scope="col">Serial</th>
                <th scope="col">Image</th>
                <th scope="col">Food Item Name</th>
                <th scope="col">Qty</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Tax</th>
                <th scope="col">Grand Total</th>




              </tr>
            </thead>


            @foreach($orderList  as $key=> $order)
    <tbody>


      <tr>
        <th scope="row">{{$key+1}}</th>
        <td ><img src="{{url('/files/photo/'.$order->food->file)}}" style="width:80px; height:80px;" ></td>
        <td>{{ $order->food->name }}</td>
        <td>{{ $order->quantity }}</td>
        <td>{{ $order->food->price }}/=</td>
        <td>{{ $order->sub_total }}/=</td>
        <td>{{ $tax}}/=</td>
        <td>{{ $grand_total}}/=</td>




    {{-- <div class="mt-4 mb-5 container">
        <div class="row text-600 text-white bgc-default-tp1 py-25 bg-info">
            <div class="d-none d-sm-block col-1 text-dark">Serial</div>
            <div class="d-none d-sm-block col-1 text-dark">Image</div>
            <div class="col-9 col-sm-2 text-center text-dark">Food Item Name</div>
            <div class="d-none d-sm-block text-center col-4 col-sm-2 text-dark">Qty</div>
            <div class="d-none d-sm-block text-center col-sm-1 text-dark">Unit Price</div>
            <div class="col-1 text-dark text-center">Subtotal</div>
            <div class="col-1 text-dark text-center">Tax</div>
                <div class="col-1 text-dark text-center">Grand Total</div>

        </div> --}}

        {{-- <div class="text-95  mt-4"> --}}
            {{-- @dd($order); --}}
            {{-- @dd($order->food); --}}
                {{-- <div class="row">
                    <div class="d-none d-sm-block col-1 text-dark">{{ $key+1 }}</div>
                    <td ><img class="d-none d-sm-block col-1 text-dark"src="{{url('/files/photo/'.$order->food->file)}}" style="width:80px; height:80px;" ></td>
                    <div class="col-9 col-sm-2 text-center text-dark">{{ $order->food->name }}</div>
                    <div class="d-none d-sm-block col-4 col-sm-2 text-center text-dark">{{ $order->quantity }}</div>
                    <div class="d-none d-sm-block col-sm-1 text-center text-dark">{{ $order->food->price }}/=</div>
                    <div class="col-1 text-dark text-center">{{ $order->sub_total }}/=</div>
                    <div class="col-1 text-dark text-center">{{ $tax}}/=</div>

                    <div class="col-1 text-dark text-center">{{ $grand_total}}/=</div>


                </div> --}}


                @endforeach
                <hr />


        </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</body>
</html>
