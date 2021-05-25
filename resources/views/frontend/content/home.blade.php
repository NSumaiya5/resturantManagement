@extends('frontend.main')

@section('content')

    {{-- main --}}
    @if (session()->has('success'))

        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <main style="height:480px;" class="row d-flex align-items-center w-100 mb-3 ">
        <div class="col-md-5 offset-md-1 ">
            <h1 style="color: #3A4256;"><span style="color: #dd7140;">Treat Your</span> <br /> Self</h1>
            <p class="text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore eveniet
                necessitatibus et iusto corrupti minima.</p>
            {{-- <button  type="button" class="btn btn-success ">ORDER FOOD</button> --}}
            <a type="button" class="btn btn-success " href="{{ route('foodItemMenu') }}">ORDER FOOD</a>

        </div>
        <div class="col-md-6 ">
            <img src="{{ asset('/style/image/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg') }}" alt=""
                class="img-fluid " />

        </div>
    </main>


    {{-- gallery view --}}

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="text-center">

                <h2 style="color: #3A4256;">Visit Food Our Gallery</h2>
                <h5 style="color: #dd7140;" class="mb-5">Nothing brings people together like good food</h5>

                <div>
                    <a href="{{ route('viewMoreGallery') }}">see more</a>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">


                    @foreach ($gallerys as $data)



                        <div class="col mt-5">
                            <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                                <img style="height:250px;width:269px;" src="{{ url('/files/photo/' . $data->file) }}"
                                    alt="gallery image">
                                <div class="card-body">
                                    <p class="card-text">{{ $data->name }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>


        {{-- Order section --}}

        <div class="album py-5 bg-light mt-5">
            <div class="container">

                <div class="text-center">

                    <h2 style="color: #dd7140;">Order Now </h2>
                    <h5 style="color: #3A4256;" class="mb-5">Fell the test</h5>

                    <div>
                        <a href="{{ route('allFoodItemMenu') }}">see more</a>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">

                        @foreach ($foodItems as $data)

                            <div class="col mt-5">
                                <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                                    <img style="height:250px;width:269px;" src="{{ url('/files/photo/' . $data->file) }}"
                                        alt="foodItem image">
                                    <div class="card-body">
                                        <p class="card-text">{{ $data->name }}</p>
                                        <small class="text-muted">{{ $data->price }}</small>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                                @if (auth()->user())
                                                    <a class="btn btn-success"
                                                        href="{{ route('addToCart', $data->id) }}">Add To Cart</a>
                                                @else
                                                    <a class="btn btn-success"
                                                        href="{{ route('login.registration.from') }}">Add To Cart</a>

                                                @endif

                                                {{-- <a href="{{route('addToCart',$data->id)}}"  type="button" class="btn btn-success">Add To Cart</a> --}}
                                                {{-- <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</a> --}}
                                            </div>
                                            <div>
                                                <a class="btn btn-success"
                                                    href="{{ route('viewFood', $data->id) }}">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- staff section --}}


            <div class="album py-5 bg-light mt-5">
                <div class="container">

                    <div class="text-center">

                        <h2 style="color: #3A4256;">Meet Our </h2>
                        <h3 style="color: #dd7140;" class="mb-5">Community</h3>
                        <div>
                            <a href="{{ route('allStaffView') }}"> <i class="fas fa-arrow-right"></i> see more</a>
                        </div>


                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



                            @foreach ($staffs as $data)

                                <div class="col mt-5">
                                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                                        <img style="height:250px;width:269px;" src="{{ url('/files/photo/' . $data->file) }}"
                                            alt="Staff image">
                                        <div class="card-body">
                                            <p class="card-text">{{ $data->name }}</p>
                                            <p class="card-text">{{ $data->description }}</p>
                                            <p class="card-text">{{ $data->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>



                {{-- <script type="text/javascript">
        // js
        function cart(){
            alert("Are you sure?");
        }
    </script> --}}
                {{-- review section --}}
                <div class="album py-5 bg-light mt-5">
                    <div class="container">

                        <div class="text-center">

                            {{-- <h2 style="color: #3A4256;" >Meet Our </h2> --}}
                            <h3 style="color: #dd7140;" class="mb-5">Review</h3>
                            <div>
                                {{-- <a href="{{route('allStaffView')}}"> <i class="fas fa-arrow-right"></i> see more</a>
                </div> --}}
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">





                                    <marquee class=" mt-1 fs-4"  direction="left" height="500px" width="1245px" style="background-color:rgb(241, 233, 233); color:red;">
                                         @foreach ($review as $data)

                                                    <p class="card-text">Name:{{ $data->reviewUser->name }}</p>
                                                    <p class="card-text">Email:{{ $data->reviewUser->email }}</p>


                                        @endforeach
                                        </marquee>


                                    {{-- @foreach ($review as $data)

                                        <div class="col mt-5">
                                            <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                                                <div class="card-body">
                                                    <p class="card-text">Name:{{ $data->reviewUser->name }}</p>
                                                    <p class="card-text">Email:{{ $data->reviewUser->email }}</p> --}}

                                                    {{-- <p class="card-text"> --}}
                                {{-- <span class="review-stars" style="color: #dd7140;;">
                                    <!-- ////////////// STAR RATE CHECKER ////////////// -->

                                        @if ($data->rate === 1)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($data->rate === 2)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($data->rate === 3)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($data->rate=== 4)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($data->rate >= 5)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endif
                                    </span></p>
                                                <p class="card-text">Opinion:{{ $data->message }}</p>

--}}
                                                </div>
                                            </div>
                                        </div>
                                    {{-- @endforeach --}}
                                </div>



                                {{-- @dd($review) --}}



{{--


                                <div>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            @foreach ($review as $data)
                                                <div class="carousel-item active">
                                                    {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png" alt="..."> --}}
                                                    {{-- <div class="carousel-caption d-none d-md-block">
                                                        <p class="card-text">Name:{{ $data->reviewUser->name }}</p>
                                                        <p class="card-text">Email:{{ $data->reviewUser->email }}</p>
                                                        <p class="card-text">Opinion:{{ $data->message }}</p>
                                                    </div>
                                                  </div>
                                            @endforeach


                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div> --}}



                            </div>
                        </div>

                        </div>





                    @endsection
