@extends('frontend.main')

@section('content')

<main style="height:600px;" class="row d-flex align-items-center w-100 ">
    <div class="col-md-5 offset-md-1 ">
        <h1 style="color: #3A4256;"><span style="color: #dd7140;" >Treat Your</span> <br/> Self</h1>
        <p class="text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore eveniet necessitatibus et iusto corrupti minima.</p>
        <button  type="button" class="btn btn-success ">ORDER FOOD</button>
    </div>
    <div class="col-md-6 ">
        <img  src="{{asset('/style/image/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg')}}" alt="" class="img-fluid "/>

    </div>
</main>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

@foreach($foodItems as $data)

                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img style="height:300px;"src="{{url('/files/photo/'.$data->file)}}"alt="foodItem image">
                        <div class="card-body" >
                            <p class="card-text">{{$data->name}}</p>
                            <p class="card-text">{{$data->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button  type="button" class="btn btn-success">Order</button>
                                    {{-- <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</a> --}}
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

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="text-center">

                <h2 style="color: #3A4256;" >Meet Our </h2>
                <h3 style="color: #dd7140;" class="mb-5">Community</h3>


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


@foreach($staffs as $data)

                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img style="height:300px;"src="{{url('/files/photo/'.$data->file)}}"alt="Staff image">
                        <div class="card-body" >
                            <p class="card-text">{{$data->name}}</p>
                            <p class="card-text">{{$data->description}}</p>
                            <p class="card-text">{{$data->email}}</p>
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

