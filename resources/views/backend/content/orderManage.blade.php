@extends('backend.main')

@section('content')

    {{-- @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif --}}


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">User Email</th>
            <th scope="col">User Contact No</th>
            <th scope="col">Delivary address</th>
            {{-- <th scope="col">Food Item</th>
            <th scope="col">Food Quantity</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Tax</th> --}}

            {{-- <th scope="col">Total</th> --}}
            {{-- <th scope="col">Paid Amount</th> --}}
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            <th scope="col">View</th>




        </thead>
        <tbody>
{{-- @dd($orders); --}}
@foreach( $orders as $key=>$request)

{{-- @dd($request); --}}
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$request->user->name}}</td>
              <td>{{$request->user->email}}</td>
              <td>{{$request->user->phone}}</td>
              <td>{{$request->delivery_address}}</td>
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



              <td>
                <div class="dropdown">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">


                        {{-- <li class="bg-info"><a class="btn" href="{{route('orderAccept',['id'=>$request->id,'status'=>'confirm'])}} ">Confirm</span></a></li>
                        <li class="bg-danger"><a class="btn btn-danger" href="{{route('orderAccept',['id'=>$request->id,'status'=>'decline'])}}
                            ">Cancel</a></li> --}}


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

                     <td>
                         <a href="{{route('adminOrderView',$request->id)}}"><i class="fas fa-eye"></i>
                         </a>

                     </td>

        </tr>




                {{-- <td>{{$request->total}}</td> --}}
                {{-- <td>fsadfasfsdf</td>
                <td><a href="">view</a></td> --}}
            </tr>

@endforeach

        </tbody>

    </table>

@endsection
