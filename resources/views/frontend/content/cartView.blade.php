@extends('frontend.main')



@section('content')
<div>
    <h3 class="text-center mt-5">Food Cart</h3>
</div>

<div class="d-flex content-jufity-center mt-5 ">
    <table class="table table-bordered table-striped table-success">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Added/Remove</th>
            <th scope="col">Total</th>



          </tr>
        </thead>
        @foreach ($carts as $key=>$cart)
        <tbody>

          <tr>
            <th scope="row">{{$key+1}}</th>
            <td><img src="{{url('/files/photo/'.$cart->foodItem->file)}}" style="width:100px;height:100px"></td>
            <td>{{$cart->foodItem->name}}</td>
            <td>{{$cart->foodItem->description}}</td>
            <td>{{$cart->foodItem->price}}</td>
            <td><input style="width:30px" class="ms-5"type="number" value="{{$cart->quantity}}" min="1"></td>
            <td>
                <a href="" class="btn btn-danger">Remove</a>
                <a href="" class="btn btn-success">Add</a>
            </td>
            <td> {{$cart->foodItem->price * $cart->quantity}}</td>
          </tr>
        </tbody>
      @endforeach
    </table>
</div>


<div class="d-flex justify-content-center mt-5">
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

        <diV>
          <a href="{{route('order')}}"class="btn btn-success btn-lg mt-4" >Checkout</a>
        </diV>
    </div>
</div>

@endsection
