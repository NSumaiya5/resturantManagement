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

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-4 ">
      <ul class="nav flex-column">
        <li class="nav-item">

        </li>
        <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span ></span>
            Admin
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
           Staff
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('foodItem')}}>
            <span ></span>
            Food Item
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('table')}}>
              <span ></span>
              Manage Table
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span ></span>
            Order list
          </a>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span ></span>
              Manage Reservation
            </a>
          </li>


        <li class="nav-item">
            <a class="nav-link" href="#">
              <span ></span>
              Manage Record
            </a>
          </li>

</li>
      </ul>
    </div>
      </nav>

