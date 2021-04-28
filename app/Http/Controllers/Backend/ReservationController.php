<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function showReservation()
    {
        $reservations = Reservation::with(['table'])->get();
//        dd($allBooking);
        return view('backend.content.reservationManage',compact('reservations'));
    }

}
