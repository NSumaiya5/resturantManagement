<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\Staff;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $order=Order::all();
        $totalOrder=$order->count();
        $foodItem=FoodItem::all();
        $totalFoodItem=$foodItem->count();
        $reservation=Reservation::all();
        $totalReservation=$reservation->count();
        $staff=Staff::all();
        $totalStaff=$staff->count();
        return view('backend.content.dashboard',compact('totalOrder','totalFoodItem','totalReservation','totalStaff'));
    }

}
