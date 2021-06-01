<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fresh Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>


<body>



    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <img style="height:30px;weight:33px;" class="ms-3" src="{{ asset('/style/image/logo2.jpg') }}" alt=""
                class="img-fluid " alt="" />
            <a class="navbar-brand fs-6" href="#">FRESH<br />FOOD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark ms-3" aria-current="page" href={{ route('homepage') }}>Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark ms-3" href="{{ route('foodItemMenu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark ms-3" href="{{ route('showTableReservation') }}">Reservation</a>
                    </li>



                    @if (auth()->user())
                        <li class="nav-item">

                            <a class="nav-link text-dark ms-3 mb-3" href="{{ route('carts') }}">
                                <i class="mb-3 fas fa-cart-arrow-down "></i> </a>
                        @else
                            <a class="nav-link text-dark ms-3" href="{{ route('sorryMsg') }}"><i
                                    class="fas fa-cart-arrow-down"></i></a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <span class="badge bg-success rounded-pill mb-2">{{ $foodItem_count }}</span>
                    </li>


                    @auth
                        <li class="nav-item">
                            <div class="nav-link   text-dark">

                                <a class="btn btn-success"
                                    href="{{ route('profile', auth()->user()->id) }}">{{ auth()->user()->name }}</a>

                                <a class="btn btn-success" href="{{ route('userLogout') }}">Logout</a>
                            </div>
                        @else
                            <a class="nav-link text-dark " href="{{ route('login.registration.from') }}">Login</a>
                        </li>
                    @endauth




                </ul>
            </div>
        </div>
    </nav>


    <div class="row">
        <div class="col-md-5 order-md-2 mb-5 mt-5">
            <h4 class="d-flex justify-content-between align-items-center ">
                <span>Your Food</span>
            </h4>

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

                @foreach ($carts as $key => $cart)

                    <tbody>
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ url('/files/photo/' . $cart->foodItem->file) }}"
                                    style="width:80px; height:80px;"></td>
                            <td>{{ $cart->foodItem->name }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>{{ $cart->foodItem->price }}</td>
                        </tr>
                @endforeach
                <hr />
                </tr>
                </tbody>
            </table>

            <hr />
            <div class="text-center mt-5">
                <div class="mt-2 ">
                    <label>Subtotal</label>
                    <span class="ml-4">: {{ $sub_total }}</span>
                </div>
                <div class="border-bottom">
                    <label>Tax (5%)</label>
                    <span class="ml-5">: {{ $tax }}</span>
                </div>

                <div class="totals-item totals-item-total">
                    <label>Grand Total:</label>
                    <span class="" id="cart-total"> {{ $grandtotal }}</span>
                </div>


            </div>



        </div>
        <div class="col-md-7 order-md-1">
            <h4 class="mb-5 text-center mt-5">Confirmation </h4>


            <div class="album py-5 bg-light">
                <div class="container">

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
             @if(session()->has('status'))
                <div class="alert alert-danger">
                    {{ session()->get('status') }}
                </div>
            @endif

            <form action={{ route('orderConfirm') }} method="post"
                class="needs-validation container mt-5 w-75 p-5 border shadow p-3 mb-5 bg-white rounded-3"  >
                @csrf
                <div class="row">
                    <div class=" mb-3">
                        <label for="firstName">Name</label>
                        <input type="text" readonly name="name" class="form-control" id="firstName" placeholder=""
                            value="{{ auth()->user()->name }}" required>
                        <div class="invalid-feedback">

                        </div>
                    </div>

                </div>


                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" readonly value="{{ auth()->user()->email }}" name="email"
                        class="form-control" id="email" placeholder="">
                    <div class="invalid-feedback">

                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="" class="form-control"
                        id="address" placeholder="" required>
                    <div class="invalid-feedback">

                    </div>


                    <div class="row d-flex my-2 ml-2">
                        <div class="col-md-6">
                            <input type="checkbox" name="payment_method" value="bkash">
                            <label for="vehicle1"> <img
                                    src="https://media-exp1.licdn.com/dms/image/C510BAQFYQ12drExNfw/company-logo_200_200/0/1567518887113?e=2159024400&v=beta&t=NqOeHA9iax5LN_y6bQmgZx3a2020WUDr_x6JR1rFPIs"
                                    style="width:50px; height:50px;" alt="">Bkash</label><br>
                        </div>

                        <div class="col-md-6">
                            <input type="checkbox" name="payment_method" value="rocket">
                            <label for="vehicle2"> <img
                                    src="https://media-exp1.licdn.com/dms/image/C510BAQECvetZN5XgCg/company-logo_200_200/0/1519903960228?e=2159024400&v=beta&t=Cu6k6pul90PHjkNEV6Snx7HXi5OhYe1TF_jKxHSdBjc"
                                    style="width:50px; height:50px;" alt="">Rocket</label><br>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="payment-widget">
                        <!-- Credit Card Payment -->
                        <div class="payment-list">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group card-label">
                                        <label for="card_name">Transaction-ID</label>
                                        <input class="form-control"  name="t_id" type="number" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group card-label">
                                        <label for="expiry_month">Amount: </label>
                                        <input class="form-control"  readonly name="payment_amount" id="expiry_month"
                                            value="{{ $grandtotal }} Tk" >
                                    </div>
                                </div>

                                <div class="col-md-8 ms-5 mt-3 text-center">
                                    <div class="form-group card-label ms-5 ">
                                        <label for="expiry_month">Phone </label>
                                        <input class="form-control "  name="contact" id="expiry_month" value=""
                                            type="tel" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>






                </div>
                {{-- <h4 class="mb-3 text-center">Payment</h4> --}}



                <div class="mt-5 mb-5 text-center">
                    <button class="btn btn-success " type="submit">Order Confirm</button>
                </div>


        </div>


        </form>





        {{-- <div class="content">
    <div class="container w-50 mt-5">

        <div class="row">
            <form action="/action_page.php">


              </form> --}}
        {{-- <div class="card">
                    <div class="card-body">

                        <!-- Checkout Form -->
                        <form action=" " method="psot">

                            <div class="row d-flex my-2 ml-2">
                                <div class="col-md-6">
                             <input type="checkbox" name="payment_method" value="bkash" >
                             <label for="vehicle1"> <img src="https://media-exp1.licdn.com/dms/image/C510BAQFYQ12drExNfw/company-logo_200_200/0/1567518887113?e=2159024400&v=beta&t=NqOeHA9iax5LN_y6bQmgZx3a2020WUDr_x6JR1rFPIs" style="width:50px; height:50px;" alt="">Bkash</label><br>
                         </div>
                         <div class="col-md-6">
                             <input type="checkbox" name="payment_method" value="rocket" >
                             <label for="vehicle2"> <img src="https://media-exp1.licdn.com/dms/image/C510BAQECvetZN5XgCg/company-logo_200_200/0/1519903960228?e=2159024400&v=beta&t=Cu6k6pul90PHjkNEV6Snx7HXi5OhYe1TF_jKxHSdBjc" style="width:50px; height:50px;" alt="">Rocket</label><br>
                            </div>
                         </div>

                            <!-- Personal Information -->
                            <div class="payment-widget">
                                <!-- Credit Card Payment -->
                                <div class="payment-list">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="card_name">Transaction-ID</label>
                                                <input class="form-control" name="t_id" type="integer">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="expiry_month">Amount: </label>
                                                <input class="form-control" name="visit" id="expiry_month" value="" type="decimal">
                                            </div>
                                        </div>


                                        </div>
                                    </div>
                                </div>

                                <!-- Terms Accept -->
                                <div class="terms-accept">
                                    <div class="custom-checkbox">
                                       <input type="checkbox" id="terms_accept">
                                       <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
                                    </div>
                                </div>
                                <!-- /Terms Accept -->

                                <!-- Submit Section -->
                                <div class="submit-section mt-4">
                                    <button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
                                </div>
                                <!-- /Submit Section -->

                            </div>
                        </form>
                        <!-- /Checkout Form -->

                    </div>
                </div>

            </div> --}}


    </div>

    </div>

    </div>
    </div>
    </div>

    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
