@extends('frontend.main')
@section('content')


<!--Body container start-->
<div class="container">


    <div class="row mt-5 mb-5">
      <div class="col-md-6">
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
        <div class="card ">
          <div class="card-body ">
            <h2 class=" fs-2">Welcome to</h2>
            <h1 class=""><ion-icon class="logo-icon" name="fast-food"></ion-icon> Fresh Food <ion-icon class="logo-icon" name="beer"></ion-icon></h1>
            <p class="">Taste the best in town <i class="fas fa-utensils"></i></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>
  <!--Header image and comapany name and slogan end-->


  <!--main section start-->
  <main>

    <!--About section starts-->

    <section >

      <h1 class="text-center about">About Us</h1>

      <p class=""style="font-family: Arial, Helvetica, sans-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident perferendis pariatur optio eaque quia vero dicta ut nihil laudantium nulla tempora maiores, odit voluptatem ipsa officia assumenda porro veritatis sed fugiat corrupti? Hic voluptas accusantium officia voluptatem cumque ducimus molestias facilis quasi saepe magni, laudantium quam doloremque, exercitationem nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident perferendis pariatur optio eaque quia vero dicta ut nihil laudantium nulla tempora maiores, odit voluptatem ipsa officia assumenda porro veritatis sed fugiat corrupti? Hic voluptas accusantium officia voluptatem cumque ducimus molestias facilis quasi saepe magni, laudantium quam doloremque, exercitationem nesciunt!</p>
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




@endsection

