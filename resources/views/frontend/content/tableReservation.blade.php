@extends('frontend.main')

@section('content')



    <div class="album py-5 bg-light mt-5">
        <div class="container">

            <div class="text-center">

                <h2 style="color: #3A4256;" >Reservation </h2>



            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">


@foreach($tables as $data)

                <div class="col">
                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                        <img style="height:250px;width:269px;"src="{{url('/files/photo/'.$data->file)}}"alt="gallery image">
                        <div class="card-body" >
                            <p class="card-text">{{$data->capacity}}</p>


                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">

                                    @if (auth()->user())
                                    <a class="btn btn-success" href="{{route('tableReservation',$data->id)}}">Reserve</a>
                                    @else
                                    <a class="btn btn-success" href="{{route('login.registration.from')}}">Reserve</a>

                                    @endif

                                    {{-- <button  type="button" class="btn btn-success">Reservation</button>
                                    <a class="btn btn-success" href="{{route('login.registration.from')}}">Reserve</a> --}}
                                  {{--
                                    {{-- < href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</> --}}
                                </div>
                                <small class="text-muted">{{$data->price}} BDT</small>
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
