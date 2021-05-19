@extends('backend.main')

@section('content')

        <div class="row container text-center ms-5 ">

            <div class="col-md-11 ms-5 mt-5 ">
                <form action={{ route('orderReport') }} method="GET">

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


        <table class="table table-bordered table-striped table-success mt-5">
            <thead>
              <tr>
                <th scope="col">Serial</th>
                <th scope="col">Date</th>
                <th scope="col">User Name</th>
                <th scope="col">User Email</th>
                <th scope="col">Food Item Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Grand Total</th>
                </tr>
            </thead>

            <tbody>
                @if ($orderViews ->count() > 0)

            @foreach($orderList  as $key=> $order)



      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$order->created_at->format('d-m-Y')}} </td>
        <td>{{auth()->user()->name}} </td>
        <td>{{auth()->user()->email}} </td>
        <td>{{ $order->food->name }}</td>
        <td>{{ $order->quantity }}</td>
        <td>{{ $grand_total}}/=</td>


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