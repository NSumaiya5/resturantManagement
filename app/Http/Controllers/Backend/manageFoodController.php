<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\FoodItem;


class manageFoodController extends Controller
{
    public function foodItemManage()
    {
        $foodItems=FoodItem::all();
        return view('backend.content.foodItemManage',compact('foodItems'));
    }

    public function foodItemCreate(Request $request)
    {
        // dd($request->all());
    $file_name='';
    // step:1 check req has file

    if($request->hasFile('picture'))
    {
        // file is valid?

        $file=$request->file('picture');
        if($file->isvalid());
        {
            // generate unique file name

            $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

            // store image local directory

            $file->storeAs('photo',$file_name);
        }
    }
    FoodItem::create([
            'file' => $file_name,
            'name'=>$request->name,
            'description' => $request->description,
            'price'=>$request->price]);



            return redirect()->back();
    }
    public function foodItemDelete($id)
   {
    // dd($id);
       //first get the product
       $foodItems = FoodItem::find($id);


       //then delete it
       $foodItems->delete();

       return redirect()->back();
   }
   public function foodItemUpdate( $id, $status)
    {
        $foodItems=FoodItem :: find($id);
        $foodItems->update(['status'=>$status]);

        return redirect()->back();
    }

}






