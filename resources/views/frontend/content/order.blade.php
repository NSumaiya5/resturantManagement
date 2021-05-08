<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif


  <div class="container">

  <div class="row ">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">


        <span class="text-muted">Your Food</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
     @foreach ($carts as $cart )


        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{$cart->foodItem->name}}</h6>
          </div>
          <span class="text-muted">{{$cart->quantity}}</span>
          <span class="text-muted">{{$cart->foodItem->price}}</span>


        </li>
        {{-- <li class="list-group-item d-flex justify-content-between">
            <span>Total </span>
            <strong>{{$cart->foodItem->price * $cart->quantity}}</strong>
          </li> --}}
        {{-- <li class="list-group-item d-flex justify-content-between">
            <span>Sub-Total </span>
            <strong>{{$sub_total}}</strong>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Tax</span>
            <strong>{{$tax}}</strong>
          </li> --}}


        @endforeach

      </ul>

    </div>





    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Confirmation Address</h4>

      <form  action={{route('orderConfirm')}} method="post" class="needs-validation" novalidate>
        @csrf
        <div class="row">
          <div class="col-md-12 mb-3">
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



        <h4 class="mb-3">Payment</h4>


        <div class="d-flex mb-5 ">
            <div class="">
                <div class="mt-2">
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

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" value="cashOnDelivary" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Cash On Service</label>
          </div>

        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Order Confirm</button>

      </form>
    </div>
  </div>


</div>

</div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
