@extends('frontend.main')

@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">


                    <div class="col mt-5">
                        <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                            <img style="height:250px;width:269px;"src="{{url('/files/photo/'.$viewFood->file)}}"alt="foodItem image">
                            <div class="card-body" >
                                <p class="card-text">{{$viewFood->name}}</p>
                                <small class="text-muted">{{$viewFood->price}}</small>
                                <p class="text-muted">{{ $foodItems->description}}</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
