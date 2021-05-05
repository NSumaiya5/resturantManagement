@extends('frontend.main')

@section('content')
 @if(session()->has('success'))

  <div class="alert alert-success mt-4">
        {{session()->get('success')}}
  </div>
  @endif

<div class="album py-5 bg-light mt-5">
    <div class="container">

        <div class="text-center">

            <h2  style="color: #dd7140;">Order Now </h2>
            <h5 style="color: #3A4256;" class="mb-5">Fell the test</h5>
{{--

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">

@foreach($foodItems as $data)

                <div class="col mt-5">
                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                        <img style="height:250px;width:269px;"src="{{url('/files/photo/'.$data->file)}}"alt="foodItem image">
                        <div class="card-body" >
                            <p class="card-text">{{$data->name}}</p>
                            <p class="card-text">{{$data->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">

                                    @if (auth()->user())
                                    <a class="btn btn-success" href="{{route('addToCart',$data->id)}}">Add To Cart</a>
                                    @else
                                    <a class="btn btn-success" href="{{route('login.registration.from')}}">Add To Cart</a>

                                    @endif --}}

                                    {{-- <a href="{{route('addToCart',$data->id)}}"  type="button" class="btn btn-success">Add To Cart</a> --}}
                                    {{-- <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</a> --}}
                                {{-- </div>
                                <small class="text-muted">{{$data->price}} BDT</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <table class="table my-3 " style="margin-right: 200px;">
        <thead>
          <tr>
            <th scope="col">serial</th>
            <th scope="col">Picture</th>
            <th scope="col">Food Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">ADD</th>
          </tr>
        </thead>
        <tbody>
         @foreach($foodItems as $key=> $data)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td><img src="{{url('/files/photo/'.$data->file)}}"alt="foodItem image" style="width:150px; height:140px;" ></td>
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->price}}</td>

                <td><div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">

                        @if (auth()->user())
                        <a class="btn btn-success" href="{{route('addToCart',$data->id)}}">Add To Cart</a>
                        @else
                        <a class="btn btn-success" href="{{route('login.registration.from')}}">Add To Cart</a>

                        @endif

              </tr>
@endforeach
        </tbody>
      </table>
@endsection
