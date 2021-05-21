<nav class="navbar navbar-light bg-dark d-flex flex-row-reverse me-3">
    {{-- <form class="form-inline"> --}}
        <ul class="navbar-nav px-3">
     {{-- <a href={{route('signIn')}} class="btn btn-primary">Sign In</a> --}}
     <li class="nav-item text-nowrap">
        @auth()
            <span style="color:white;" data-feather="user"></span>
            <span style="color:white; margin-right: 30px;">  {{ auth()->user()->name }}</span>

            <a class="btn btn-primary" href="{{ route('admin.logout') }}"> Logout</a>

        @else
            <a class="btn btn-success"  href="{{ route('admin.login') }}">Login</a>

        @endauth

</li>
</ul>
  </nav>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" >
    <div class="position-sticky pt-4 ">
      <ul class="nav flex-column">
        <li class="nav-item">

        </li>
        <li class="nav-item">
              <a class="nav-link active" aria-current="page"href="{{route('dashboard')}}">
            Dashboard
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('gallery')}}">
              <span ></span>
              Gallery manage
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('staff')}}>
            <span ></span>
          Manage Staff
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('foodItem')}}>
            <span ></span>
            Food Item
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href={{route('timeSlot')}}>
              <span ></span>
              Manage Timeslot
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('table')}}>
              <span ></span>
              Manage Table
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('showReservation')}}">
              <span ></span>
              Manage Reservation
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="{{route('adminOrder')}}">
              <span ></span>
              Manage Order
            </a>
          </li>

          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('orderReport')}}">
              <span ></span>
              Order list
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('reservationReport')}}">
              <span ></span>
              Manage Record
            </a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-blue " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Report</a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('reservationReport')}}">Reservation Report</li>
              <li><a class="nav-link" href="{{route('orderReport')}}">Order Report</a></li>

            </ul>
          </li>
</li>
      </ul>
    </div>
      </nav>

