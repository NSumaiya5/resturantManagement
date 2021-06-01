@extends('frontend.main')

@section('content')

    <h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
    <h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>





    <form action={{ Route('submitReview') }} method="post" class="container mt-5 w-50 p-5 border shadow p-3 mb-5 bg-white">
        @csrf
        <div class="mb-3 ">

            <div  class="mb-5"><img src="{{ url('/files/photo/' .$food_review->file)}}" style="width:200px; height:200px;margin-left:250px"></div>


            {{-- <label class="ms-5 " for="">Table Capacity: {{$tables->capacity}}</label> --}}


            <div class="form-group">
                <div class="col-md-12 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user">User Name :</i></span>
                        <input name="name" value="{{ auth()->user()->name }}" placeholder="{{ auth()->user()->name }}" class="form-control" type="text">
                    </div>
                </div>
            </div>


            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope">Email   :</i></span>
                <input name="email" type="email" class="form-control" placeholder="{{ auth()->user()->email }}">
            </div>
        </div>


        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="hidden" value="{{$food_review->id}}" name="food_item_id">
            <input name="name" type="text" value="{{ $food_review->name }}" class="form-control">
        </div>
        </div>






        </div>




        <div class="pinfo">Rate our overall services.</div>



        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-star checked"></i></span>
            <select name="rate" class="form-control" id="rate">
                <option value="1">1<i class="fa fa-star checked"></i></option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        </div>
        </div>

        <div class="pinfo">Write your feedback.</div>



        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            <textarea name="message" class="form-control" id="review" rows="3"></textarea>

        </div>



        </div>
        </div>
        <div class="mt-5 justify-content-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection
