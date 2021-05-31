@extends('backend.main')

@section('content')


<div class="row container text-center ms-5 ">

                      <div class="row container text-center ms-5 mt-5">


                        <form action={{ route('reservationReport') }} method="GET">

                            {{-- @csrf --}}

                            <div class="row">
                                <div class="col-md-8">
                                    <div class=" row">
                                        <div class="col-md-6">
                                            <label for="from">Date From:</label>
                                            <input id="from" type="date" class="form-control" name="from_date">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="to">Date To:</label>
                                            <input id="to" type="date" class="form-control" name="to_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <button type="button" onclick="printDiv()" class="btn btn-success mx-3">Print</button>
                                </div>
                            </div>
                        </form>

                        <div id="printArea">


<div>
    {{-- @dd($fromDate) --}}

    @if (isset($fromDate)&& $fromDate !="1970-01-01")
    <div class="container">
        <h2>Reservation report from: {{ date('M-d, Y', strtotime($fromDate)) }} to {{ date('M-d, Y', strtotime($toDate)) }} </h2>
        <h3>Number of records: {{ count($reservationViews) }}</h3>
    </div>
    @endif

  <table class="table fs-6 mt-5">
  <thead >


 <tr >
    <th scope="col">Serial</th>
    <th scope="col">Reservation Date</th>
    <th scope="col">User Name</th>
    <th scope="col">Email</th>
    <th scope="col">Time Slot</th>

    <th scope="col">Table Number</th>
    <th scope="col">message</th>
    <th scope="col">Status</th>



 </tr>
</thead>
  <tbody>
                                    {{-- @dd($reservationViews); --}}
                                    @if ($reservationViews ->count() > 0)

                                 @foreach ($reservationViews  as $key=> $data)
                                 <tr>
                                <td>{{$key+1}}</td>

                                <td>{{$data->reservation_date}} </td>
                                <td>{{auth()->user()->name}} </td>
                                <td>{{auth()->user()->email}} </td>
                                <td>{{$data->time_slot_name->name}}({{$data->time_slot_name->reservation_time_from}}-{{$data->time_slot_name->reservation_time_from}}) </td>

                                <td>{{$data->tables_id}}</td>
                                  <td>{{$data->message}}</td>
                                  <td>{{$data->status}}</td>


                                </tr>
                                  @endforeach
                                  @else

                    <td>
                        <h4>No Data Found!</h4>
                    </td>


                @endif
                                  </tbody>
                                  </table>








    </div>

    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>

   @endsection
