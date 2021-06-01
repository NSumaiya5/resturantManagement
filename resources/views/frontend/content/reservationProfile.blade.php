<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fresh Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>


    <div id="printArea">


        <div class="row container text-center ms-5 ">

            <div class="col-md-11 ms-5 ">

                {{-- @dd($showOrder); --}}
                <h1 class="text-center fs-1 mt-5">Reservation Details</h1>
                <div class="mt-4 mb-5">
                    <p class="text-dark">Name:{{ auth()->user()->name }} </p>
                    <p class="text-dark">email:{{ auth()->user()->email }} </p>
                    <p class="text-dark">Phone:{{ auth()->user()->phone }} </p>
                    <p class="text-dark">address:{{ auth()->user()->address }} </p>
                    <hr />

                    <table class="table fs-6">
                        <thead>


                            <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Image</th>

                                <th scope="col">Reservation Date</th>
                                <th scope="col">Time Slot</th>
                                <th scope="col">Table Number</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <th scope="col">Cancel</th>




                        <tbody>
                            {{-- @dd($reservationViews); --}}

                            @foreach ($reservationViews as $key => $data)

                                <td>{{ $key + 1 }}</td>
                                <td><img src="{{ url('/files/photo/' .$data->table->file) }}"
                                        style="width:70px; height:60px;"></td>
                                <td>{{ $data->reservation_date }} </td>
                                {{-- @dd($data); --}}
                                <td>{{ $data->time_slot_name->name }}({{ $data->time_slot_name->reservation_time_from }}-{{ $data->time_slot_name->reservation_time_from }})
                                </td>
                                <td>{{ $data->tables_id }}</td>
                                <td>{{ $data->message }}</td>
                                <td>{{ $data->status }}</td>

                                {{-- @dd($data->created_at->addHours(7)); --}}
                                <td>
                                    @if ($data->status == 'Requested for cancellation')
                                        <p>Wait for admin to approve your request.</p>
                                    @elseif ($data->created_at->addHours(2) > $now && $data->status != 'cancel')
                                        <a class="btn btn-success text-center text-black "
                                            href="{{ route('reservationCancel.request', $data->id) }}"> Cancel </a>
                                    @elseif ($data->status == 'cancel')
                                        <p>Request canceled by the Admin.</p>
                                    @endif
                                </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    {{ $reservationViews->links() }}
                </div>

                <div class="mb-5">
                    <button type="button" onclick="printDiv()" class="btn btn-success mx-3">Print</button>

                    <a href="{{ route('profile', auth()->user()->id) }}" type="button"
                        class="btn btn-success mx-3">Back</a>
                </div>



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

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
                crossorigin="anonymous"></script>


</body>

</html>
