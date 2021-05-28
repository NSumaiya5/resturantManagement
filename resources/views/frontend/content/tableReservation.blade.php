@extends('frontend.main')

@section('content')



    <div class="album py-5  mt-3">
        <div class="container">


            <div class="text-center">

                <h2 style="color: #dd7140;" >Reservation </h2>
                <div>


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
{{-- @dd($tables) --}}

@foreach($tables as $data)

                <div class="col">
                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                        <img style="height:225px;width:269px;"src="{{url('/files/photo/'.$data->file)}}"alt="gallery image">
                        <div class="card-body" >
                            <p class="card-text">Capacity : {{$data->capacity}}</p>
                            <p class="card-text">Status:{{$data->table_status}}</p>


                                <div class="btn-group d-flex justify-content-between align-items-center">

                                    @if (auth()->user())
                                    <a class="btn btn-success" href="{{route('tableReservation',$data->id)}}">Reserve</a>
                                    @else
                                    <a class="btn btn-success" href="{{route('login.registration.from')}}">Reserve</a>

                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>

{{--
    <script type="text/javascript">
        // js
        function cart(){
            alert("Are you sure?");
        }
    </script> --}}
@endsection
