{{-- @extends('frontend.main')

@section('content') --}}



    {{-- <div class="album py-5 bg-light">
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
    </div> --}}







<!-- Flat Our Story -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


    <title>Fresh Food</title>

    <!--External CSS file-->
    <link rel="stylesheet" href="style/css/about.css">



    <!--Extrenal Theme CSS file-->
    <!--link rel="stylesheet" type="text/css" href="dark.css">--->

    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/07cc86c233.js" crossorigin="anonymous"></script>

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>

<!--Body container start-->
<div class="container">

  <!--header section-->
    <header id="header">

  <hr class="horizontal-line-0">

  <!--Navbar start-->
    <nav  id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">



        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#nav-bar">Home<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#contact-section">Contact</a>
            </li>
          </ul>

        </div>

    </nav>
  <!--Navbar end-->

  <hr class="horizontal-line-1">

  <!--Header image and comapany name and slogan start-->
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col-md-6">

        <!--<img id="header-img"  src="https://image.freepik.com/free-vector/fast-food-seamless-pattern_1284-10646.jpg" class="img-fluid" alt="fast-food image">-->



        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-interval="2000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img  src="{{asset('/style/image/cr11.jpg')}}" style="height:400px" class="d-block w-100"alt="carousel-img-0">
            </div>
            <div class="carousel-item">
                <img  src="{{asset('/style/image/cr10.jpg')}}" alt=""  style="height:400px"class="d-block w-100"/>

              </div>
            <div class="carousel-item">
                <img  src="{{asset('/style/image/cr9.jpg')}}"  style="height:400px"alt=""class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img  src="{{asset('/style/image/cr8.jpg')}}"  style="height:400px"alt="" class="d-block w-100"/>
            </div>




          </div>
        </div>



      </div>
      <div class="col-md-6  mt-5 mb-5">
        <div class="card box border border-secondary">
          <div class="card-body">
            <h2 class="welcome fs-2">Welcome to</h2>
            <h1 class="logo-words"><ion-icon class="logo-icon" name="fast-food"></ion-icon> Fresh Food <ion-icon class="logo-icon" name="beer"></ion-icon></h1>
            <p class="slogan">Taste the best in town <i class="fas fa-utensils"></i></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>
  <!--Header image and comapany name and slogan end-->

  <hr class="horizontal-line-2">

  <!--main section start-->
  <main>

    <!--About section starts-->

    <section id="about-section">

      <h1 class="text-center about">About Us</h1>

      <p class="about-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident perferendis pariatur optio eaque quia vero dicta ut nihil laudantium nulla tempora maiores, odit voluptatem ipsa officia assumenda porro veritatis sed fugiat corrupti? Hic voluptas accusantium officia voluptatem cumque ducimus molestias facilis quasi saepe magni, laudantium quam doloremque, exercitationem nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident perferendis pariatur optio eaque quia vero dicta ut nihil laudantium nulla tempora maiores, odit voluptatem ipsa officia assumenda porro veritatis sed fugiat corrupti? Hic voluptas accusantium officia voluptatem cumque ducimus molestias facilis quasi saepe magni, laudantium quam doloremque, exercitationem nesciunt!</p>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <video class="img-fluid" id="video" autoplay muted loop>

                <source

                src="https://assets.mixkit.co/videos/preview/mixkit-customers-in-a-minimalist-style-restaurant-4385-large.mp4"

                type="video/mp4">

                Your browser does not support the video type.

              </video>
            </div>
          </div>
        </div>


    <!--About section ends-->

    <hr class="horizontal-line-3">


    <!--Menu section start-->

      <!--Memu section end-->

      <hr class="horizontal-line-4">

      <!--contact section start-->


  <!--footer section start-->
  <Footer>

    <div class="container">
      <div class="row">
        <div class="col-md-6 footer">
          <div>
            <h1 class="logo-words footer-logo"><ion-icon class="logo-icon" name="fast-food"></ion-icon> ORTIZ <ion-icon class="logo-icon" name="beer"></ion-icon></h1>
            <p class="footer-slogan slogan">Taste the best in town <i class="fas fa-utensils"></i></p>
          </div>

          <div class="social">
            <a class="social-icon"><ion-icon name="logo-facebook"></ion-icon></a>
            <a class="social-icon"><ion-icon name="logo-whatsapp"></ion-icon></a>
            <a class="social-icon"><ion-icon name="logo-twitter"></ion-icon></a>
            <a class="social-icon"><ion-icon name="call"></ion-icon></a>
          </div>

        </div>
        <div class="col-md-6 footer">
          <div class="footer-text">
            <ul class="footer-ul">
              <li class="footer-li"><a target="_top" href="#header">Back to top</a></li>
              <li class="footer-li"><a href="#">Cookies Policy</a></li>
              <li class="footer-li"><a href="#">Private Policy</a></li>
              <li class="footer-li"><a href="#">Terms and Conditions</a></li>
              <li class="footer-li"><a href="#">Copyright &copy; 2021 ORTIZ</a></li>
            </ul>
        </div>
        </div>
      </div>
    </div>

  <hr class="horizontal-line-6">

  <div class="container">
    <div class="footer-js">
      <div class="div-clock">
        <div id="myClockDisplay" class="clock" onload="showTime()"></div>
      </div>
      <div class="div-date">
        <div id="myDateDisplay" class="date" onload="today()"></div>
      </div>
    </div>
  </div>

  <hr class="horizontal-line-7">

  </Footer>
  <!--footer section start-->

  <!--Body container end-->
</div>

     <!--Ionicons icons pack-->
     <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

     <!--External jS file-->
     <script type="text/javascript" src="script.js"></script>

     <!--Bootstrap jS bundle-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>

