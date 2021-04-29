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
            <th scope="col">Table_Id</th>
            <th scope="col">Capacity</th>
            <th scope="col">amount</th>
            <th scope="col">User</th>
            <th scope="col">User Email</th>
            <th scope="col">User Contact No</th>
            <th scope="col"> Date</th>
            <th scope="col">From time</th>
            <th scope="col">To time</th>
            <th scope="col"> message</th>
            {{-- <th scope="col">Total</th> --}}
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

@foreach( $reservations as $key=>$request)
{{-- @dd($request->reservation_date) --}}
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$request->table->id}}</td>
                <td>{{$request->table->capacity}}</td>
                <td>{{$request->table->price}}</td>
               {{-- @dd($request); --}}
                <td>{{$request->user->name}}</td>
                <td>{{$request->user->email}}</td>
                <td>{{$request->user->phone}}</td>

                <td>{{$request->reservation_date}} </td>
                <td>{{$request->reservation_time_from}} </td>
                <td>{{$request->reservation_time_to}}</td>
                <td>{{$request->message}}</td>


                {{-- <td>{{$request->total}}</td> --}}
                {{-- <td>fsadfasfsdf</td>
                <td><a href="">view</a></td> --}}
            </tr>

@endforeach

        </tbody>

    </table>

@endsection
