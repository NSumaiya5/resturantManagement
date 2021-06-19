<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Table;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TableReservationController extends Controller
{
    public function showTableReservation()
    {
        $tables=Table::where('status','=','show')->get();
        $time_slot = TimeSlot::all();




        //   dd($tables);
        return view('frontend.content.tableReservation',compact('tables','time_slot'));
    }

    public function searchTable(Request $request)
{


$now =Carbon::now()->addHours(6)->format('h:i A');
$time_check =TimeSlot::find($request->time_id);

if($time_check->reservation_time_from <$now ){
    // dd('error');
    return redirect()->back()->with('status', 'Reservation Time Invalid');
}
    $time_slot = TimeSlot::all();
    $searchDate = $_GET['from_date'];
    $searchTime = $_GET['time_id'];

    // dd($searchTime);
    $tables = Table::whereNotIn('id', function($query) use ($searchDate, $searchTime){
        $query->from('reservations')
        ->select('tables_id')
        ->where('reservation_date', $searchDate)
        ->where('time_slots_id', $searchTime);
    })->get();
    // dd($search);
    return view('frontend.content.tableReservation',compact('tables','time_slot','searchDate','searchTime'));
}
}
