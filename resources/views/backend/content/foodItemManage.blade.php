@extends('backend.main')

@section('content')


 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary mt-5 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New Food</button>



{{-- Employee Details table --}}
<table class="table my-3 " style="margin-right: 200px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Picture</th>
        <th scope="col">Food Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Edit/Delete</th>
      </tr>
    </thead>
    <tbody>
     @foreach($foodItems as $request)

        <tr>
            <th scope="row">1</th>
            <td><img src="{{url('/files/photo/'.$request->file)}}" style="width:70px; height:60px;" ></td>
            <td>{{$request->name}}</td>
            <td>{{$request->description}}</td>
            <td>{{$request->price}}</td>

            <td>
                <button type="button" class="btn btn-info text-white">Edit</button>
                <a class="btn btn-danger" href="{{route('foodItemDelete', $request->id)}}"> Delete</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    {{-- <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody> --}}
  {{-- </table> --}}






  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Food</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action={{route('foodItemCreate')}} enctype="multipart/form-data">


@csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName">Food Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Enter Food  Name">

            </div>
            <div class="form-group">
                <label for="exampleInputName">Description</label>
                <input name="description" type="text" class="form-control" id="exampleInputName" placeholder="Enter Working Area">

                {{-- <select class="form-select" name="workingArea_id">
                    <option selected>Open this select Area</option>
                    @foreach ($workingArea as $request)
                        <option value="{{ $request->id }}">{{ $request->workingArea }}</option>
                    @endforeach
                </select> --}}

            </div>

                </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input name="price" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">

            </div>



            <div class="form-group">
                <label for="exampleInputRePicture">Upload Picture</label>
                <input name="picture" type="file" class="form-control" id="exampleInputRePicture" placeholder="">

            </div>

        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary" style="margin-right: 385px;">Add</button>
        </div>

    </form>

      </div>
    </div>
  </div>



@endsection
