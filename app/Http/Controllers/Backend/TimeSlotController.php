<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TimeSlot;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    public function timeSlot()
    {
        $timeSlot=TimeSlot::all();

        return view('backend.content.adminTimeslotManage',compact('timeSlot'));
    }

    public function timeSlotCreate(Request $request)
    {
    //  dd($request->all());
    // step:1 check req has file

    [
        'reservation_time_from'=>'required|date_format:H:i A',
        'reservation_time_to' =>'required|date_format:H:i A',
    ];

    TimeSlot::create([

            'name'=>$request->name,
            'reservation_time_from'=>$request->from_time,
            'reservation_time_to'=>$request->to_time,


            ]);



            return redirect()->back();
    }

    public function timeSlotDelete($id)
    {
    //  dd($id);

        $timeSlotDelete = TimeSlot::find($id);


        //then delete it
        $timeSlotDelete->delete();

        return redirect()->route('timeSlot');
    }
 }


