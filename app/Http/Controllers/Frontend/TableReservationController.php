<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Table;
use App\Models\TimeSlot;
use Illuminate\Http\Request;

class TableReservationController extends Controller
{
    public function showTableReservation()
    {
        $tables=Table::where('status','=','show')->get();


        //   dd($tables);
        return view('frontend.content.tableReservation',compact('tables'));
    }


}
