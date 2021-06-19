@extends('frontend.main')

@section('content')


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
