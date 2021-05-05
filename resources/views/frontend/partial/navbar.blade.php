   <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <img style="height:30px;weight:33px;" class="ms-3" src="{{asset('/style/image/logo2.jpg')}}" alt="" class="img-fluid " alt=""/>
          <a class="navbar-brand fs-6" href="#">BE FRESH<br/>FOOD</a>
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
                        <li><a class="dropdown-item" href="#">Organization History</a></li>
                        <li><a class="dropdown-item" href="#">Achivement</a></li>
                        <li><a class="dropdown-item" href="#">Review</a></li>
                        <li><a class="dropdown-item" href={{route('viewStaff')}}>Our Community</a></li>
                      </ul>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link text-dark ms-3" href="#">Contact Us</a>
                    </li>
                    {{-- <li class="nav-item ">
                        <a class="nav-link text-dark ms-3" href="{{route('carts')}}">My Cart</a>
                      </li> --}}


                      @if (auth()->user())
                      <li class="nav-item">
                      <a   class="nav-link text-dark ms-3" href="{{route('carts')}}">My-Cart</a>
                      @else
                      <a  class="nav-link text-dark ms-3" href="{{route('sorryMsg')}}">My-Cart</a>

                      @endif

                    @auth
                    <li class="nav-item">
                        <div class="nav-link   text-dark   ">

                            <a class="btn btn-success"href="{{route('userProfile')}}">Profile</a>

                        <span style="color:black;" >{{auth()->user()->name}}</span> <a  class="text-decoration-none text-dark" href="{{route('userLogout')}}">Logout</a>
                        </div>
                      @else
                      <a class="nav-link text-dark " href="{{route('login.registration.from')}}">Login</a>
                    </li>
                  @endauth




                </ul>
          </div>
        </div>
      </nav>
