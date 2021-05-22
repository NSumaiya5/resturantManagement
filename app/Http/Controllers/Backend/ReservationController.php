<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ReservationCancel;
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

        if($status=='cancel'){
            $reservation->update([


     'status' => 'cancel',
      'status' => $status
            ]);
            Mail::to($customer->email)->send(new ReservationCancel($reservation));

        }
        else{

            $reservation->update([

                'status' => 'confirm',
                 'status' => $status
                       ]);

            Mail::to($customer->email)->send(new ReservationConfrim($reservation));

            // dd($reservation)

             //send email to user
            }

        return redirect()->back();

}
public function reservationReport()

{

    $reservationViews = Reservation::all();



        if (isset($_GET['from_date'])) {
            $fromDate = date('Y-m-d', strtotime($_GET['from_date']));
            $toDate = date('Y-m-d', strtotime($_GET['to_date']));

            // dd($toDate);

            $reservationViews = Reservation::whereBetween('reservation_date',[$fromDate,$toDate])->get();
        }

    return view('backend.content.reservationReport',compact('reservationViews'));

}

}
