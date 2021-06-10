@extends('backend.main')

@section('content')

    {{-- @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif --}}


    <table class="table fs-6">
        <thead >
        <tr >
            <th scope="col">#</th>
            <th scope="col">User Email</th>
            {{-- <th scope="col">Address</th> --}}
            <th scope="col">Paid Amount</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Transaction Id</th>
            <th scope="col">Payment Contact No</th>
            <th scope="col" >PaymentStatus</th>
            <th scope="col">Payment</b>Action</th>
            <th scope="col">Status</th>
            <th scope="col">View</th>




        </thead>
        <tbody>
{{-- @dd($orders); --}}
@foreach( $orders as $key=>$request)

{{-- @dd($request); --}}
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$request->user->email}}</td>
              <td>{{$request->payment_amount}}</td>
              <td>{{$request->payment_method}}</td>
              <td>{{$request->t_id}}</td>
              <td>{{$request->t_phone}}</td>
              {{-- <td>{{$request->address}}</td> --}}

              <td class="text-center">{{$request->paid_status}}</td>

              <td>
                    <div class="dropdown ">
                        <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                     <li>
                        {{-- @if ($request->status == 'unpaid') --}}
                        {{-- <a  class="btn btn-success m-2"href="">Unpaid</a> --}}
                        @if ( $request->status == 'paid')
                        <a class="btn btn-warning" href="{{route('orderPaid',['id'=>$request->id,'status'=>'paid'])}}">paid</a>

                        @elseif ( $request->status == 'pending')
                        <a class="btn" href="{{route('orderPaid',['id'=>$request->id,'status'=>'paid'])}}">paid</a>

                        <a class="btn" href="{{route('orderPaid',['id'=>$request->id,'status'=>'unpaid'])}}">cancle</a>
                        @endif
                 </li>
                        </ul>
                    </div>
            </td>

{{--
              <td>
                <div class="dropdown">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                         <li class="bg-info"><a class="btn" href="{{route('orderAccept',['id'=>$request->id,'status'=>'confirm'])}} ">Confirm</span></a></li>
                        <li class="bg-danger"><a class="btn btn-danger" href="{{route('orderAccept',['id'=>$request->id,'status'=>'decline'])}} ">Cancel</a></li>
                        </td> --}}

              <td>{{$request->status}}</td>

              {{-- <td>{{$request->orderTODetails->food->name}}</td>
              <td>{{$request->orderTODetails->quantity}}</td>
              <td>{{$request->orderTODetails->sub_total}}</td>
              <td>{{$request->orderTODetails->tax}}</td> --}}



              {{-- <td>
                <div class="dropdown">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">





                     <li>
                            @if ($request->status == 'confirm')
                            <a  class="btn btn-success m-2"href="">Order Confirmed</a>
                            @elseif ( $request->status == 'decline')
                            <a  class="btn btn-warning m-2"href="">Order Declined</a>

                            @else
                            <a class="btn" href="{{route('orderAccept',['id'=>$request->id,'status'=>'confirm'])}}">Confirm</a>
                            <a class="btn" href="{{route('orderAccept',['id'=>$request->id,'status'=>'decline'])}}">Cancel</a>

                            @endif
                     </li>
                    </ul>
                </div>
                    </td> --}}

                     <td>
                         <a href="{{route('adminOrderView',$request->id)}}"><i class="fas fa-eye"></i>
                            {{-- < href=""><i class="far fa-edit"></i> --}}


                         </a>

                     </td>

        </tr>




                {{-- <td>{{$request->total}}</td> --}}
                {{-- <td>fsadfasfsdf</td>
                <td><a href="">view</a></td> --}}


@endforeach

        </tbody>

    </table>

@endsection
