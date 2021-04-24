<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $foodItems=FoodItem::all();
        $staffs=Staff::all();


        return view('frontend.content.home',compact('foodItems','staffs'));
    }
}
//Staf::where('type','shpae')
