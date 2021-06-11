@extends('frontend.main')

@section('content')

{{-- <h2 class="text-center mt-5 bg-dark text-white">Sorry You don't chosse yet'</h2>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img  src="{{asset('/style/image/g4.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img  src="{{asset('/style/image/gb1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img  src="{{asset('/style/image/gb2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}

  <div class="row  mb-5" style="margin-left:100px;margin-right:100px;">
<h2 class="text-center  bg-dark text-white">Sorry You don't chosse yet'</h2>

    <div class="col-md-12 ">
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  src="{{asset('/style/image/cr11.jpg')}}" style="height:700px" class="d-block w-100"alt="carousel-img-0">
          </div>
          <div class="carousel-item">
              <img  src="{{asset('/style/image/cr10.jpg')}}" alt=""  style="height:700px"class="d-block w-100"/>

            </div>
          <div class="carousel-item">
              <img  src="{{asset('/style/image/cr9.jpg')}}"  style="height:700px"alt=""class="d-block w-100"/>
          </div>
          <div class="carousel-item">
              <img  src="{{asset('/style/image/cr8.jpg')}}"  style="height:700px"alt="" class="d-block w-100"/>
          </div>
        </div>
      </div>
  </div>

@endsection
