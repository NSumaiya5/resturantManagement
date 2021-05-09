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

     <div class="row">
                        <div class="col-sm-6 mb-5">
                            <div>
                  <div class="row row-cols-1 row-cols-sm-2 g-3 ">
                    <div class="col ">
                            {{-- <h4 class="text-dark">Name:{{auth()->user()->name}} </h4>
                            <p class="text-dark">email:{{auth()->user()->email}} </p>
                            <p class="text-dark">Phone:{{auth()->user()->phone}} </p>
                            <p class="text-dark">address:{{auth()->user()->address}} </p>
                            <div class="my-2"> Status:<span class="text-600 text-90 ms-1">{{$orderViews->status}}</span></div> --}}



                      </div>
                      <div class="row">
                        <div class="col-md-12">

                          {{-- @dd($showOrder); --}}
                          <h1 class="text-center mt-5">order info</h1>
                          <div class="mt-4 mb-5">
                            {{-- <div class="row text-600 text-white bgc-default-tp1 py-25 bg-info">
                                <div class="d-none d-sm-block col-1 text-dark">Serial</div>
                                <div class="col-9 col-sm-5 text-dark">Food Item Name</div>
                                <div class="d-none d-sm-block col-4 col-sm-2 text-dark">Qty</div>
                                <div class="d-none d-sm-block col-sm-2 text-dark">Unit Price</div>
                                <div class="col-2 text-dark">Subtotal</div>
                            </div> --}}
                            <table class="table fs-6">
                                <thead >
                                {{-- <tr >

                                    <th scope="col">Serial</th>
                                    <th scope="col">Date</th>


                                    <th scope="col">Food Item Name</th>
                                    <th scope="col">Qty</th>

                                    <th scope="col">Unit Price</th>

                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Total</th>

                                    <th scope="col">Tax</th>

                                    <th scope="col">Grand Total</th>
 --}}
 <tr >
    <th scope="col">#</th>
    <th scope="col">User</th>
    <th scope="col">User Email</th>
    <th scope="col">User Contact No</th>
    <th scope="col">Address</th>
    <th scope="col" >PaymentStatus</th>
    <th scope="col" >Status</th>



                                <tbody>
                                    {{-- @dd($orderViews); --}}

                                @foreach ($orderViews as $key => $order)
                                <td>{{$key+1}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->email}}</td>
                                <td>{{$order->user->phone}}</td>
                                <td>{{$order->address}}</td>

                                <td class="text-center">{{$order->paid_amount}}</td>
                                <td>{{$order->status}}</td>



                              <td>
                                <a href="{{route('customerOrderView',$order->id)}}"><i class="fas fa-eye">view</i>

                                </td>

{{--
                                <tr>
                                    <div class="row mb-2 mb-sm-0 py-25">

                                    <td >{{ $key+1 }}</td>
                                    <td>{{$orderViews->created_at->format('Y-m-d ')}}</td>
                                    <td>{{ $order->food->name }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->food->price }}</td>
                                    <td>{{ $order->sub_total }}</td>
                                    <td>{{$total}} </td>
                                    <td>{{$tax}}</td>
                                    <td>{{$grand_total}}</td>




                                  </tr> --}}
                                </tr>
                                  @endforeach
                                  </tbody>
                                  </table>








    </div>
    {{-- <div style="margin: 0 auto; width: 600px">
        <script type="text/javascript" src="http://www.gzscripts.com/TimeSlotBookingCalendarPHP/index.php?controller=GzFront&action=load&cid[]=1&view_month=1"></script>
    </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</body>
</html>
