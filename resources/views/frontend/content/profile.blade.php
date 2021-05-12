<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
    <div class="row container">

    <div class="col md-6 mt-5">
        <div class="card shadow-sm h-100" style="height:250px;width:270px;">
            <img style="height:250px;width:269px;"src="{{asset('/style/image/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg')}}" alt="" class="img-fluid ">
            <div class="card-body" >
                <p class="card-text">Reservation Detais</p>

            </div>
            <div>
                <a class="btn btn-success "href="{{route('reservationProfile',auth()->user()->id)}}">View</a>
            </div>
        </div>
    </div>

    <div class="col md-6 mt-5">
        <div class="card shadow-sm h-100" style="height:250px;width:270px;">
            <img style="height:250px;width:269px;"src="{{asset('/style/image/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg')}}" alt="" class="img-fluid ">
            <div class="card-body" >
                <p class="card-text">Order Details</p>

            </div>
            <div>
                <a class="btn btn-success"href="{{route('userProfile',auth()->user()->id)}}">View</a>
            </div>
        </div>
    </div>


</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
