<div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
        <div class="card-body">
            <div class="dash-widget-header">
                <span class="dash-widget-icon text-danger border-danger">
                    <i class="fe fe-money"></i>
                </span>
                <div class="dash-count">
                    <h3>{{$all_App}} </h3>
                </div>
            </div>
            <div class="dash-widget-info">

                <h6 class="text-muted">Appointment</h6>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger w-50"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
        <div class="card-body">
            <div class="dash-widget-header">
                <span class="dash-widget-icon text-danger border-danger">
                    <i class="fe fe-money"></i>
                </span>
                <div class="dash-count">
                    <h3>{{$today_app}}</h3>
                </div>
            </div>
            <div class="dash-widget-info">

                <h6 class="text-muted">Today Appointment</h6>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger w-50"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</main>
<div class="content">
<div class="container-fluid">
<div class="row">


<div class="col-md-7 col-lg-8 col-xl-9 container m-auto">
    <div class="card">
        <div class="card-body">

            <!-- Profile Settings Form -->
            <form action="{{route('patientUpdate',$patient['id'])}}" method="post">
                @csrf
                <div class="row form-row ">
                    <div class="col-12 col-md-12">

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="name" class="form-control" value="{{$patient->name}}">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Age</label>
                            <div class="cal-icon">
                                <input type="text" name="age" class="form-control datetimepicker" value="{{$patient->patient->age}} ">
                            </div>
                        </div>
