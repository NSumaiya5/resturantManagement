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
              <a class="nav-link" href="{{route('homepage')}}">Home</a>
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

    <section >

      <h1 class="text-center about">About Us</h1>

      <p class="about-p"style="font-family: Arial, Helvetica, sans-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident perferendis pariatur optio eaque quia vero dicta ut nihil laudantium nulla tempora maiores, odit voluptatem ipsa officia assumenda porro veritatis sed fugiat corrupti? Hic voluptas accusantium officia voluptatem cumque ducimus molestias facilis quasi saepe magni, laudantium quam doloremque, exercitationem nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident perferendis pariatur optio eaque quia vero dicta ut nihil laudantium nulla tempora maiores, odit voluptatem ipsa officia assumenda porro veritatis sed fugiat corrupti? Hic voluptas accusantium officia voluptatem cumque ducimus molestias facilis quasi saepe magni, laudantium quam doloremque, exercitationem nesciunt!</p>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-12 ms-5">

              <video class="img-fluid ms-5"style="height:500px;"width="5050px"  autoplay muted loop>

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



  <hr class="horizontal-line-6">


  <p class="footer-li bg-dark text-white">Copyright &copy; 2021 Fresh Food</p>
  <hr class="horizontal-line-7">

  </Footer>
  <!--footer section start-->

  <!--Body container end-->
</div>


</html>
