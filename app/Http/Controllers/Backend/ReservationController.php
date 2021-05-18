<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ReservationConfrim;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\TimeSlot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function showReservation()
    {
        $reservations = Reservation::all();
        $time_slot =TimeSlot::all();

        // dd($reservations);
            //  dd($time_slot);

        return view('backend.content.reservationManage',compact('reservations','time_slot'));
    }

    public function reservationConfirm($id, $status)
    {
        $reservation = Reservation::find($id);
        $customer = User::where('id', $reservation->user_id)->first();

        // dd($status);
 $reservation->update([

     'status' => 'cancle',
      'status' => $status
            ]);

            // dd($reservation)

             //send email to user
             Mail::to($customer->email)->send(new ReservationConfrim($reservation));

        return redirect()->back();

}
}
