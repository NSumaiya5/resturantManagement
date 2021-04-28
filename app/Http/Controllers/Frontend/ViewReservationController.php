<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;

class ViewReservationController extends Controller
{
    public function tableReservation($id)
    {
        $tables =Table::find($id);
        // dd($tables);
        return view('frontend.content.reservation',compact('tables'));
    }

    public function reservation(Request $request,$id)
    {
        // dd($request->all());
        $tables=Table::find($request->tables_id);
        // $daysCalculate=strtotime($request->to_date)-strtotime($request->from_date);
        // $daysCalculate=round($daysCalculate / (60 * 60 * 24));
            Reservation::create([

               'tables_id'=>$request->tables_id,
                // 'user_id'=>auth()->user()->id,
                // 'user_name'=>auth()->user()->name,
                // 'user_email'=>auth()->user()->email,
                // 'user_phone'=>auth()->user()->phone,
                // 'user_address'=>auth()->user()->address,


                //  'user_id'=>auth()->user()->id,


                'reservation_date'=>$request->date,
                'reservation_time_from'=>$request->from_time,
                'reservation_time_to'=>$request->to_time,
                'details'=>$request->details,
                'reservation_amount'=>$request->reservation_amount,
                // 'total'=>$car->price*$daysCalculate,
            ]);

            return redirect()->back()->with('message','Booking created Successfully');
    }

}
