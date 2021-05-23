@extends('backend.main')

@section('content')


    <form method="post" action={{route('foodItemEditUpdate',$foodItem['id'])}} enctype="multipart/form-data">
{{-- @dd($foodItem); --}}

@csrf



            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputName">Food Name</label>
                    <input name="name" value="{{$foodItem->name}}" type="text" class="form-control" id="exampleInputName" placeholder="Enter Food  Name">

                </div>
                <div class="form-group">
                    <label for="exampleInputName">Description</label>
                    <input name="description" value="{{$foodItem->description}}" type="text" class="form-control" id="exampleInputName" placeholder="Enter description">



                </div>

                    </select>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input name="price" type="string" value="{{$foodItem->price}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter Price">

                </div>



        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary" style="margin-right: 385px;">Update</button>
        </div>


    </form>

      </div>
    </div>
  </div>



@endsection
