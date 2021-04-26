<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableReservationController extends Controller
{
    public function tableReservation()
    {
        $tables=Table::all();

        return view('frontend.content.tableReservation',compact('tables'));
    }


}
