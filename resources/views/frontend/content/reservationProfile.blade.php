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




                      <div class="row container text-center ms-5 ">

                        <div class="col-md-11 ms-5 ">

                          {{-- @dd($showOrder); --}}
                          <h1 class="text-center fs-1 mt-5">Reservation Details</h1>
                          <div class="mt-4 mb-5">
                            <p class="text-dark">Name:{{auth()->user()->name}} </p>
                            <p class="text-dark">email:{{auth()->user()->email}} </p>
                            <p class="text-dark">Phone:{{auth()->user()->phone}} </p>
                            <p class="text-dark">address:{{auth()->user()->address}} </p>
                          <hr/>

                            <table class="table fs-6">
                                <thead >


 <tr >
    <th scope="col">Serial</th>
    <th scope="col">Image</th>

    <th scope="col">Reservation Date</th>
    <th scope="col">Time Slot</th>
    <th scope="col">Table Number</th>
    <th scope="col">Message</th>
    <th scope="col">Status</th>




      {{-- <th scope="col">User</th>
    <th scope="col">User Email</th>
    <th scope="col">User Contact No</th> --}}




                                <tbody>
                                    {{-- @dd($reservationViews); --}}

                                @foreach ($reservationViews  as $key=> $data)
                                <td>{{$key+1}}</td>
                                <td><img src="{{url('/files/photo/'.$data->table->file)}}" style="width:70px; height:60px;" ></td>


                                <td>{{$data->reservation_date}} </td>
                                <td>{{$data->time_slot_name->name}}({{$data->time_slot_name->reservation_time_from}}-{{$data->time_slot_name->reservation_time_from}}) </td>
                                <td>{{$data->tables_id}}</td> </td>

                                <td>{{$data->message}}</td> </td>
                                <td>{{$data->status}}</td> </td>






                                </tr>
                                  @endforeach
                                  </tbody>
                                  </table>








    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</body>
</html>
