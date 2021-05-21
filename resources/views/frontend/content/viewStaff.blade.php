@extends('frontend.main')

@section('content')



<div class="album py-5 bg-light">
        <div class="container">

            <div class="text-center">

                <h2 style="color: #3A4256;" >Meet Our </h2>
                <h3 style="color: #dd7140;" class="mb-5">Community</h3>


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


@foreach($staffs as $data)

                <div class="col">
                    <div class="card shadow-sm h-100"style="height:250px;width:270px;">
                        <img style="height:250px;width:269px;"src="{{url('/files/photo/'.$data->file)}}"alt="Staff image">
                        <div class="card-body" >
                            <p class="card-text">{{$data->name}}</p>
                            <p class="card-text">{{$data->address}}</p>
                            <p class="card-text">{{$data->email}}</p>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection








