@extends('frontend.main')

@section('content')



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
<section class="flat-row about-1"style="margin-top:50px">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="flat-divider d42px"></div>
                <div class="title-section style2 padle-0px ">
                    <h1 class="title mt-5 text-center">Our Story</h1>
                </div>
                <p class="entry-content mt-3">orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                <div class="flat-divider d27px"></div>

            </div><!--col-md-6-->

            <div class="col-md-6" >
                <div class="mt-5">
                    <img  src="{{asset('/style/image/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg')}}" alt="" class="img-fluid "/>

                </div>
            </div><!--col-md-6-->
        </div><!--row-->
    </div><!--container -->
</section>

<!-- Flat Why Choose US -->
<section class="flat-row about-2 "style="margin-top:100px">
    <div class="container">
        <div class="row">

           <div class="col-md-6 mt-5">
            <img  src="{{asset('/style/image/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg')}}" alt="" class="img-fluid "/>        </div><!--col-md-6-->

        <div class="col-md-6 mt-5">
            <div class="flat-divider d100px"></div>
            <div class="title-section style2 ">
                <h1 class="title">Why Choose Us</h1>
            </div>
            <p class="entry-content">Sumi is a restaurant, and coffee located on a busy corner site in Farringdon's Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and a bustling</p>

            <ul class="iconlist">
                <li><i class="fa fa-circle-o"></i> Sumi is a restaurant, bar and coffee roastery located </li>
                <li><i class="fa fa-circle-o"></i> Sumi is a restaurant, bar and coffee </li>
                <li><i class="fa fa-circle-o"></i> Sumi is a restaurant, bar and coffee roastery located on a Sumi </li>
                <li><i class="fa fa-circle-o"></i> restaurant, bar and coffee roastery located </li>
            </ul>
        </div><!--col-md-6-->


    </div><!--row-->
</div><!--container -->
</section>

<!-- Flat Team -->
<section class="flat-row team">


    </div><!--/.container -->
</section>

<!-- Flat testimonial -->
<section class="flat-row flat-testimonial about-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section margb-27px">
                    <h1 class="title">Our Customers Say</h1>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->

        <div class="row">
            <div class="col-md-12">

                <div class="flat-carousel">
                    <div class="owl-carousel-services">
                        <div class="item-owl">
                            <div class="blockquote-testimo">
                                <p> "A great Template for my website, my first reason is the design but I would have put <br/> all of them. One of the best templates I found, simple, easy, very good customer support,
                                    very easy to install...a very good template. Thank NthPsd

                                </p>
                            </div>

                            <div class="title-testimonial">
                                <h6 class="title"><a href="#">Eugene Fernandez</a></h6>
                                <p>UI-UX Designer</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="blockquote-testimo">
                                <p> "A great Template for my website, my first reason is the design but I would have put <br/> all of them. One of the best templates I found, simple, easy, very good customer support, very easy to install...a very good template. Thank NthPsd"
                                </p>
                            </div>

                            <div class="title-testimonial">
                                <h6 class="title-post"><a href="#">Eugene Fernandez</a></h6>
                                <p>UI-UX Designer</p>
                            </div>
                        </div>



                    </div><!--/.owl-carousel-services-v2-->
                </div><!--/.flat-carousel-v2-->
            </div><!--/.col-md-12-->
        </div><!--/.row-->
    </div><!--/.container -->
</section>

<!-- Flat testimonial -->


</body>
</html>

{{--
    <script type="text/javascript">
        // js
        function cart(){
            alert("Are you sure?");
        }
    </script> --}}
@endsection
