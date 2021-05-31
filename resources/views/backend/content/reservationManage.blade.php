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
            <th scope="col">serial</th>
            <th scope="col">Table_number</th>
            <th scope="col">Capacity</th>
            <th scope="col">User_name</th>
            <th scope="col">User Email</th>
            <th scope="col">User Contact No</th>
            <th scope="col"> Date</th>
            <th scope="col">Time_Slot</th>

            <th scope="col"> message</th>
            {{-- <th scope="col">Total</th> --}}
            <th scope="col" class="text-center">Status</th>

            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

            {{-- @dd($reservations) --}}

@foreach( $reservations as $key=>$request)
{{-- @dd($request) --}}
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$request->table->id}}</td>
                <td>{{$request->table->capacity}}</td>
                {{-- <td>{{$request->table->price}}</td> --}}
               {{-- @dd($request); --}}
                <td>{{$request->user->name}}</td>
                <td>{{$request->user->email}}</td>
                <td>{{$request->user->phone}}</td>

                {{-- <td>{{$request->time_slot_name->name}}</td> </td> --}}
                {{-- {{-- <td>{{$request->reservation_time_from}} </td> --}}
                <td>{{$request->reservation_date}}</td>
                <td>{{$request->time_slot_name->name}}({{$request->time_slot_name->reservation_time_from}}-{{$request->time_slot_name->reservation_time_to}})</td>
                {{-- @dd($request->time_slot_name);
                {{-- <td>{{$request->created_at->format('Y-m-d H:i:s')}}</td> --}}

                <td>{{$request->message}}</td>

               <td  class="text-center">{{$request->status}}</td>

               <td>
                <div class="dropdown ">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                 <li>

                    @if ( $request->status == 'pending')

                    <a class="btn" href="{{route('reservationConfirm',['id'=>$request->id,'status'=>'cancel'])}}">cancel</a>
                    <a class="btn" href="{{route('reservationConfirm',['id'=>$request->id,'status'=>'confirm'])}}">confirm</a>
                    @else
                    <a class="btn" href="{{route('reservationConfirm',['id'=>$request->id,'status'=>'cancel'])}}">cancel</a>
                    <a class="btn" href="{{route('reservationConfirm',['id'=>$request->id,'status'=>'confirm'])}}">confirm</a>

          @endif

             </li>
                    </ul>
                </div>
        </td>


                {{-- <td>{{$request->total}}</td> --}}
                {{-- <td>fsadfasfsdf</td>
                <td><a href="">view</a></td> --}}

            </tr>
            @endforeach

        </tbody>

    </table>

@endsection
