@extends('frontend.main')

@section('content')



    <div class="album py-5 bg-light mt-5">
        <div class="container">
            <form >
                {{--  --}}
                 @csrf
                <div class="mb-3 ">
                {{-- <input type="hidden" value="{{$tables->id}}" name="tables_id">
                <label for="">Table id: {{$tables->id}}</label>


                <label class="ms-5 " for="">Table Capacity: {{$tables->capacity}}</label> --}}



{{--
                <div class="form-group">
                    <label for="">Date:</label>
                    <input required name="date" type="date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Shift :</label>
                    <input required name="from_time" type="time" class="form-control">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown link
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Morning(9.00am-12.pm)</a></li>
                          <li><a class="dropdown-item" href="#">Lunch(1.00pm-4.00pm)</a></li>
                          <li><a class="dropdown-item" href="#">Evening(5.00pm-10.00pm)</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                </div>


                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> --}}
                {{-- @dd($tables); --}}

            </div>
            </form>
        </div>
    </div>

            <div class="text-center">

                <h2 style="color: #3A4256;" >Reservation </h2>
                <div>


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
