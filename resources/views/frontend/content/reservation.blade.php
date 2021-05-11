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
                <div class="mb-3 ">
                <input type="hidden" value="{{$tables->id}}" name="tables_id">

                <label for="">User Name:{{auth()->user()->name}}</label>
                <label class="ms-5" for="">Table Number: {{$tables->id}}</label>



                {{-- <label class="ms-5 " for="">Table Capacity: {{$tables->capacity}}</label> --}}




                <div class="form-group">
                    <label for="">Date:</label>
                    <input required name="date" type="date" class="form-control">
                </div>

                <div >
                    {{-- @dd($tables); --}}

                  <span>Time Slot</span>
                   {{-- <input value="{{$tables->time_id}}" name="time_id"> --}}
              <select class="form-select form-select-mds " name="time_id" aria-label="form-select-sm example">

                   @foreach ($time_slot as $data)

                  <option value="{{$data->id}}" >{{$data->name}}({{$data->reservation_time_from}}-{{$data->reservation_time_to}})</option>

                  @endforeach

              </select>
              </div>


                {{-- <td>{{ $tables->timeSlot->name}}({{ $request->timeSlot->reservation_time_from}}-{{ $request->timeSlot->reservation_time_to }})</td> --}}

{{--
                <div class="form-group">
                    <label for="">From Time:</label>
                    <input required name="from_time" type="time" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">To Time:</label>
                    <input required name="to_time" type="time" class="form-control">
                </div> --}}
                <div class="form-group mt-5">
                    <label for="">message:</label>
                    <textarea  name="message" id="" class="form-control"></textarea>
                </div>

                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                {{-- @dd($tables); --}}

            </div>
            </form>
        </div>
    </div>
@endsection
