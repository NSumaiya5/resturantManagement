<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fresh Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>



<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <img style="height:30px;weight:33px;" class="ms-3" src="{{asset('/style/image/logo2.jpg')}}" alt="" class="img-fluid " alt=""/>
      <a class="navbar-brand fs-6" href="#"> FRESH<br/>FOOD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-dark ms-3" aria-current="page" href={{route('homepage')}}>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark ms-3" href="{{route('viewGallery')}}">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark ms-3" href="{{route('foodItemMenu')}}">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark ms-3" href="{{route('showTableReservation')}}">Reservation</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark ms-3" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">About Us</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('aboutUs')}}">History</a></li>
                    <li><a class="dropdown-item" href="#">Achivement</a></li>
                    {{-- <li><a class="dropdown-item" href="{{route('writeReview')}}">Review</a></li> --}}
                    <li><a class="dropdown-item" href={{route('viewStaff')}}>Our Community</a></li>
                  </ul>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-dark ms-3" href="#">Contact Us</a>
                </li>

                  @if (auth()->user())
                  <li class="nav-item">

                  <a   class="nav-link text-dark ms-3 mb-3" href="{{route('carts')}}">
                    <i class="mb-3 fas fa-cart-arrow-down "></i> </a>
                    <li class="nav-item">
                        <span class="badge bg-success rounded-pill mb-2">{{$foodItem_count}}</span>
                      </li>
                  @else
                  <a  class="nav-link text-dark ms-3" href="{{route('sorryMsg')}}"><i class="fas fa-cart-arrow-down"></i></a>
                  </li>
                  @endif
                @auth
                <li class="nav-item">
                    <div class="nav-link   text-dark">

                        <a class="btn btn-success"href="{{route('profile',auth()->user()->id)}}">{{auth()->user()->name}}</a>

                        <a class="btn btn-success"href="{{route('userLogout')}}">Logout</a>
                    </div>
                  @else
                  <a class="nav-link text-dark " href="{{route('login.registration.from')}}">Login</a>
                </li>
              @endauth

            </ul>
      </div>
    </div>
  </nav>


<body>

    <div class="row container">

            <div class="col mt-5 ">
                <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                    <img style="height:250px;width:269px;" src="{{ url('/files/photo/' . $viewFood->file) }}"
                        alt="foodItem image">
                    <div class="card-body">
                        <p class="card-text">{{ $viewFood->name }}</p>
                        <small class="text-muted">{{ $viewFood->price }}</small>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">

                                @if (auth()->user())
                                    <a class="btn btn-success"
                                        href="{{ route('addToCart', $viewFood->id) }}">Add To Cart</a>
                                @else
                                    <a class="btn btn-success"
                                        href="{{ route('login.registration.from') }}">Add To Cart</a>

                                @endif

                                {{-- <a href="{{route('addToCart',$data->id)}}"  type="button" class="btn btn-success">Add To Cart</a> --}}
                                {{-- <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</a> --}}
                            </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
