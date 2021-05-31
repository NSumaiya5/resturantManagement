@extends('frontend.main')

@section('content')
    <div class="container">

        <div class="text-center">
            <h2 style="color: #dd7140;">Reservation </h2>
        </div>

<div class="mt-5 mb-5">
        <form action={{route("searchTable")}} method="GET">

            {{-- @csrf --}}

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class=" row">
                        <div class="col-md-6">
                            <label for="from">Date:</label>
                            <input id="from" type="date" class="form-control" name="from_date">
                        </div>

                        <div class="col-md-5">
                            <label for="to">Time Slot:</label>

                            <select class="form-select form-select-mds " name="time_id" aria-label="form-select-sm example">
                               <option value="" >Select Time-Slot</option>
                                @foreach ($time_slot as $data)
                               <option value="{{$data->id}}" >{{$data->name}}({{$data->reservation_time_from}}-{{$data->reservation_time_to}})</option>
                               @endforeach
                           </select>
                        </div>
                        <div class="col-md-1 mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>

                </div>

            </div>
        </form>

    </div>
    {{-- @if (isset($searchDate))
        <input  type="hidden" value="{{$searchDate}}" name="searchDate">
        <input  type="hidden" value="{{$searchTime}}" name="time_slot_id">

        @endif --}}


        {{-- @dd($tables) --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5 mb-5">
            @foreach ($tables as $data)
                <div class="col-md-2s">
                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                        <img style="height:225px;width:269px;" src="{{ url('/files/photo/' . $data->file) }}"
                            alt="gallery image">
                        <div class="card-body">
                            <p class="card-text">Capacity : {{ $data->capacity }}</p>
                            <p class="card-text">Status:{{ $data->table_status }}</p>
                            <div class="btn-group d-flex justify-content-between align-items-center">
                                @if (auth()->user())
                                    <a class="btn btn-success"
                                        href="{{ route('tableReservation', $data->id) }}">Reserve</a>
                                @else
                                    <a class="btn btn-success" href="{{ route('login.registration.from') }}">Reserve</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

  @endforeach

</div>

</div>
@endsection
