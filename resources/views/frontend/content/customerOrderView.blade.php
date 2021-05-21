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
                <div id="printArea">
              {{-- @dd($showOrder); --}}
              <h1 class="text-center fs-1 mt-5">Order Details</h1>
              <div class="mt-4 mb-5">
                <p class="text-dark">Name:{{auth()->user()->name}} </p>
                <p class="text-dark">email:{{auth()->user()->email}} </p>
                <p class="text-dark">Phone:{{auth()->user()->phone}} </p>
                <p class="text-dark">address:{{auth()->user()->address}} </p>
                <p class="text-dark">Status :{{ $orderViews->status}}</p>
                <p class="text-dark">Payment :{{ $orderViews->paid_status}}</p>


                <td></td>




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
       @endforeach
     <hr/>
    </tr>
    </tbody>
</table>
</div>

 </div>
 <div class="">
    <button type="button" onclick="printDiv()" class="btn btn-success mx-3">Print</button>
    <a href="{{route('userProfile',auth()->user()->id)}}"type="button"  class="btn btn-success mx-3">Back</a>

</div>

            </div>

            <script type="text/javascript">
                function printDiv() {
                    var printContents = document.getElementById("printArea").innerHTML;
                    var originalContents = document.body.innerHTML;

                    document.body.innerHTML = printContents;

                    window.print();

                    document.body.innerHTML = originalContents;
                }

            </script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</body>



</html>
