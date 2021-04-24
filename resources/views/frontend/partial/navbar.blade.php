<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link text-dark" aria-current="page" href={{route('homepage')}}>Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Menu</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">About Us</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Organization History</a></li>
          <li><a class="dropdown-item" href="#">Achivement</a></li>
          <li><a class="dropdown-item" href="#">Review</a></li>
          <li><a class="dropdown-item" href={{route('viewStaff')}}>Our Community</a></li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Contact Us</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Login</a>
      </li>

  </ul>
