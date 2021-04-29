@extends('backend.main')

@section('content')


        <form method="post" action={{route('staffUpdate',$staff->id)}} enctype="multipart/form-data">


@csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input name="name" required type="text" value="{{$staff->name}}"
                class="form-control" id="exampleInputName" placeholder="Enter Staff Name" >

            </div>

            {{-- <div class="form-group">
                <label for="exampleInputName">Working Area</label>
                <input name="workingArea" required type="text" class="form-control" id="exampleInputName" placeholder="Enter Working Area">

            </div> --}}

          <div class="form-group">
            <label for="exampleInputName">Working Area</label>
            <select class="form-select mb-3" type="text" value="{{$staff->workingArea}}" name="workingArea">
                <option selected>Select workArea type </option>
                <option >Kitchen Area</option>
                <option >Serve Area</option>
                <option >Accounts</option>
                <option >Security </option>
                {{-- @foreach ($designations as $request)
                    <option value="{{ $request->id }}">{{ $request->designation}}</option>
                @endforeach --}}
            </select>
        </div>

                </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" required type="email" value="{{$staff->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Staff Email Address">

            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Contact No.</label>
                <input name="contact" required type="text" value="{{$staff->contact}}" class="form-control" id="exampleInputPhone" placeholder="Enter Staff Phone Number">

            </div>

        <div class="form-group">
            <label for="exampleInputAddress">Address</label>
            <input name="address" required type="text" value="{{$staff->address}}"class="form-control" id="exampleInputAddress" placeholder="Enter staff Address">

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
