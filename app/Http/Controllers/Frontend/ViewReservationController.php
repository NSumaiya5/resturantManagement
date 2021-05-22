<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\TimeSlot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ViewReservationController extends Controller
{
    public function tableReservation($id)
    {
        $tables =Table::find($id);
        $time_slot = TimeSlot:: all();
//    dd($time_slot);

        // dd($tables);
        return view('frontend.content.reservation',compact('tables','time_slot'));
    }

    public function reservation(Request $request,$id)
    {
        // dd($request->all());
        $tables=Table::find($request->tables_id);



        // $reservation_date =Carbon::parse($request->input('reservation_date'))->format('Y-m-d');


        $reservationCheck = Reservation::all();

        foreach($reservationCheck as $data){
                $tables = $data->tables_id ;
                $time_slot_id = $data->time_slot_id;
                $reservation_date=$data->reservation_date ;
                $status  = $data->status;
                $user_id = $data->user_id;
        }


if($tables ==$request->tables_id && $time_slot_id ==$request->time_id &&  $reservation_date ==$request->date &&  $status!= $request->status && $user_id == auth()->user()->id)
{
    return redirect()->back()->with('status', 'Your already request it');
}

else if( $tables ==$request->tables_id && $time_slot_id ==$request->time_id &&  $reservation_date ==$request->date &&  $status != $request->status )
  {
    return redirect()->back()->with('status', 'This time is already taken by another and its ' .$status);
  }




            Reservation::create([

               'tables_id'=>$request->tables_id,
               'user_id'=>auth()->user()->id,
                'reservation_date'=>$request->date,
                'time_slot_id'=>$request->time_id,
                'message'=>$request->message,
            ]);
            // dd($tables);


            return redirect()->back()->with('message','Reservation request create Successfully');
    }

}
