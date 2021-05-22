<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  />
</head>


<body>

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <img style="height:30px;weight:33px;" class="ms-3" src="{{asset('/style/image/logo2.jpg')}}" alt="" class="img-fluid " alt=""/>
          <a class="navbar-brand fs-6" href="#">FRESH<br/>FOOD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark ms-3" aria-current="page" href={{route('homepage')}}>Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link text-dark ms-3" href="{{route('foodItemMenu')}}">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark ms-3" href="{{route('showTableReservation')}}">Reservation</a>
                  </li>



                      @if (auth()->user())
                      <li class="nav-item">

                      <a   class="nav-link text-dark ms-3 mb-3" href="{{route('carts')}}">
                        <i class="mb-3 fas fa-cart-arrow-down "></i> </a>
                      @else
                      <a  class="nav-link text-dark ms-3" href="{{route('sorryMsg')}}"><i class="fas fa-cart-arrow-down"></i></a>
                      </li>
                      @endif

                      <li class="nav-item">
                        <span class="badge bg-success rounded-pill mb-2">{{$foodItem_count}}</span>
                      </li>


                    @auth
                    <li class="nav-item">
                        <div class="nav-link   text-dark">

                            <a class="btn btn-success"href="{{route('profile',auth()->user()->id)}}">{{auth()->user()->name}}</a>

                            <a class="btn btn-success"href="{{route('userLogout')}}">Logout</a>
                        </div>
                      @else
                      <a class="nav-link text-dark " href="{{route('login.registration.from')}}">Login</a>
                    </li>
                  @endauth




                </ul>
          </div>
        </div>
      </nav>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

  <div class="row">
    <div class="col-md-5 order-md-2 mb-5 mt-5">
      <h4 class="d-flex justify-content-between align-items-center ">
      <span >Your Food</span></h4>

      <table class="mt-2 table table-bordered table-striped table-success">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Image</th>
            <th scope="col">Food Item Name</th>
            <th scope="col">Qty</th>
            <th scope="col"> Price</th>
                </tr>
        </thead>

     @foreach ($carts as$key =>$cart )

          <tbody>
              <tr>
            <td>{{$key+1}}</td>
            <td ><img src="{{url('/files/photo/'.$cart->foodItem->file)}}" style="width:80px; height:80px;" ></td>
            <td>{{$cart->foodItem->name}}</td>
            <td>{{$cart->quantity}}</td>
             <td>{{$cart->foodItem->price}}</td>
            </tr>
        @endforeach
        <hr/>
       </tr>
       </tbody>
   </table>
</div>
    <div class="col-md-7 order-md-1">
      <h4 class="mb-5 text-center mt-5">Confirmation </h4>

      <form  action={{route('orderConfirm')}} method="post" class="needs-validation container mt-5 w-75 p-5 border shadow p-3 mb-5 bg-white rounded-3" novalidate>
        @csrf
        <div class="row">
          <div class=" mb-3">
            <label for="firstName">Name</label>
            <input type="text" name="name" class="form-control" id="firstName" placeholder="" value="{{auth()->user()->name}}" required>
            <div class="invalid-feedback">

            </div>
          </div>

        </div>


        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" value="{{auth()->user()->email}}" name="email" class="form-control" id="email" placeholder="">
          <div class="invalid-feedback">

          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text"   name="address"  value="{{auth()->user()->address}}" class="form-control" id="address" placeholder="" required>
          <div class="invalid-feedback">

          </div>
        </div>
        <h4 class="mb-3 text-center">Payment</h4>
    <hr/>


        <div class="d-flex mb-5 col-md-12">
            <div class=" ">
                <div class="mt-2 ">
                  <label>Subtotal</label>
                  <span class="ml-4">: {{$sub_total}}</span>
                </div>
                <div class="border-bottom">
                  <label>Tax (5%)</label>
                  <span class="ml-5">: {{$tax}}</span>
                </div>

                <div class="totals-item totals-item-total">
                  <label>Grand Total:</label>
                  <span class="" id="cart-total"> {{$grandtotal}}</span>
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary " type="submit">Order Confirm</button>
                </div>


        </div>


      </form>

    </div>
  </div>

</div>

</div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
</body>

</html>
