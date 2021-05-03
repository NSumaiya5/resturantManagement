<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Gallery;
use App\Models\Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $gallerys=Gallery::take(6)->get();

        $foodItems=FoodItem::where('status','=','Published')->take(6)->get();

         $staffs=Staff::take(3)->get();



        return view('frontend.content.home',compact('foodItems','staffs','gallerys'));
    }

    public function allStaffView()
    {

        $staffs=Staff::all();
        return view('frontend.content.viewStaff',compact('staffs'));

    }


public function  viewMoreGallery()
{

    $gallerys=Gallery::all();
    return view('frontend.content.ViewGallery',compact('gallerys'));

}

public function  allFoodItemMenu()
{

    $foodItems=FoodItem::where('status','=','Published')->get();

  return view('frontend.content.foodItemMenu',compact('foodItems'));


}

}

//Staf::where('type','shpae')
