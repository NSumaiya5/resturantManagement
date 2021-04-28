@extends('frontend.main')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <form action="{{route('reservation',$tables->id)}}" method="post"  class="container mt-5 w-50 p-5 border shadow p-3 mb-5 bg-white">
                {{--  --}}
                 @csrf
                 {{-- @dd($tables); --}}
                <div class="mb-3 ">
                <input type="hidden" value="{{$tables->id}}" name="tables_id">
                <label for="">Table Capacity: {{$tables->capacity}}</label>

                <label  class="ms-5" for="">Reservation Price: {{$tables->price}} BDT</label>

                <div class="form-group">
                    <label for="">Date:</label>
                    <input required name="date" type="date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">From Time:</label>
                    <input required name="from_time" type="time" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">To Time:</label>
                    <input required name="to_time" type="time" class="form-control">
                </div>
                <div class="form-group mt-5">
                    <label for="">Details:</label>
                    <textarea  name="details" id="" class="form-control"></textarea>
                </div>

                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
            </form>
        </div>
    </div>
@endsection
